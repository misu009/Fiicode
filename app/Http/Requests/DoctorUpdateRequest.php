<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'profil' => 'nullable|image',
            'nume' => 'required|max:20|min:3',
            'prenume' => 'required|max:20|min:3',
            'judet' => 'required',
            'localitate' => 'required',
            'cartier' => 'required',
            'strada' => 'required',
            'bloc' => 'numeric|required',
            'apartament' => 'numeric|required',
            'atestat' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'profil' => 'fisierul urcat pentru poza de profil nu este valid',
            'nume.required' => 'numele este obligatoriu',
            'nume.min' => 'numele trebuie sa aiba minim 3 caractere',
            'nume.max' => 'numele trebuia sa aiba maxim 20 caractere',
            'prenume.required' => 'prenumele este obligatoriu',
            'prenume.min' => 'prenumele trebuie sa aiba minim 3 caractere',
            'prenume.max' => 'prenumele trebuia sa aiba maxim 20 caractere',
            'judet' => 'judetul este obligatoriu',
            'localitate' => 'localitatea este obligatorie',
            'cartier' => 'cartierul este obligatoriu',
            'bloc' => 'blocul este obligatoriu si trebuie sa fie un numar',
            'apartament' => 'apartamentul este obligatoriu si trebuie sa fie un numar',
        ];
    }
}
