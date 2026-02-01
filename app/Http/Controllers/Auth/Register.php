<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Register extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validation method
        $validated = $request->validate([
            "name" => "required|string|max:100", 
            "email" => "required|string|max:100|unique:users",// unique users meaning that there is only one gmail per user
            "password"=> "required|string|min:8|confirmed", // confirmed means, the password needs to be exact.
        ]);
        // we create the user
        $user = User::create([
            'name' => $validated['name'],
            'email'=> $validated['email'],
            'password'=> Hash::make($validated['password']),
        ]);
        //Log them
        Auth::login($user);
        // redirecting the user into the home
        return redirect('/')->with('success','User succesfully created!');
    }
}
