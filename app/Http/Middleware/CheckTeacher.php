<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckTeacher
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
      // if (Auth::check()) {
      //   if (Auth::user()->role == 'Teacher') {
      //     return $next($request);
      //   }else {
      //     return 'this is student';
      //   }
      // }else {
      //   return redirect()->route('welcome', app()->getLocale());
      // }
      if (Auth::user()->role == 'Teacher') {
        return $next($request);
      }elseif (Auth::user()->role == 'Student') {
        return abort(403, 'Access denied');
      }
    }
}
