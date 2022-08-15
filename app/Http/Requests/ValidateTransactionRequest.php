<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTransactionRequest extends FormRequest {
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
			'amount' => 'required|numeric',
			'type' => 'required',
			'reference' => 'required|string',
			'transaction_ref' => 'nullable|string',
			'payment_method' => 'required|exists:payment_methods,name',
		];
	}
}
