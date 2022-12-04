<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKYCRequest extends FormRequest
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
           'type' => 'string|in:passport,driving license,identity card', 
           'file' => 'mimes:jpeg,jpg,png,bmp,gif,svg,tiff,pdf|max:2048', 
           'issue' => 'string|required_unless:approved,true', 
           'approved' => 'boolean|nullable', 
           'admin_username' => 'string|nullable|exists:users,username', 
        ];
    }
}
