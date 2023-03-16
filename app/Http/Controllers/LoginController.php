<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Doctor;
use App\Models\Pacient;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function show()
    {
        return view('authentificate.login');
    }
    public function sign_in(LoginRequest $request)
    {
        Session::flush();
        if ($doctor = Doctor::where('email', $request->email)->first()) {
            if (Hash::check($request->parola, $doctor->password)) {
                Session::put('doctor', $doctor);
                return redirect()->route('doctor.doctor.edit');
            }
        } else if ($pacient = Pacient::where('email', $request->email)->first()) {
            if (Hash::check($request->parola, $pacient->password)) {
                Session::put('pacient', $pacient);
                return redirect()->route('pacient.pacient.edit');
            }
        }
        return Redirect::back()->withErrors(['login' => 'email ul sau parola sunt incorecte']);
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('sign.in.show');
    }
}