<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, String $role)
    {
        //This is useful so it authenticates the user will being more efficient in terms of not having to code in every index function  

        if(!$request->user() || !$request->user()->hasRole($role)) {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
