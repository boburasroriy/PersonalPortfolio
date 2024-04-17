<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function Laravel\Prompts\alert;

class LoginController extends Controller
{
    public function signIn(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('Personal')->accessToken;

            return redirect()->route('home')->with('success', 'Registration successful!');


        }else{
            Session::flash('error', 'The provided credentials do not match our records.');
            return redirect()->back();}

    }

}
