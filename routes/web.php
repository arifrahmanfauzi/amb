<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MufrodatController;
use App\Http\Controllers\MuhadasaController;
use App\Http\Controllers\TadribController;
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
    Route::get('/maharotul-istima', function () {
        return view('maharotul-istima');
    });
    Route::get('/bab-{id}', function ($id) {
        return view('bab', ['id' => $id]);
    });
    Route::get('/bab-{id}/mufrodat', [MufrodatController::class, 'viewMufrodat']);
    Route::get('/bab-{id}/mufrodat/{mufrodat}', [MufrodatController::class, 'viewMufrodatbyID']);
    Route::get('/bab-{id}/muhadasa', [MuhadasaController::class, 'viewMuhadasa']);
    Route::get('/bab-{id}/tadrib', [TadribController::class, 'viewTadrib']);
});
