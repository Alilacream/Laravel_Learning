<?php

use Database\Seeders\ChirpSeeder;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChirpController;
// posting the index data
Route::get('/', [ChirpController::class, 'index']);
//post the new chirp created
Route::post('/chirps', [ChirpController::class, 'store']);