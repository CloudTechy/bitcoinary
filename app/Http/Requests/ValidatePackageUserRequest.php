<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePackageUserRequest extends FormRequest {
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
			'user_id' => 'required|numeric|exists:users,id',
			'pop' => 'mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048|required_unless:fromWallet,true',
			'amount' => 'required|numeric|min:50',
			'transaction_ref' => 'nullable|string',
			'payment_method' => 'required|exists:payment_methods,name',
			'fromWallet' => 'boolean',
		];
	}
}
