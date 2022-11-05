<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreticketRequest extends FormRequest
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
        return ['department' => 'required|string', 'subject' => 'required|string', 'message' => 'required|string', 
        'user_id' => 'required|numeric|exists:users,id'];
    }
}
