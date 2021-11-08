<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class AlreadyLoggedIn
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
        if(Session()->has('loginId') && (url('login1')==$request->url() || url('registration')==$request->url())) {
            return back();
        }
        return $next($request);
    }
}
