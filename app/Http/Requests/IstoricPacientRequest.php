<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IstoricPacientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'alergii_si_intolerante' => 'required',
            'boli_cronice_si_diagnostice' => 'required',
            'istoricul_de_boli_si_diagnostice' => 'required',
            'servicii_medicale' => 'required',
            'imunizari' => 'required',
            'tratament_medicamentos' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'error' => 'all fields are required',
        ];
    }
}
