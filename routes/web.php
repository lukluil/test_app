<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Auth;
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

Route::get('/angka/{angka}', function ($angka) {
    return ('Nilai = '.$angka);
});

Route::get('/penjumlahan/{angka}/{angka2}', function ($angka, $angka2) {
    return ('hasil penjumlahan = '.$angka + $angka2);
});

Route::get('/pengurangan/{angka}/{angka2}', function ($angka, $angka2) {
    return ('hasil pengurangan = '.$angka - $angka2);
});

Route::get('/coba', function () {
    return view('coba');
});
 Route::get('/coba2', function () {
    return view('coba2');
 });

 Route::get('/template', function () {
    return view('template');
 });

 Route::get('/tabel', function () {
    $data =['meja', 'kursi','lampu'];
    return view('table', compact('data'));
 });

Route::get('/button', function () {
    return view('button');
});

Route::get('/cards', function () {
    return view('cards');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/tables', function () {
    return view('tables');
});

//pemanggilan manual
//Route::get('siswa', [SiswaController::class, 'index']);
//Route::get('siswa', [SiswaController::class, 'create']);

//memangil semua class yg ada dalam SiswaController
Route::resource('siswa', SiswaController::class)->middleware(['auth','admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
