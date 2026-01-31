<?php

use Database\Seeders\ChirpSeeder;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChirpController;
// posting the index data
Route::get('/', [ChirpController::class, 'index']);
//post the new chirp created
Route::post('/chirps', [ChirpController::class, 'store']);
//for updating the chirp created
Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
// to show the update i think
Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);
// For Deleting ofc
Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);
