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
    Route::get('/dashboard', 'DashboardController@index');

    // Data Karyawan
    Route::get('/dashboard/data_karyawan', 'DataKaryawanController@index');
    Route::get('/dashboard/input_karyawan', 'DataKaryawanController@store');
    Route::post('/dashboard/input_karyawan', 'DataKaryawanController@store');
    Route::get('/dashboard/ubah_karyawan/{id}', 'DataKaryawanController@store');
    Route::post('/dashboard/ubah_karyawan/{id}', 'DataKaryawanController@store');
    Route::get('/dashboard/hapus_karyawan/{id}', 'DataKaryawanController@delete');

    // Penilaian
    Route::get('/dashboard/penilaian', 'PenilaianController@index');
    Route::get('/dashboard/input_nilai/{id}', 'PenilaianController@input');
    Route::post('/dashboard/input_nilai', 'PenilaianController@store_insert');
    Route::get('/dashboard/review_nilai/{id}', 'PenilaianController@review');
    Route::post('/dashboard/review_nilai/{id}', 'PenilaianController@store_update');
    Route::get('/dashboard/hasil_nilai', 'PenilaianController@detail_nilai_karyawan');
    Route::get('/dashboard/rekap_nilai/{id}', 'PenilaianController@rekap');
    Route::post('/dashboard/rekap_nilai/{id}', 'PenilaianController@store_update');
    Route::get('/dashboard/hapus_penilaian/{id}', 'PenilaianController@delete');

    //Profile
    Route::get('/dashboard/profile', 'AdminController@profile');
    Route::post('/dashboard/profile/{id}', 'AdminController@store');

    //Data Admin
    Route::get('/dashboard/data_admin', 'AdminController@index');
    Route::get('/dashboard/input_admin', 'AdminController@store');
    Route::post('/dashboard/input_admin', 'AdminController@store');
    Route::get('/dashboard/ubah_admin/{id}', 'AdminController@store');
    Route::post('/dashboard/ubah_admin/{id}', 'AdminController@store');
    Route::get('/dashboard/hapus_admin/{id}', 'AdminController@delete');
});
