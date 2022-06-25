<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class check_off_login
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
        if (!session('Login Succeed')) {
            return $next($request);
        } else {
            return redirect('/admin');
        }
    }
}
