<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class PacientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(Request $request): array
    {
        return [
            'nume' => 'required|max:20|min:3',
            'prenume' => 'required|max:20|min:3',
            'email' => 'required|email|unique:pacients,email|unique:doctors,email',
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols(),
            ],
            'confirm_password' => 'required|same:password',
            'data_nasterii' => 'before:today|required',
            'judet' => 'required',
            'localitate' => 'required',
            'cartier' => 'required',
            'strada' => 'required',
            'bloc' => 'required',
            'apartament' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nume.required' => 'numele este obligatoriu',
            'nume.min' => 'numele trebuie sa aiba minim 3 caractere',
            'nume.max' => 'numele trebuia sa aiba maxim 20 caractere',
            'prenume.required' => 'prenumele este obligatoriu',
            'prenume.min' => 'prenumele trebuie sa aiba minim 3 caractere',
            'prenume.max' => 'prenumele trebuia sa aiba maxim 20 caractere',
            'email.required' => 'emailul este obligatoriu',
            'email.email' => 'nu ati respectat structura unui email',
            'email.unique' => 'sunteti deja inregistrat',
            'password.required' => 'parola este obligatorie',
            'password.password' => 'parola trebuie sa aiba minim 8 caractere formata din litere mari si mic, numere si simboluri',
            'confirm_password.required' => 'confirma parola este obligatorie',
            'confirm_password.same' => 'parolele nu coincid',
            'data_nasterii.before' => 'data trebuie sa fie inainte de azi',
            'data_nasterii.required' => 'data este obligatorie',
            'judet' => 'judetul este obligatoriu',
            'localitate' => 'localitatea este obligatorie',
            'cartier' => 'cartierul este obligatoriu',
            'bloc' => 'blocul este obligatoriu',
            'apartament' => 'apartamentul este obligatoriu',
        ];
    }
}
