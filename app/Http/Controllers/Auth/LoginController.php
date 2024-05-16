<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function signIn(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = true; 

        if (Auth::attempt($credentials, $remember)) { // Pass $remember to attempt method
            return redirect()->route('home')->with('success', 'You are logged in!');
        } else {
            Session::flash('error', 'The provided credentials do not match our records.');
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Cookie::queue(Cookie::forget('remember_token'));
        return redirect()->route('home')->with('status', 'You have been logged out.');
    }
}
