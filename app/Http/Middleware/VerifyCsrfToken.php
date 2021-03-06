<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Illuminate\Support\Facades\Auth;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    /**
     * Logout will be redirected to home if the use is not logged in.
     *
     * @param $request $request
     * @param Closure $next
     * @return void
     */

    public function handle($request, Closure $next)
    {
      if (!Auth::check() && $request->route()->named('logout')) {
        $this->except[] = route('logout', app()->getLocale());
      }
      return parent::handle($request, $next);
    }
}
