<?php

namespace App\Http\Controllers;

use App\Models\IstoricMedical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class IstoricMedicalController extends Controller
{
    public function index()
    {
        $pacient = Session::get('pacient')->id;
        $istoric_medical = IstoricMedical::where('pacient_id', $pacient)->first();
        return view('pacient.istoric_medical.index', ['istoric_medical' => $istoric_medical]);
    }

    public function update(Request $request)
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
