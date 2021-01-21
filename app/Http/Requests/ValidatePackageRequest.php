<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePackageRequest extends FormRequest {
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
			
			'name' => 'required|string|min:2|max:255|unique:packages,name',
			'min_deposit' => 'required|numeric|min:50',
			'max_deposit' => 'required|numeric|min:50',
			'roi' => 'required|numeric',
			'turnover' =>'required|numeric',
			'first_level_ref_commission' =>'required|numeric',
			'second_level_ref_commission' => 'required|numeric',
		];
	}
}
