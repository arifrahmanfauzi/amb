<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KitabahController;
use App\Http\Controllers\MufrodatController;
use App\Http\Controllers\MuhadasaController;
use App\Http\Controllers\QiroahController;
use App\Http\Controllers\TadribController;
use App\Http\Controllers\TamrinController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class,'register']);
Route::post('/bab-{id}/upload-mufrodat', [MufrodatController::class, 'upload']);
Route::post('/bab-{id}/upload-muhadasa', [MuhadasaController::class, 'create']);
Route::post('/bab-{id}/upload-tadrib', [TadribController::class, 'create']);

Route::post('/bab-{id}/upload-istima-tamrin', [MufrodatController::class, 'uploadIstimaTamrin']);
Route::get('/bab-{id}/istima-tamrin', [MufrodatController::class, 'getIstimaTamrin']);

Route::put('/bab-{bab}/update-mufrodat/{id}', [MufrodatController::class, 'update']);
Route::put('/bab-{bab}/update-muhadasa/{id}', [MuhadasaController::class, 'update']);
Route::put('/bab-{bab}/update-tadrib/{id}', [TadribController::class, 'update']);

Route::get('/bab-{id}/mufrodat/{mufrodat}', [MufrodatController::class, 'mufrodat']);
Route::get('/bab-{id}/mufrodat', [MufrodatController::class, 'getAllMufrodat']);
Route::get('/bab-{id}/muhadasa', [MuhadasaController::class, 'muhadasa']);
Route::get('/bab-{id}/tadrib', [TadribController::class, 'tadrib']);

Route::post('/bab-{bab}/istima/qasirah', [MufrodatController::class, 'insertQasirah']);
Route::get('/bab-{id}/istima/qasirah', [MufrodatController::class, 'getAllQasirah']);

Route::post('/bab-{bab}/kalam/khiwar/upload-khiwar', [MuhadasaController::class, 'create']);
Route::get('/bab-{bab}/kalam/khiwar', [MuhadasaController::class, 'muhadasa']);
Route::post('/bab-{bab}/kalam/qisah', [MuhadasaController::class, 'uploadQisah']);
Route::get('/bab-{bab}/kalam/qisah', [MuhadasaController::class, 'viewQisah']);

Route::post('/bab-{bab}/tamrin', [TamrinController::class, 'insertTamrin']);
Route::post('/bab-{bab}/tamrin/muhadasa', [TamrinController::class, 'createMuhadasa']);
Route::get('/bab-{bab}/tamrin', [TamrinController::class, 'viewTamrinApi']);

Route::get('/bab-{bab}/qiroah', [QiroahController::class, 'getAll']);
Route::post('/bab-{bab}/qiroah', [QiroahController::class, 'uploadQiroah']);

Route::post('/bab-{bab}/kitabah/tamrin', [KitabahController::class, 'uploadTamrin']);
Route::post('/bab-{bab}/kitabah', [KitabahController::class, 'uploadKitabah']);
