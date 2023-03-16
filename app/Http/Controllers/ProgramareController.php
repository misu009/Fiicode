<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramareController extends Controller
{
    public function pacientIndex()
    {
        return view('pacient.programari.index');
    }
    public function doctorIndex()
    {
        return view('doctor.programari.index');
    }
}