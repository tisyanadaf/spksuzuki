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
Route::get('/login', 'Auth\LoginController@index');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

Route::middleware(['isLogged'])->group(function () {
    //Dashboard
    Route::get('/dashboard', 'Dashboard@index');

    // Data Karyawan
    Route::get('/dashboard/data_karyawan', function () {
        return view('data_karyawan.index');
    });
    Route::get('/dashboard/input_data_karyawan', function () {
        return view('data_karyawan.form');
    });
    Route::get('/dashboard/ubah_data_karyawan', function () {
        return view('data_karyawan.ubah');
    });

    // Penilaian
    Route::get('/dashboard/penilaian', function () {
        return view('penilaian.index');
    });
    Route::get('/dashboard/input_nilai', function () {
        return view('penilaian.form');
    });
    Route::get('/dashboard/hasil_nilai', function () {
        return view('penilaian.detail');
    });
});
