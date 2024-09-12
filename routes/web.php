<?php

use App\Http\Controllers\GelombangController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PesertaPelatihanController;
use App\Http\Controllers\UserController;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Route;





// Route::get('/', function () {
//     return view('login.index');
// });
Route::get('login', [LoginController::class, 'indexLogin']);
Route::get('layout', [LoginController::class, 'index'])->name('dashboard');
Route::post('action-login', [LoginController::class, 'login'])->name('action-login');


Route::resource('user', UserController::class);
Route::resource('peserta', PesertaPelatihanController::class);
Route::resource('gelombang', GelombangController::class);
Route::resource('pendaftaran', PendaftaranController::class);
Route::resource('level', LevelController::class);
Route::resource('jurusan', JurusanController::class);