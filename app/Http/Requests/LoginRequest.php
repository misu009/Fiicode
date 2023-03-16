<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'parola' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Emailul este obligatoriu',
            'email.email' => 'Emailul introdus nu are formatul corect',
            'parola' => 'Parola este obligatorie',
        ];
    }
}
