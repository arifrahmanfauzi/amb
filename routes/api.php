<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MufrodatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class,'register']);
Route::post('/upload-mufrodat', [MufrodatController::class, 'upload']);
