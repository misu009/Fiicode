<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\Pacient;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailController;

class PacientListController extends Controller
{
    public function index()
    {
        $doctor_id = Session::get('doctor')->id;
        $pacienti = Pacient::where('doctor_id', $doctor_id)->paginate(10);
        return view('doctor.pacienti.index', ['pacienti' => $pacienti]);
    }

    public function getPacient(Request $request)
    {
        $pacient = Pacient::where('email', $request->pacient)->first();
        if (!$pacient) {
            return Redirect::back()->withErrors(['pacient' => 'Alegeti un pacient valid']);
        }
        return Redirect::route('doctor.pacient.index', ['id' => $pacient->id]);
    }

    public function indexPacient($id)
    {
        $pacient = Pacient::where('id', $id)->first();
        return view('doctor.pacienti.pacient', ['pacient' => $pacient]);
    }

    public function add(Request $request)
    {
        $invitation = new Invitation();
        $invitation->doctor_id = Session::get('doctor')->id;
        $invitation->used = false;
        $invitation->expires_at = Carbon::tomorrow();
        while (!$invitation->code or Invitation::where('code', $invitation->code)->first()) {
            $invitation->code = Str::random(10);
        }

        $to = $request->email;
        Mail::to($to)->send(new MailController('Inregistrati-va ca pacient', $invitation->code));
        $invitation->save();
        return redirect()->back()->with('success', 'Email trimis cu succes.');
    }
}
