<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateEmailRequest extends FormRequest
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
        $rules =  [
            'message' => 'string|required',
            'subject' => 'string|required',
            'emails' => 'array|required',
        ];
         if (!empty($this->request->get('emails')) && is_array($this->request->get('emails'))) {

            foreach ($this->request->get('emails') as $email => $value) {
                $rules['emails.'.$email] = 'required|email';
            }

        }
        return $rules;
    }
}
