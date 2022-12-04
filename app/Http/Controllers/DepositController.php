<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper;
// use App\Http\Requests\ValidatePackageUserRequest;
use App\Http\Requests\ValidateTransactionRequest;
use App\Notifications\AdminNewDepositRequest;
use App\Notifications\UserNewDepositRequest;
use App\Notifications\TransactionMade; 
use App\Notifications\WithdrawalMade;
use \DB;
use App\Transaction;
use App\User;
use App\PackageUser;

class DepositController extends Controller
// controller for processing deposit and relaterd matters
{
    public function deposit(ValidateTransactionRequest $request){
		$validated = $request->validated();
        if($validated['type'] != 'balance'){
            return Helper::invalidRequest(['Invalid transaction'], 'You can only credit user balance through this medium', 400);
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
				DB::commit();
                $transaction->user->notify(new TransactionMade($transaction));
				Helper::adminsUserActivityRequest(['type'=>'TransactionActivity', 'message' =>  $transaction->user->username .'\'s account balance was credited $'. $transaction->amount]);
				
				return Helper::validRequest(['success' => true], 'Account balance credited', 200);
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
			$transaction = $receiver->transactions()->create(['reference' => 'P2P TRANSFER', 'transaction_ref' => '', 'type' => 'deposit', 'payment_method' => 'Bitcoin', 'amount' => $validated['amount'], 'sent' => true, 'confirmed' => true]);
			$withdrawal = $sender->withdrawals()->create(['payment_method' => 'Bitcoin','amount' => $validated['amount'], 'reference' => 'P2P TRANSFER', 'processed' => true, 'confirmed' => true]);
            DB::commit();
			$sender->notify(new WithdrawalMade($withdrawal));
			$transaction->user->notify(new TransactionMade($transaction));
            return Helper::validRequest($transaction, 'Tranfer request successful', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }


	 }
}
