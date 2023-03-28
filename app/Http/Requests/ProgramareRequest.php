<?php

namespace App\Http\Requests;

use App\Models\Programare;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class ProgramareRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(Request $request): array
    {
        if (Session::get('doctor')) {
            return [
                'data' => 'required|date',
                'ora' => 'required|date_format:H:i',
                'pacient' => 'required|email|exists:pacients,email',
                'importanta' => ['required', Rule::in(['warning', 'success', 'danger'])],
                'description' => 'required',
            ];
        } else {
            return [
                'data' => 'required|date|after:today',
                'ora' => 'required|date_format:H:i',
            ];
        }
    }

    public function messages(): array
    {
        Session::put('modal', request()->action);
        return [
            'data.required' => 'data este obligatorie',
            'date.today' => 'nu puteti face o programare pe o data din trecut',
            'data.date' => 'nu ati ales o data valida',
            'ora.required' => 'ora este obligatorie',
            'ora.date_format' > 'nu ati ales o ora valid',
            'pacient' => 'pacientul ales nu are formatul cerut',
            'importanta' => 'nu ati ales o importanta valida',
            'description' => 'trebuie sa specificati cateva detalii despre programare',
        ];
    }
}
