<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function home()
    {

        return view('home/home');
    }
    function profile()
    {
        $user = Auth::user();
        return view('home/profile', ['user' => $user]);
    }

    function authorPage()
    {
        return view('home/authorPage');
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
