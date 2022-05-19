<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MufrodatController;
use App\Http\Controllers\MuhadasaController;
use App\Http\Controllers\TadribController;
use App\Http\Controllers\TamrinController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('beranda');
    });
    Route::get('/beranda', function () {
        return view('beranda');
    });
    Route::get('/silabus', function () {
        return view('maharotul-istima');
    });
    Route::get('/bab-{id}', function ($id) {
        return view('bab', ['id' => $id]);
    });
    Route::get('/bab-{id}/istima', function ($id) {
        return view('istima', ['id' => $id]);
    });
    Route::get('/bab-{bab}/kalam', function ($bab) {
        return view('kalam', ['id' => $bab]);
    });

    Route::get('/bab-{id}/istima/mutaradifat', [MufrodatController::class, 'viewMufrodat']);
    Route::get('/bab-{id}/istima/mutaradifat/{mufrodat}', [MufrodatController::class, 'viewMufrodatbyID']);
    Route::get('/bab-{bab}/istima/qasirah', [MufrodatController::class, 'viewQasirah']);
    Route::get('/bab-{bab}/istima/qasirah/{qasirah}', [MufrodatController::class, 'viewQasirahbyID']);

    Route::get('/bab-{id}/kalam/khiwar', [MuhadasaController::class, 'viewMuhadasa']);
    Route::get('/bab-{bab}/kalam/qisah', [MuhadasaController::class, 'viewQisah']);

    Route::get('/bab-{bab}/tamrin', [TamrinController::class, 'viewTamrin']);
});
