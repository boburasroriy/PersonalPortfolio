<?php

namespace app\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\RegistrationResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Nette\Schema\ValidationException;

class RegistrationController extends Controller
{
    function register(Request $request)
    {
              $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email|max:255',
                'password' => 'required|min:8|max:20|string',
            ]);

                $user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
                Auth::login($user, true);
                Cookie::queue('remember_token', $user->id, 20160);
                return redirect()->route('home')->with('status', 'Registration is successful!');
    }
}
