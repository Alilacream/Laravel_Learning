<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

     $credentials = $request->only("email","password");
     // Generate session for security
     $request->session()->regenerate(); 
     //Attempt Login.
     $check = Auth::attempt($credentials, $request->boolean('remember'));
     if ($check) {
        return redirect('/')->with('success', 'Welcome Back!');
     }
     // back function is a redirect function that gets you back to the last Route you were on.
     return back()->withErrors('The provided credentials does not match our records.')
     ->onlyInput('email');

    }
}
