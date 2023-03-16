<?php

namespace App\Http\Middleware;

use App\Models\Doctor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SignInDoctorCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::exists("doctor")) {
            $doctor = Session::get("doctor");
            if (Doctor::find($doctor->id)) {
                return $next($request);
            } else {
                return redirect()->back()->withErrors("Something went wrong");
            }
        } else {
            return redirect()->route('sign.in.show');
        }
    }
}