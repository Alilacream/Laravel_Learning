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
        $user = $request->user();
        //user is loged out.
        Auth::logout($user);

        return redirect('/register')->with('success', 'User is Logged out!');
    
    }
}
