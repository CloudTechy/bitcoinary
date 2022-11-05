<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateticketRequest extends FormRequest
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
        'department' => 'string', 
        'message' => 'string', 
        'subject' => 'string', 
        'status' => 'string', 
        'closing_remark' => 'required_unless:status,pending|string', 
        'pending_remark' => 'required_unless:status,closed|string',
        'admin_username'  => 'required|numeric|exists:users,username'];
    }
}
