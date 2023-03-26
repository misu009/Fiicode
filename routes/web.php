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

    Route::get('/program', [ProgramareController::class, 'pacientIndex'])->name('pacient.programare.index');
});

Route::group(['middleware' => ['doctor'], 'prefix' => 'doctor'], function () {
    Route::get('/', [DoctorController::class, 'edit'])->name('doctor.doctor.edit');
    Route::post('/update', [DoctorController::class, 'update'])->name('doctor.doctor.update');

    Route::get('/program', [ProgramareController::class, 'doctorIndex'])->name('doctor.programare.index');
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
Route::get('/lista_pacienti', function () {
    return view('doctor/programari/lista_pacienti');
});
