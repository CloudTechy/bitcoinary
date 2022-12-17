<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateTeamRequest extends FormRequest
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
            'name' => 'required|min:2|string|max:255',
            'designation' => 'required|string|max:255',
            'intro' => 'nullable|string',
            'image' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
            'rank' => 'numeric',
        ];
    }
}
