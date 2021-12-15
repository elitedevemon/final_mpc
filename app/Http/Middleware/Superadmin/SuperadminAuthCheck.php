<?php

namespace App\Http\Middleware\Superadmin;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperadminAuthCheck
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
      if (!Auth::guard('admin')->check()) {
        return redirect()->intended(route('superadmin.login', app()->getLocale()));
      }
      return $next($request);
    }
}
