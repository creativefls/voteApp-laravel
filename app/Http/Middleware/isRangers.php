<?php

namespace App\Http\Middleware;

use Closure;

class isRangers
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
      if (Auth::check() && Auth::user()->role == 'rangers') {
        return $next($request);
      }
      flash('Mohon maaf.. Anda tidak diperkanankan masuk')->error();
      return redirect()->back();
    }
}
