<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckName
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
        // dd('This code from middleware');
        // dd(strtolower($request->route()->parameter('name')));
        if(strtolower($request->route()->parameter('name')) == 'zena') {
            return $next($request);
        }else {
            return redirect('/');
        }

        // dd($request->route()->parameter('name'));


    }
}
