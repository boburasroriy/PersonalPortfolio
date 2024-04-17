<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function home()
    {

        return view('home/home');
    }

    function profile($id)
    {
        $user = User::findOrFail($id);
        return view('home/profile', ['user' => $user]);
    }
    function login()
    {
        return view('AuthView/login');
    }
    function registration()
    {
        return view('AuthView/registration');
    }

    function dashboard()
    {
        $dashboardName = 'this is admin panel';
        return dd($dashboardName);
    }
}
