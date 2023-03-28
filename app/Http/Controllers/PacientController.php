<?php

namespace App\Http\Controllers;

use App\Http\Requests\IstoricPacientRequest;
use App\Http\Requests\PacientRequest;
use App\Http\Requests\PacientUpdateRequest;
use App\Models\Invitation;
use App\Models\IstoricMedical;
use App\Models\Pacient;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class PacientController extends Controller
{
    public function show()
    {
        return view('authentificate.register_pacient');
    }
    public function validation(PacientRequest $request)
    {
        $code = $request->code;
        if ($invitation = Invitation::where('code', $code)->first()) {
            if ($invitation->used == false) {
                if ($invitation->expires_at >= Carbon::now()->format('Y-m-d')) {
                    return view('authentificate.register_pacient_istoric', ['form_request' => $request->all()]);
                } else {
                    return Redirect::back()->withErrors(['error' => 'Codul introdus a expirat. Cereti-i doctorului dvs sa va trimita unul nou']);
                }
            } else {
                return Redirect::back()->withErrors(['error' => 'Codul introdus a fost deja folosit. Cereti-i doctorului dvs sa va trimita unul nou']);
            }
        } else {
            return Redirect::back()->withErrors(['error' => 'Codul introdus nu exista']);
        }
    }

    public function getAdress()
    {
        $array = [
            'judet' => request()->judet,
            'localitate' => request()->localitate,
            'cartier' => request()->cartier,
            'strada' => request()->strada,
            'bloc' => request()->bloc,
            'apartament' => request()->apartament,
        ];
        return $array;
    }

    public function getIstoricMedical($id)
    {
        $istoric_medical = new IstoricMedical();
        $istoric_medical->pacient_id = $id;
        $istoric_medical->alergii_si_intoleranta = request()->boli_cronice_si_diagnostice;
        $istoric_medical->boli_cronice_si_diagnostice = request()->boli_cronice_si_diagnostice;
        $istoric_medical->istoricul_de_boli_si_diagnostice = request()->istoricul_de_boli_si_diagnostice;
        $istoric_medical->interventii_si_procedee_efectuate = request()->interventii_si_procedee_efectuate;
        $istoric_medical->servicii_medicale = request()->servicii_medicale;
        $istoric_medical->imunizari = request()->imunizari;
        $istoric_medical->tratament_medicamentos = request()->tratament_medicamentos;
        $istoric_medical->save();
        return $istoric_medical->id;
    }

    public function sign_up(IstoricPacientRequest $request)
    {
        $invitation = Invitation::where('code', $request->code)->first();

        $pacient = new Pacient();
        $pacient->doctor_id = $invitation->doctor_id;
        $pacient->nume = $request->nume;
        $pacient->prenume = $request->prenume;
        $pacient->email = $request->email;
        $pacient->password = Hash::make($request->password);
        $pacient->data_nasterii = $request->data_nasterii;
        $pacient->adresa = $this->getAdress();
        $pacient->save();

        $istoric_medical_id = $this->getIstoricMedical($pacient->id);
        $pacient->istoric_medical_id = $istoric_medical_id;
        $pacient->save();
        $invitation->used = true;
        $invitation->save();

        Session::put('pacient', $pacient);
        return redirect()->route('pacient.pacient.edit');
    }

    public function edit()
    {
        $pacient = Session::get('pacient');
        return view('pacient.profile.edit', ['pacient' => $pacient]);
    }

    public function fileUpload($id)
    {
        if (request()->hasFile('poza_profil')) {
            $file = request()->file('poza_profil');
            $name = 'profil.jpg';
            $path = public_path() . '/images/pacient/profil/' . $id . '/profil.jpg';
            if (File::exists($path)) {
                unlink($path);
            }
            $path = public_path() . '/images/pacient/profil/' . $id;
            $file->move($path, $name);
            $path = '/images/pacient/profil/' . $id . '/' . $name;
            return $path;
        } else if ($path = Pacient::where('id', $id)->first()->poza_profil) {
            return $path;
        }
        return null;
    }

    public function update(PacientUpdateRequest $request)
    {
        $pacient = Session::get('pacient');
        $pacient->nume = $request->nume;
        $pacient->prenume = $request->prenume;
        $pacient->adresa = $this->getAdress();
        $pacient->poza_profil = $this->fileUpload($pacient->id);
        $pacient->save();
        return redirect()->route('pacient.pacient.edit');
    }
}
