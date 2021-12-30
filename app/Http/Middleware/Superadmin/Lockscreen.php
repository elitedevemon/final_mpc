<?php

namespace App\Http\Middleware\Superadmin;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Lockscreen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      if (Auth::guard('admin')->check()) {
        if (Auth::guard('admin')->user()->active_status == false) {
          return redirect()->intended(route('show.superadmin.lock-screen.page', app()->getLocale()));
        }
      }
      return $next($request);
    }
}
