<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Http\Requests\DoctorUpdateRequest;
use App\Models\Diploma;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    public function show()
    {
        return view('authentificate.register_doctor');
    }
    public function getAdress()
    {
        return $array = [
            'judet' => request()->judet,
            'localitate' => request()->localitate,
            'cartier' => request()->cartier,
            'strada' => request()->strada,
            'bloc' => request()->bloc,
            'apartament' => request()->apartament,
        ];
    }

    public function atestatUpload($id)
    {
        if (request()->hasFile('atestat')) {
            $files = request()->file('atestat');
            foreach ($files as $file) {
                $diploma = new Diploma();
                $diploma->doctor_id = $id;
                $name = $file->getClientOriginalName();
                $path = public_path() . '/images/doctor/atestate/' . $id . '/' . $name;
                $diploma->document = $path;
                if (File::exists($path)) {
                    unlink($path);
                }
                $path = public_path() . '/images/doctor/atestate/' . $id;
                $file->move($path, $name);
                $diploma->save();
            }
        }
    }

    public function profilUpload($id)
    {
        if (request()->hasFile('poza_profil')) {
            $file = request()->file('poza_profil');
            $name = 'profil.jpg';
            $path = public_path() . '/images/doctor/profil/' . $id . '/profil.jpg';
            if (File::exists($path)) {
                unlink($path);
            }
            $path = public_path() . '/images/doctor/profil/' . $id;
            $file->move($path, $name);
            $path = '/images/doctor/profil/' . $id . '/' . $name;
            return $path;
        }
        return null;
    }

    public function sign_up(DoctorRequest $request)
    {
        $doctor = new Doctor();
        $doctor->nume = $request->nume;
        $doctor->prenume = $request->prenume;
        $doctor->email = $request->email;
        $doctor->password = Hash::make($request->password);
        $doctor->data_nasterii = $request->data_nasterii;
        $doctor->adresa = $this->getAdress();
        $doctor->save();
        $this->atestatUpload($doctor->id);
        Session::put('doctor', $doctor);
        return redirect()->route('doctor.doctor.edit');
    }

    public function edit()
    {
        $doctor = Session::get('doctor');
        return view('doctor.profile.edit', ['doctor' => $doctor]);
    }

    public function update(DoctorUpdateRequest $request)
    {
        $doctor = Session::get('doctor');
        $doctor->nume = $request->nume;
        $doctor->prenume = $request->prenume;
        $doctor->adresa = $this->getAdress();
        $this->atestatUpload($doctor->id);
        $doctor->poza_profil = $this->profilUpload($doctor->id);
        $doctor->save();
        return redirect()->route('doctor.doctor.edit');
    }

    public function judete()
    {
        $data = json_decode(file_get_contents(public_path() . '/js/judete.json'));

        return response(json_encode(['judete' => $data]), 200);
    }

    public function orase($id)
    {
        $data = json_decode(file_get_contents(public_path() . '/js/orase.json'), true);

        $data = array_filter($data, function ($entry) use ($id) {
            return $entry['county_id'] == $id;
        });

        return response(json_encode(['orase' => $data]), 200);
    }
}