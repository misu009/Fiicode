<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramareRequest;
use App\Models\Pacient;
use App\Models\Programare;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ProgramareController extends Controller
{
    public function index()
    {
        if ($doctor = Session::get('doctor')) {
            $programari = Programare::where('doctor_id', $doctor->id)->where('data', '>=', Carbon::today())->orderBy('data')->paginate(10);
            return view('doctor.programari.index', ['programari' => $programari]);
        } else if ($pacient = Session::get('pacient')) {
            $programari = Programare::where('pacient_id', $pacient->id)->where('data', '>=', Carbon::today())->orderBy('data')->paginate(10);
            return view('pacient.programari.index', ['programari' => $programari]);
        }
    }

    public function getIndexDate(Request $request)
    {
        $validator = Validator::make($_REQUEST, [
            'data' => 'date|nullable',
            'action' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors(['action' => 'actiune nevalida']);
        }

        if ($request->action === "find" and $request->data) {
            if ($doctor = Session::get('doctor')) {
                $programari = Programare::where('doctor_id', $doctor->id)
                    ->whereDate('data', Carbon::parse($request->data)->startOfDay())
                    ->whereDate('data', Carbon::parse($request->data)->endOfDay())
                    ->orderBy('data')
                    ->paginate(10)
                    ->appends($request->query());
                return view('doctor.programari.index', ['programari' => $programari, 'data' => $request->data]);
            } else if ($pacient = Session::get('pacient')) {
                $programari = Programare::where('pacient_id', $pacient->id)
                    ->whereDate('data', Carbon::parse($request->data)->startOfDay())
                    ->whereDate('data', Carbon::parse($request->data)->endOfDay())
                    ->orderBy('data')
                    ->paginate(10)
                    ->appends($request->query());
                return view('pacient.programari.index', ['programari' => $programari, 'data' => $request->data]);
            }
        } else if ($request->action === "reset") {
            if ($doctor = Session::get('doctor')) {
                return redirect()->route('doctor.programare.index');
            } else if ($pacient = Session::get('pacient')) {
                return redirect()->route('pacient.programare.index');
            }
        }

        return Redirect::back()->withErrors(['action' => 'actiune nevalida']);
    }
    public function addProgramareDoctor(ProgramareRequest $request)
    {
        $programare = new Programare();
        $programare->doctor_id = Session::get('doctor')->id;
        $programare->pacient_id = Pacient::where('email', $request->pacient)->first()->id;
        $programare->data = $request->data . ' ' . $request->ora;
        $programare->importanta = $request->importanta;
        $programare->description = $request->description;
        $programare->save();
        return Redirect::back()->with('succes', 'Programare adaugata cu succes');
    }

    public function addProgramarePacient(ProgramareRequest $request)
    {
        $pacient = Session::get('pacient');
        $data = Carbon::parse($request->data . $request->ora);

        if (Programare::where('doctor_id', $pacient->doctor_id)
            ->where('data', '>=', $data->subMinutes(10))
            ->where('data', '<=', $data->addMinutes(20))
            ->first()
        ) {
            return Redirect::back()->withErrors(['action' => 'Doctorul dvs nu are loc liber la acel moment']);
        }

        $data->subMinutes(10);
        if ($programare = Programare::whereDate('data', $data)
            ->where('pacient_id', $pacient->id)
            ->count() >= 2
        ) {
            return Redirect::back()->withErrors(['action' => 'Nu va puteti face mai mult de 2 programari intr-o zi']);
        }

        $programare = new Programare();
        $programare->doctor_id = $pacient->doctor_id;
        $programare->pacient_id = $pacient->id;
        $programare->data = $request->data . ' ' . $request->ora;
        $programare->importanta = 'success';
        $programare->description = $request->description ?: 'Pacientul nu a specificat motivul programarii';
        $programare->save();
        return Redirect::back()->with('succes', 'Programare adaugata cu succes');
    }

    public function updateDoctor(ProgramareRequest $request)
    {
        $programare = Programare::where('id', $request->id)->first();
        if (!$programare)
            return Redirect::back()->withErrors('error', 'Programarea nu a fost identificata');

        $programare->doctor_id = Session::get('doctor')->id;
        $programare->pacient_id = Pacient::where('email', $request->pacient)->first()->id;
        $programare->data = $request->data . ' ' . $request->ora;
        $programare->importanta = $request->importanta;
        $programare->description = $request->description;
        $programare->save();
        return Redirect::back()->with('succes', 'Programare adaugata cu succes');
    }

    public function updatePacient(ProgramareRequest $request)
    {
        $programare = Programare::where('id', $request->id)->first();
        if (!$programare)
            return Redirect::back()->withErrors('error', 'Programarea nu a fost identificata');

        $pacient = Session::get('pacient');
        $data = Carbon::parse($request->data . $request->ora);
        if (Programare::where('doctor_id', $pacient->doctor_id)
            ->where('data', '>=', $data->subMinutes(10))
            ->where('data', '<=', $data->addMinutes(20))
            // ->where('pacient_id', '!=', $pacient->id)
            ->first()
        ) {
            dd($programare);
            return Redirect::back()->withErrors(['action' => 'Doctorul dvs nu are loc liber la acel moment']);
        }
        dd(2);
    }

    public function delete(Programare $programare)
    {
        $programare->delete();
        return redirect()->back()->with('success', 'Programare stearsa cu succes');
    }
}