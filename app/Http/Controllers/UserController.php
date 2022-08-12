<?php

namespace App\Http\Controllers;

use App\Helper;
use App\Http\Requests\ValidateUserRequest;
use App\Http\Resources\UserResource;
use App\Http\Resources\ReferralResource;
use App\User;
use App\UserLevel;
use App\Package;
use Illuminate\Http\Request;
use \DB;
use \Exception;
use App\Http\Controllers\PackageUserController;

class UserController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		try {
			$page = request()->query('page', 1);
			$pageSize = request()->query('pageSize', 10000000);
			$data = User::filter(request()->all())
				->latest()
				->paginate($pageSize);
			$data = UserResource::collection($data);
			$builtData = Helper::buildData($data);
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
	public function store(ValidateUserRequest $request) {
		$validated = $request->validated();
		$user_level_id = UserLevel::where('name','user')->first()->id;
		$validated['user_level_id'] = '$user_level_id';
		DB::beginTransaction();
		try
		{
			$validated['password'] = bcrypt($validated['password']);
			$data = User::create($validated);
			$data->sendEmailVerificationNotification();
			DB::commit();
			return Helper::validRequest(new UserResource($data), 'data was sent successfully', 200);
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(User $user) {
		try {
			$data = new UserResource($user);
			return Helper::validRequest($data, 'specified data was fetched successfully', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(User $user) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, User $user) {
		DB::beginTransaction();
		$validated = $request->validate([
			'first_name' => 'min:2|string|max:255',
			'last_name' => 'min:2|string|max:255',
			'wallet' => 'nullable|string',
			'country' => 'nullable|string',
			'pm' => 'nullable|string',
			'admin_wallet' => 'nullable|string',
			'admin_pm' => 'nullable|string',
			"number" => "string|min:5|max:255",
			"email" => "email",
			'password' => 'string|min:5|confirmed',
			'user_level_id' => 'integer',
			'image' => 'mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
		]);
		try {
			if (isset($validated['password'])) {
				$validated['password'] = bcrypt($validated['password']);
			}
			$data = $user->update($validated);
			Helper::adminsUserActivityRequest(['type'=>'ProfileActivity', 'message' => $user->username . ' updated the profile data.']);
			DB::commit();
			return Helper::validRequest(["success" => $data], 'Updated successfully', 200);
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(User $user) {
		DB::beginTransaction();
		try {
			$data = $user->delete();
			DB::commit();
			return Helper::validRequest(["success" => $data], 'Item deleted successfully', 200);
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	public function userSubscription(User $user, Package $package){
		$subscriptionController = new PackageUserController();
		$result = $subscriptionController->store(new Request(['user_id' => $user->id, 'package_id' => $package->id]));
		return $result;
	}

	public function referral(User $user){
		try {
			$firstLevelReferrers = User::where('referral', $user->username)->get()->toArray();

			$firstLevelReferrers = array_map(function($user){
				$user['referral_level']  = 1;
				return $user;
			}, $firstLevelReferrers );
			global $secondLevelReferrers;
			$secondLevelReferrers = [];
			for ($i=0; $i < count($firstLevelReferrers)  ; $i++) { 
				$user = $firstLevelReferrers[$i];
				$secondLevelReferrersBk = User::where('referral', $user['username'])->get()->toArray();
				$secondLevelReferrersBk_Levels = array_map(function($user){
							$user['referral_level']  = 2;
							return $user;
						}, $secondLevelReferrersBk);
				$secondLevelReferrers = array_merge($secondLevelReferrers, $secondLevelReferrersBk_Levels);
			}
			$referrals = array_merge($firstLevelReferrers, $secondLevelReferrers);
			$referrals = collect($referrals);
			$data = ReferralResource::collection($referrals);
			return Helper::validRequest($data, 'data was fetched successfully', 200);
			$data = ReferralResource::collection($referrals);
			
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	public function uploadImage(Request $request, User $user)
    {
        $validated = $request->validate([
            "image" => 'required|mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
        ]);
        DB::beginTransaction();
         $validated['image'] = Helper::uploadImage($request, 'image', 'images/users');
        try
        {
            $result = $user->update(['image' => $validated['image']]);
            DB::commit();
            Helper::adminsUserActivityRequest(['type'=>'AvatarActivity', 'message' =>  $user->username . ' updated the profile avatar.']);
            return Helper::validRequest($result, 'User avatar updated successfully', 200);
        } catch (Exception $bug) {
            DB::rollback();
            return $this->exception($bug, 'unknown error', 500);
        }
    }
}
