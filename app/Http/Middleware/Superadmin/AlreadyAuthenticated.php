<?php

namespace App\Http\Middleware\Superadmin;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlreadyAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if (Auth::guard('admin')->check()) {
        return redirect()->intended(route('superadmin.dashboard', app()->getLocale()));
      }
        return $next($request);
    }
}
