<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class Logout extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Logs out the user.
        Auth::logout();

        // Invalidate session && and regenerate it the token for another session.
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/register')->with('success', 'User is Logged out!');    
    }
}
