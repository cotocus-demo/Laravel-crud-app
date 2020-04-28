<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Log;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        Log::info("Inside handle function of RedirectIfAuthenticated class");
        Log::info($request);

        if (Auth::guard($guard)->check()) {

            Log::info("Inside if condition");
            return redirect('/home');
        }

        return $next($request);
    }
}
