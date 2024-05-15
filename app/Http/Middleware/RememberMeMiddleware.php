<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;

class RememberMeMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() && $request->hasCookie('remember_token')) {
            $userId = $request->cookie('remember_token');
            $user = User::find($userId);

            if ($user) {
                Auth::login($user);
            }
        }

        return $next($request);
    }
}
