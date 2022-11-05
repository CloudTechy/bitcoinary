<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLoanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'occupation' => 'string|nullable',
            'purpose' => 'string|nullable',
            'reference' => 'string|nullable', 
            'interest_rate' => 'numeric|nullable', 
            'monthly_repayment' => 'numeric|nullable', 
            'total_repayment' => 'numeric|nullable', 
            'tenor' => 'numeric|nullable',
            'transaction_id' => 'numeric|exists:transactions,id|nullable',
            'approved' => 'boolean',
            'active' => 'boolean',
            'expiration'  => 'date|nullable'
        ];
    }
}
