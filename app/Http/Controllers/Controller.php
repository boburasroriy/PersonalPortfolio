<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function home()
    {
        return view('welcome');
    }

    function login()
    {
        return view('');
    }
    function registration()
    {
        return view('');
    }

    function dashboard()
    {
        $dashboardName = 'this is admin panel';
        return dd($dashboardName);
    }
}
