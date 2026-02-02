<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChirpController;
// Creating a reference function that has all the routes
function Routes() {

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
}

//callings the routes
Route::middleware('auth')->group(Routes());

// Register Routes
Route::view('/register', 'auth.registre')
    // i don't quite understand the use of middleware, but it safe to assume.
    //it's for safety.
    ->middleware('guest')
    ->name('register');
Route::post('/register', Register::class)
    ->middleware('guest');
//Logout
Route::post('/logout', Logout::class);


// Login Routes
Route::view('/login', 'auth.login')
    ->middleware('guest')
    ->name('login');
Route::post('/login', Login::class);