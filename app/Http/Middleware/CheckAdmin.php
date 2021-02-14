<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    // {
    //     $isRole = Auth::user()->pluck('role');

    //     dd($isRole);
    //     if(!$isRole->contains('admin')) {

    //     return redirect('report');
    //     }
    //     return $next($request);
    // }
    {
        if(Auth::check() && Auth::user()->isRole()=="admin"){
        return $next($request);
        }
        return redirect('report');
    }
}
