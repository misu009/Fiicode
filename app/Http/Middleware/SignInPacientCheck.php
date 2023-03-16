<?php

namespace App\Http\Middleware;

use App\Models\Pacient;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SignInPacientCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::exists("pacient")) {
            $pacient = Session::get("pacient");
            if (Pacient::find($pacient->id)) {
                return $next($request);
            } else {
                return redirect()->back()->withErrors("Something went wrong");
            }
        } else {
            return redirect()->route('sign.in.show');
        }
    }
}
