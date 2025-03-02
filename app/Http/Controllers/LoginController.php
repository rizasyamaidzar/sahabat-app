<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            if ($user->status == 1) {
                if ($user->role == "coach") {
                    $request->session()->regenerate();
                    return redirect()->intended('/coach.dashboard');
                } else {
                    $request->session()->regenerate();
                    return redirect()->intended('/dashboard');
                }
            } else {
                Auth::logout();
                return back()->with('loginError', 'Your account is not active.');
            }
        }

        return redirect('/')->with('loginError', 'Username & Password do not match');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
