<?php

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


Route::get('/mahasiswa', function () {
    return view('koneksi');
});


Route::get('/dosen', 'DosenController@dosen');

Route::get('/dosen/cari', 'DosenController@pencarian');

Route::get('/dosen/formulirdosen', 'DosenController@formulirdosen');

Route::get('/mahasiswa', 'MahasiswaController@mahasiswa')->middleware('auth');

Route::get('/mahasiswa/cari', 'MahasiswaController@pencarian')->name('cari');

Route::get('/mahasiswa/formulirmahasiswa', 'MahasiswaController@formulirmahasiswa');

Route::post('/mahasiswa/simpanmahasiswa', 'MahasiswaController@simpanmahasiswa');

Route::get('/mahasiswa/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa');

Route::put('/mahasiswa/updatemahasiswa/{id}', 'MahasiswaController@updatemahasiswa');

Route::get('/mahasiswa/hapusmahasiswa/{nim}', 'MahasiswaController@hapusmahasiswa');

Route::get('/user', 'AuthController@user')->middleware('auth');

Route::get('/user/formuliruser', 'AuthController@formuliruser')->middleware('auth');

Route::post('/user/simpanuser', 'AuthController@simpanuser')->middleware('auth');

Route::get('/user/cari', 'AuthController@pencarianuser');

Route::get('/user/edituser/{id}', 'AuthController@edituser');

Route::put('/user/updateuser/{id}', 'AuthController@updateuser');

Route::get('/user/hapususer/{nik}', 'AuthController@hapususer');

Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');

Route::post('/user/ceklogin', 'AuthController@ceklogin')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->middleware('auth');

Route::get('/mahasiswa/all', 'MahasiswaAPIController@all');

