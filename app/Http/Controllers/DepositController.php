<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper;
// use App\Http\Requests\ValidatePackageUserRequest;
use App\Http\Requests\ValidateTransactionRequest;
use App\Notifications\AdminNewDepositRequest;
use App\Notifications\UserNewDepositRequest;
use App\Notifications\TransactionMade; 
use \DB;
use App\Transaction;

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
				$transaction = Transaction::create(['user_id' => $validated['user_id'], 'reference' =>'SELF DEPOSIT' ,'transaction_ref' => $validated['transaction_ref'], 'payment_method' => $validated['payment_method'], 'amount' => $validated['amount'], 'sent' => true, 'active' => false , 'pop' => $pop]);
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
				Helper::adminsUserActivityRequest(['type'=>'TransactionActivity', 'message' =>  $transaction->user->username .'\'s account balance was credited $'. $validated['amount']]);
				
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

            $transaction = $transaction->update($validated);
            DB::commit();
            return Helper::validRequest($transaction, 'pop updated successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }


	 }
}
