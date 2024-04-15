<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->role_id == 2 || $request->user() && $request->user()->role_id == 3 ) {
            return $next($request);
        }
        if ($request->user()) {
            return redirect()->back();
        }
        return $next($request);
    }
}
