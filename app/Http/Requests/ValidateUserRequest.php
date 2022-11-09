<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUserRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'first_name' => 'required|min:2|string|max:255',
			'last_name' => 'required|min:2|string|max:255',
			'username' => 'required|min:2|string|max:255|unique:users,username',
			"email" => "email|required|unique:users,email",
			'password' => 'required|string|confirmed|min:5',
			'wallet' => 'nullable|string',
			'country' => 'nullable|string',
			'city' => 'nullable|string', 
			'gender' => 'nullable|string|in:male,female,other',
			'address' => 'nullable|string', 
			'postal_code' => 'nullable|string',
			'key_phrase' => 'nullable|string',
			'pm' => 'nullable|string',
			'secret_question' => 'nullable|string',
			'secret_answer' => 'nullable|string',
			'admin_wallet' => 'nullable|string',
			'admin_pm' => 'nullable|string',
			'ip' => 'nullable|string',
			'referral' => 'nullable|string|exists:users,username',
			"number" => "nullable|string|min:5|max:255|unique:users,number",
			'user_level_id' => 'required|numeric|exists:user_levels,id',
			'image' => 'mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
		];
	}
}
