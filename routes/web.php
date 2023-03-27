<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PacientController;
use App\Http\Controllers\ProgramareController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'show'])->name('sign.in.show');
Route::post('/login', [LoginController::class, 'sign_in'])->name('sign.in.index');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register_pacient', [PacientController::class, 'show'])->name('register.pacient');
Route::post('/register_pacient_istoric', [PacientController::class, 'validation'])->name('register.pacient.istoric');
Route::post('/sign_up_pacient', [PacientController::class, 'sign_up'])->name('sign.up.pacient');

Route::get('/register_doctor', [DoctorController::class, 'show'])->name('register.doctor');
Route::post('/sign_up_doctor', [DoctorController::class, 'sign_up'])->name('sign.up.doctor');

Route::group(['middleware' => ['pacient'], 'prefix' => 'pacient'], function () {
    Route::get('/', [PacientController::class, 'edit'])->name('pacient.pacient.edit');
    Route::post('/update', [PacientController::class, 'update'])->name('pacient.pacient.update');

    Route::get('/program', [ProgramareController::class, 'index'])->name('pacient.programare.index');
    Route::get('/program/data', [ProgramareController::class, 'getIndexDate'])->name('pacient.programare.data');
    Route::post('/program/add', [ProgramareController::class, 'addProgramarePacient'])->name('pacient.programare.add');
    Route::put('program/update', [ProgramareController::class, 'updatePacient'])->name('pacient.programare.update');
    Route::delete('program/delete/{programare}', [ProgramareController::class, 'delete'])->name('pacient.programare.delete');
});

Route::group(['middleware' => ['doctor'], 'prefix' => 'doctor'], function () {
    Route::get('/', [DoctorController::class, 'edit'])->name('doctor.doctor.edit');
    Route::post('/update', [DoctorController::class, 'update'])->name('doctor.doctor.update');

    Route::get('/program', [ProgramareController::class, 'index'])->name('doctor.programare.index');
    Route::get('/program/data', [ProgramareController::class, 'getIndexDate'])->name('doctor.programare.data');
    Route::post('/program/add', [ProgramareController::class, 'addProgramareDoctor'])->name('doctor.programare.add');
    Route::put('/program/update', [ProgramareController::class, 'updateDoctor'])->name('doctor.programare.update');
    Route::delete('program/delete/{programare}', [ProgramareController::class, 'delete'])->name('doctor.programare.delete');
});

Route::get('/profil_doctor', function () {
    return view('profiles/profil_doctor');
});

Route::get('/profil_pacient', function () {
    return view('profiles.profil_pacient');
});
Route::get('/program_doctor', function () {
    return view('program/program_doctor');
});
Route::get('/program_pacient', function () {
    return view('program/program_pacient');
});

Route::get('/tutorial', function () {
    return view('footer_links/tutorial');
});

Route::get('/des_noi', function () {
    return view('footer_links/des_noi');
})->name('');

Route::get('/lista_pacienti', function () {
    return view('doctor/programari/lista_pacienti');
});