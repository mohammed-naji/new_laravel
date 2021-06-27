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
        // dd($request->route()->parameter('name'));
        // if($request->route()->parameter('name') == 'Feras') {
        //     return $next($request);
        // }else {
        //     dd('You are not allowed to visit this page');
        // }

        return redirect()->route('home');

        return $next($request);
    }
}
