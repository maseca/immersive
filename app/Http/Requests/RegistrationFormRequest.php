<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationFormRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email',
            'password'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First Name field must not be blank.',
            'last_name.required'  => 'Last Name field must not be blank',
            'email.required'      => 'Email field must not be blank',
            'password.required'   => 'Password field must not be blank',
        ];
    }
}
