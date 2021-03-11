<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notifications\CustomEmailNotification;
use App\Notifications\PackageSubscribed;
use Illuminate\Notifications\Notification;
use \DB;
use App\Helper;
use App\Package;
use \Exception;


class EmailController extends Controller
{
 	public function sendEmail(Request $request)
    {
       DB::beginTransaction();
		$validated = $request->validate([
			'message' => 'string|required',
			'subject' => 'string|required',
			'email' => 'email|required',
		]);
		try {
			// Notification::route('mail', 'taylor@example.com')
   //          ->notify( new CustomEmailNotification($validated));
			// // $package = Package::first();
			$user = User::where('email',$validated['email'])->first();
			if ($user) {
				$result = $user->notify(new CustomEmailNotification($validated, $user));
				return Helper::validRequest(["success" =>$result], 'Email sent successfully', 200);
			}else{
				$result =  Notification::route('mail', $validated['email'])
            	->notify( new CustomEmailNotification($validated));
			}
			
			
			
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
    }
}
