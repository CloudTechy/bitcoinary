<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notifications\CustomEmailNotification;
use App\Notifications\PackageSubscribed;
use Illuminate\Support\Facades\Notification;
use App\Http\Requests\ValidateEmailRequest;
use \DB;
use App\Helper;
use App\Package;
use \Exception;


class EmailController extends Controller
{
 	public function sendEmail(ValidateEmailRequest $request)
    {
		$validated = $request->validated();
		try {
			$validated['emails'] = array_unique($validated['emails']);
			$users = [];
			foreach ($validated['emails'] as $email => $value) {
				$user = User::where('email',$value)->first();
				if ($user) {
					array_push($users, $user);
					unset($validated['emails'][$email] );
				}
			}
			if ( count($users) > 0) {
				$users = collect($users);
				Notification::send($users, new CustomEmailNotification($validated));
			}
			if(count($validated['emails']) > 0){
				Notification::route('mail', $validated['emails'])
            	->notify( new CustomEmailNotification($validated));
			}
			return Helper::validRequest(["success" => true], 'Email sent successfully', 200);
		} catch (Exception $bug) {
			return $this->exception($bug, 'unknown error', 500);
		}
    }
}
