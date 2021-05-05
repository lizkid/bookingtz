<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class API_AUTH
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

        $token = \Illuminate\Support\Facades\Request::cookie('token');

        if (empty($token))
        {
            return redirect('/list-your-property/login-form');
        }
        return $next($request);

    }
}
