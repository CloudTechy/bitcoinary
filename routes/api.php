<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */


Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::prefix('v1')->group(function () {

	Route::prefix('auth')->group(function () {
		Route::post('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
		Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
		Route::post('email/verify', 'Auth\VerificationController@show')->name('verification.notice');

		// Below mention routes are public, user can access those without any restriction.
		// Create New User
		Route::post('register', 'AuthController@register');

		// Login User
		Route::post('login', 'AuthController@login');

		// Refresh the JWT Token
		Route::get('refresh', 'AuthController@refresh');

		// Send reset password mail
		Route::post('reset-password', 'AuthController@sendPasswordResetLink');

		// handle reset password form process
		Route::post('reset/password', 'AuthController@callResetPassword');
		Route::get('packagess', 'PackageController@index');
		Route::get('teamss', 'TeamController@index');
		Route::get('investorss', 'InvestorController@index');
		Route::get('testimonialss', 'TestimonialController@index');
		Route::get('newss', 'NewsController@index');
		Route::post('newsletterss', 'NewsletterController@store');
		Route::get('transactionss', 'TransactionController@index');
		Route::get('withdrawalss', 'WithdrawalController@index');
		Route::get('paymentss', 'PaymentMethodController@index');


		// Below mention routes are available only for the authenticated users.

		Route::middleware('auth:api')->group(function () {
			// Email Verification Routes...
			

			// Get user info
			Route::get('user', 'AuthController@user');

			// Logout user from application
			Route::post('logout', 'AuthController@logout');

			//Route::resource('users', 'UserController');
			Route::resource('users', 'UserController');
			Route::get('user/referrals/{user}', 'UserController@referral');
			Route::resource('durations', 'DurationController');
			Route::get('withdrawdurations/{withdraw_duration}', 'WithdrawDurationController@show');
			Route::patch('withdrawdurations/{withdraw_duration}', 'WithdrawDurationController@update');
			Route::delete('withdrawdurations/{withdraw_duration}', 'WithdrawDurationController@destroy');
			Route::resource('withdrawdurations', 'WithdrawDurationController');
			Route::resource('banks', 'BankController');
			Route::resource('newsletters', 'NewsletterController');
			Route::resource('packages', 'PackageController');
			Route::resource('teams', 'TeamController');
			Route::resource('investors', 'InvestorController');
			Route::resource('testimonials', 'TestimonialController');
			Route::resource('news', 'NewsController');

			Route::delete('bankdetails/{bankdetail}', 'BankDetailController@destroy');
			Route::get('bankdetails/{bankdetail}', 'BankDetailController@show');
			Route::patch('bankdetails/{bankdetail}', 'BankDetailController@update');
			Route::resource('bankdetails', 'BankDetailController');
			Route::resource('paymentmethods', 'PaymentMethodController');
			Route::resource('packageusers', 'PackageUserController');
			Route::resource('transactions', 'TransactionController');
			Route::resource('withdrawals', 'WithdrawalController');
			Route::get('subscribe/{packageuser}', 'PackageUserController@confirmSubscription');
			Route::get('confirm_withdrawal/{withdrawal}', 'WithdrawalController@confirmWithdrawal');
			Route::get('confirmWithdrawalRequest/{user}', 'WithdrawalController@ConfirmWithdrawalRequest');
			Route::get('cancelWithdrawalRequest/{user}', 'WithdrawalController@CancelWithdrawalRequest');
			Route::post('pop', 'WithdrawalController@popUpload');
			Route::post('email', 'EmailController@sendEmail');
			Route::post('showWlt', 'TransactionController@wlt');
			Route::post('deposit', 'PackageUserController@deposit');

		});
	});
});
