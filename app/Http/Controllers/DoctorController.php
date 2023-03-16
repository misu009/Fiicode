<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Models\Diploma;
use App\Models\Doctor;
use Illuminate\Http\Request;
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

    public function fileUpload($id)
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

    public function sign_up(Request $request) //DoctorRequest
    {
        $doctor = new Doctor();
        $doctor->nume = $request->nume;
        $doctor->prenume = $request->prenume;
        $doctor->email = $request->email;
        $doctor->password = Hash::make($request->password);
        $doctor->data_nasterii = $request->data_nasterii;
        $doctor->adresa = $this->getAdress();
        $doctor->save();
        $this->fileUpload($doctor->id);
        Session::put('doctor', $doctor);
        return redirect()->route('doctor.doctor.edit');
    }

    public function edit()
    {
        $doctor = Session::get('doctor');
        return view('doctor.profile.edit', ['doctor', $doctor]);
    }
}