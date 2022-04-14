<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MufrodatController;
use App\Http\Controllers\MuhadasaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class,'register']);
Route::post('/upload-mufrodat', [MufrodatController::class, 'upload']);
Route::get('/bab-{id}/mufrodat/{mufrodat}', [MufrodatController::class, 'mufrodat']);
Route::get('/bab-{id}/muhadasa/{muhadasa}', [MuhadasaController::class, 'muhadasa']);
