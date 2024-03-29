<?php

namespace App\Http\Controllers;

use App\Helper;
use App\Http\Requests\ValidateUserRequest;
use App\Http\Resources\UserResource;
use App\User;
use App\UserLevel;
use Auth;
use Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Notifications\UserRegistered;
use \DB;
use \Exception;

class AuthController extends Controller {
	use SendsPasswordResetEmails, ResetsPasswords {
		SendsPasswordResetEmails::broker insteadof ResetsPasswords;
		ResetsPasswords::credentials insteadof SendsPasswordResetEmails;
	}
	/**
	 * Register a new user
	 */
	function register(ValidateUserRequest $request) {
		$validated = $request->validated();
		$user_level_id = UserLevel::where('name','user')->first()->id;
		$validated['user_level_id'] = $user_level_id;
		DB::beginTransaction();
		try
		{
			$validated['password'] = bcrypt($validated['password']);

			$data = User::create($validated);
			$data->markEmailAsVerified();
			
			$data->notify(new UserRegistered());
			Helper::adminsUserActivityRequest(['type'=>'SignUpActivity', 'message' => $data->username . ' has joined ' . config('app.name') ]);
			DB::commit();
			return response()->json(['status' => 'success'], 200);
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}

	}

	/**
	 * Login user and return a token
	 */
	function login(Request $request) {
		try
		{
			$credentials = $request->only('email', 'password');
			if ($token = $this->guard()->attempt($credentials)) {
				Helper::adminsUserActivityRequest(['type'=>'LoginActivity', 'message' => auth()->user()->username . ' logged in.']);
				return response()->json(['status' => 'success'], 200)->header('Authorization', $token);
			} else {
				return Helper::invalidRequest(['error' => 'Invalid Credentials'], 'Your email or password is incorrect', 401);
			}

		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}

	}

	/**
	 * Logout User
	 */
	function logout() {
		try
		{	
			$user = auth()->user();
			$logout = $this->guard()->logout();
			Helper::adminsUserActivityRequest(['type'=>'LogoutActivity', 'message' => $user->username . ' logged out.']);
			return response()->json([
				'status' => 'success',
				'msg' => 'Logged out Successfully.',
			], 200);

		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
	}

	/**
	 * Get authenticated user
	 */
	function user(Request $request) {
		try
		{
			$user = User::find(Auth::user()->id);
			return response()->json([
				'status' => 'success',
				'data' => new UserResource($user),
			]);

		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}

	}

	/**
	 * Refresh JWT token
	 */
	function refresh() {
		try
		{
			if ($token = $this->guard()->refresh()) {
				return response()
					->json(['status' => 'successs'], 200)
					->header('Authorization', $token);
			} else {
				return Helper::invalidRequest(['error' => 'refresh_token_error'], 'Authentication error', 401);
			}

		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 401);
		}
	}

	/**
	 * Return auth guard
	 */
	function guard() {
		return Auth::guard();
	}

	function sendPasswordResetLink(Request $request) {
		$validated = $request->validate([
			'email' => 'required|email|exists:users,email',
		]);
		try
		{
			$req = new Request($validated);
			return $this->sendResetLinkEmail($req);

		} catch (Exception $bug) {
			return $this->exception($bug, 'Unknown error', 500);
		}

	}
	function sendResetLinkResponse(Request $request, $response) {
		try
		{
			return Helper::validRequest($response, 'A password reset link has been sent to your email.', 200);

		} catch (Exception $bug) {
			return $this->exception($bug, 'Unknown error', 500);
		}

	}
	function sendResetLinkFailedResponse(Request $request, $response) {
		return Helper::invalidRequest(['error' => 'Email failed to send'], 'Email could not be sent to this email address.', 401);
	}
	function callResetPassword(Request $request) {
		return $this->reset($request);
	}
	function resetPassword($user, $password) {
		$user->password = Hash::make($password);
		$user->save();
		Helper::adminsUserActivityRequest(['type'=>'PasswordResetActivity', 'message' => $user->username . '"s password is reset.']);
		event(new PasswordReset($user));
	}
	function sendResetResponse(Request $request, $response) {
		return Helper::validRequest(['success' => 'password reset success'], 'Password updated successfully, ', 200);
	}
	function sendResetFailedResponse(Request $request, $response) {
		return Helper::invalidRequest(['error' => 'Validation error'], $response == "passwords.user" ? "User validation error" : "Token validation error", 401);
	}
}
