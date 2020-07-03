<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Image;
use App\Users;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // return $next($request);
        // return $next($request);

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('admin');
        }

        if (Auth::user()->role == 0) {
            return redirect()->route('user');
        }

    }
}
