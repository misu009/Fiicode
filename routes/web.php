<?php

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register_pacient', function () {
    return view('register_pacient');
})->name('register.pacient');

Route::get('/register_pacient_istoric', function () {
    return view('register_pacient_istoric');
})->name('register.pacient.istoric');

Route::get('/register_doctor', function () {
    return view('register_doctor');
})->name('register.doctor');
