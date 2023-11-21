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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
    return "<h1>Haloo Apa Kabar</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pertemuan1', function () {
    return view('introhtml');
});

Route::get('pertemuan2', function () {
    return view('introhtml2');
});

Route::get('pertemuan3', function () {
    return view('introcss');
});

Route::get('pertemuan4', function () {
    return view('introlayout');
});

Route::get('pertemuan5', function () {
    return view('introjs');
});

Route::get('pertemuan6', function () {
    return view('kalkulator');
});

Route::get('pertemuan7', function () {
    return view('validasijs');
});

Route::get('profile', function () {
    return view('index1');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


// pemanggilan sebuah library -> konsep OOP
// kalo di php pake use dan ::
// kalo di java pake import dan .

//route -> routing, membuat aman web -> / (opsional, boleh dikasih atau ga), contoh: 127.0.0.1:8000/halo2

// POV MVC
// Model : data
// View : tampilan front-end -> BLADE -> readable
// Controller : connector model dan view




