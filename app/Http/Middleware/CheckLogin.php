<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
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
        if (!session("Submit")) {
            return redirect()->route("login");
        } else if (session("Submit") && session('As') == 'Admin') {
            return redirect()->route("dasbord");
        }
        return $next($request);
    }
}
