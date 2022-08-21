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
	
	// 'status' ,'capital_back' ,'return_for' ,'amount_type' ,
	public function rules() {
		return [
			
			'name' => 'required|string|min:2|max:255|unique:packages,name',
			'min_deposit' => 'required|numeric',
			'max_deposit' => 'required|numeric',
			'roi' => 'required|numeric',
			'status' => 'boolean',
			'capital_back' => 'boolean',
			'loop_termination' => 'required|numeric',
			'return_for' => 'string|in:period,lifetime',
			'amount_type' => 'string|in:fixed,range',
			'amount' => 'required_unless:amount_type,range|numeric',
			'turnover' =>'required|numeric|exists:durations,duration',
			'first_level_ref_commission' =>'required|numeric',
			'second_level_ref_commission' => 'required|numeric',
		];
	}
}
