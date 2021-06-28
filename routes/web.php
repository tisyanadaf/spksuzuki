<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Login
Route::get('/login', function () {
    return view('login.index');
});

//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Data Karyawan
Route::get('/dashboard/data_karyawan', function () {
    return view('data_karyawan.index');
});
Route::get('/dashboard/input_data_karyawan', function () {
    return view('data_karyawan.form');
});

// Penilaian
Route::get('/dashboard/input_nilai', function () {
    return view('penilaian.form');
});
Route::get('/dashboard/hasil_nilai', function () {
    return view('penilaian.index');
});