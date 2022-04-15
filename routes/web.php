<?php

use App\Http\Controllers\MufrodatController;
use App\Http\Controllers\MuhadasaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
