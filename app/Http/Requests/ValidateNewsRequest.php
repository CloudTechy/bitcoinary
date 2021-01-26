<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateNewsRequest extends FormRequest
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
            'author' => 'required|min:2|string|max:255',
            'title' => 'required|min:2|string',
            'intro' => 'required|min:2|string',
            'article' => 'required|min:2|string',
            'votes' => 'numeric',
            'comment_disabled' => 'boolean',
            'image' => 'mimes:jpeg,jpg,png,bmp,gif,svg,tiff|max:2048',
            'rank' => 'numeric',
        ];
    }
}
