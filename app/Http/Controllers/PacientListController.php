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
use App\Models\Doctor;
use App\Models\IstoricMedical;

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
        $istoric_medical = IstoricMedical::where('pacient_id', $pacient->id)->first();
        return view('doctor.pacienti.pacient', ['istoric_medical' => $istoric_medical]);
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

    public function redirect(Request $request)
    {
        $doctor = Doctor::where('email', $request->doctor)->first();
        if (!$doctor) {
            return Redirect::back()->withErrors(['pacient' => 'Alegeti un doctor valid']);
        }

        $pacient = Pacient::where('id', $request->id)->first();
        $pacient->doctor_id = $doctor->id;
        $pacient->save();
        return Redirect::route('doctor.pacienti.index');
    }

    public function updateIstoric(Request $request)
    {
        $istoric_medical = IstoricMedical::where('id', $request->id)->first();
        if (!$istoric_medical) {
            return Redirect::back()->withErrors(['istoric_medical' => 'Nu s-a putut updata']);
        }
        $istoric_medical->alergii_si_intoleranta = $request->alergii_si_intoleranta;
        $istoric_medical->boli_cronice_si_diagnostice = $request->boli_cronice_si_diagnostice;
        $istoric_medical->istoricul_de_boli_si_diagnostice = $request->istoricul_de_boli_si_diagnostice;
        $istoric_medical->interventii_si_procedee_efectuate = $request->interventii_si_procedee_efectuate;
        $istoric_medical->servicii_medicale = $request->servicii_medicale;
        $istoric_medical->imunizari = $request->imunizari;
        $istoric_medical->tratament_medicamentos = $request->tratament_medicamentos;
        $istoric_medical->save();
        return redirect()->back()->with('success', 'IStoric medical updatat cu succes.');
    }
}
