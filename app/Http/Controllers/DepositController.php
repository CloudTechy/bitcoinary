<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper;
// use App\Http\Requests\ValidatePackageUserRequest;
use App\Http\Requests\ValidateTransactionRequest;
use App\Notifications\AdminNewDepositRequest;
use App\Notifications\AdminNewP2PTransferRequest;
use App\Notifications\UserNewDepositRequest;
use App\Notifications\TransactionMade; 
use App\Notifications\ReferralCommissionNotification; 
use App\Notifications\WithdrawalMade;
use \DB;
use App\Transaction;
use App\User;
use App\Package;
use App\PackageUser;

class DepositController extends Controller
// controller for processing deposit and relaterd matters
{
    public function deposit(ValidateTransactionRequest $request){
		$validated = $request->validated();
        if($validated['type'] != 'balance'){
            return Helper::invalidRequest(['Invalid transaction'], 'You can only credit user balance through this medium', 400);
        }
		$package_min_deposit = Package::min('min_deposit');
		if($validated['amount'] < $package_min_deposit ){
            return Helper::invalidRequest(['Invalid transaction'], 'The minimum amount to deposit is $' . $package_min_deposit, 400);
		}
		try
		{DB::beginTransaction();
             $pop = Helper::uploadImage($request, 'pop', 'images/pop');
				$transaction = Transaction::create(['user_id' => $validated['user_id'], 'reference' =>'SELF DEPOSIT', 'type' => 'deposit', 'transaction_ref' => $validated['transaction_ref'], 'payment_method' => $validated['payment_method'], 'amount' => $validated['amount'], 'sent' => true, 'active' => false , 'pop' => $pop]);
				DB::commit();
				$transaction->user->notify(new UserNewDepositRequest($transaction));
                Helper::adminsNotificationRequest(new AdminNewDepositRequest($transaction));
			    Helper::adminsUserActivityRequest(['type'=>'TransactionActivity', 'message' =>  $transaction->user->username .' has claimed deposit of $'. $validated['amount'] .' via '.$validated['payment_method']]);
				return Helper::validRequest($transaction, 'Your deposit has been saved. It will become active as soon as the checks are complete.', 200);
		
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}
    public function confirmDeposit(Transaction $transaction) {
		DB::beginTransaction();
		try {
			if(auth()->user()->user_level->name == 'user'){
				return Helper::inValidRequest('You are not unauthorized to peform this operation.', 'Unauthorized Access!', 400);
			}

			if($transaction->confirmed == false && $transaction->sent == true && $transaction->active == false ){
				$transaction->update(['confirmed' => true]);
				$referrer = User::where('username', $transaction->user->referral)->first();
				if($referrer->loopReferralCommission() == false && $transaction->user->referral_commission_loop > 0){}
				else{
					$this->referralPayment($transaction);
				}
				
                $transaction->user->notify(new TransactionMade($transaction));
				
				Helper::adminsUserActivityRequest(['type'=>'TransactionActivity', 'message' =>  $transaction->user->username .'\'s account balance was credited $'. $transaction->amount]);
		
				DB::commit();
				return Helper::validRequest(['success' => true], 'User wallet has been credited successfully', 200);
			}
            else {
                return Helper::invalidRequest(['Invalid Deposit transaction'], 'The transaction has already been confirmed or it is active', 400);
            }

		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}

	}

	 public function editpop(Request $request, Transaction $transaction) {

		$validated = $request->validate([
            'pop' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
        ]);
        DB::beginTransaction();
        try {
            $validated['pop'] = $request->hasFile('pop') ? Helper::uploadImage($request, 'pop', 'images/pop') : $transaction->pop;
			$packageuser = PackageUser::where('transaction_id', $transaction->id)->first();
            $trans = $transaction->update($validated);
			Helper::adminsUserActivityRequest(['type'=>'TransactionActivity', 'message' =>  $transaction->user->username .' has updated his pop, with transaction id: '. $transaction->id .' method: '. $transaction->payment_method]);
			Helper::UserActivityRequest(['type'=>'TransactionActivity', 'message' =>  'You updated your POP with transaction id: ' . $transaction->id .' method :' . $transaction->payment_method]);	
			if(!empty($packageuser)){
				$packageuser = $packageuser->update($validated);
			}
            DB::commit();
            return Helper::validRequest($trans, 'POP updated successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }


	 }

	  public function transfer(Request $request) {

		$validated = $request->validate([
            'receiver_username' => 'required|exists:users,username',
			'amount' => 'required|numeric',
			'sender_id' => 'required|exists:users,id',
        ]);
        DB::beginTransaction();
        try {
			
            $receiver = User::where('username', $validated['receiver_username'])->firstorFail();
			$sender = User::find($validated['sender_id']);
			if ($sender->balance < $validated['amount']) {
				return Helper::invalidRequest(['success' => false], 'Insufficient funds', 400);
			}
			if($sender->p2pTransferConfirmation()){
				$transaction = $receiver->transactions()->create(['reference' => 'P2P TRANSFER', 'transaction_ref' => 'Transfer from ' . $sender->username  , 'type' => 'deposit', 'payment_method' => 'Bitcoin', 'amount' => $validated['amount'], 'sent' => true, 'confirmed' => false]);
				$withdrawal = $sender->withdrawals()->create(['payment_method' => 'Bitcoin','amount' => $validated['amount'], 'reference' => 'P2P TRANSFER TO '. $receiver->username, 'processed' => true, 'confirmed' => true]);
          		
				$sender->notify(new WithdrawalMade($withdrawal, "P2P transfer to " . $receiver->names));
                Helper::adminsNotificationRequest( new AdminNewP2PTransferRequest($transaction, $sender, $receiver));
			    Helper::adminsUserActivityRequest(['type'=>'TransactionActivity', 'message' =>  $sender->username .' has requested to transfer $'. $validated['amount'] .' to '.  $receiver->username]);
			
				DB::commit();
				return Helper::validRequest($transaction, 'Your transfer request has been sent and your peer will be credited after review.', 200);
			}
			else{
				$transaction = $receiver->transactions()->create(['reference' => 'P2P TRANSFER', 'transaction_ref' => 'Transfer from ' . $sender->username  , 'type' => 'deposit', 'payment_method' => 'Bitcoin', 'amount' => $validated['amount'], 'sent' => true, 'confirmed' => true]);
				$withdrawal = $sender->withdrawals()->create(['payment_method' => 'Bitcoin','amount' => $validated['amount'], 'reference' => 'P2P TRANSFER TO '. $receiver->username, 'processed' => true, 'confirmed' => true]);
          		
				$sender->notify(new WithdrawalMade($withdrawal, "P2P transfer to " . $receiver->names));
				$transaction->user->notify(new TransactionMade($transaction));
				Helper::adminsUserActivityRequest(['type'=>'TransactionActivity', 'message' =>  $sender->username .' has requested to transfer $'. $validated['amount'] .' to '.  $receiver->username]);
			
				DB::commit();
				return Helper::validRequest($transaction, 'Tranfer request successful', 200);
			}
			  
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }


	 }
	 public function referralPayment(Transaction $transaction) {
		DB::beginTransaction();
		try {
			$user = User::find($transaction->user_id);
			$referrer = User::where('username', $user->referral)->first();
			if($referrer){
				$upline = User::where('username', $referrer->referral)->first();
				$referrer_count = PackageUser::where('user_id', $user->id)->where('referral', $referrer->id)->count();
			}else $upline = null;
			
			$package = Package::where('min_deposit', '<=' , $transaction->amount)->where('max_deposit', '>=',$transaction->amount)->first(); 
			$commission_first_level = $package->first_level_ref_commission / 100 * $transaction->amount;
			$commission_second_level = $package->second_level_ref_commission / 100 * $transaction->amount;
			$paymentMethod = User::first()->bankDetails->first()->payment_method;
			
			if ($referrer && $user->userLevel->name == "user") {
				if ($commission_first_level > 0) {
					$transaction = $referrer->transactions()->create(['reference' => 'first tier commission', 'payment_method' => $paymentMethod ? $paymentMethod :'Bitcoin', 'type' => 'profit', 'amount' => $commission_first_level, 'confirmed' => true, 'active' => false, 'sent' => true]);
					$user->update(['referral_commission_loop' => ++$user->referral_commission_loop]);	
					$transaction->user->notify(new ReferralCommissionNotification($transaction, $user));
					Helper::adminsUserActivityRequest(['type'=>'CommissionActivity', 'message' => $referrer->username . ' received $' .$commission_first_level.' as first level commission.']);
				}
				if ($upline && $commission_second_level > 0) {
					$transaction = $upline->transactions()->create(['reference' => 'second tier commission', 'payment_method' => $paymentMethod ? $paymentMethod :'Bitcoin', 'type' => 'profit', 'amount' => $commission_second_level, 'confirmed' => true, 'active' => false, 'sent' => true]);
					$transaction->user->notify(new ReferralCommissionNotification($transaction, $user));
					Helper::adminsUserActivityRequest(['type'=>'CommissionActivity', 'message' => $upline->username . ' received $' .$commission_second_level.' as second level commission.']);
				}
				DB::commit();
				return true;
			}
			return true;
		} catch (Exception $bug) {
			DB::rollback();
			return false;
		}

	}

}
