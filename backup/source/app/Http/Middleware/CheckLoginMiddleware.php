<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckLoginMiddleware
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
        // if(Auth::check()&&Auth::user()->level==1)
        if(Auth::check()){
            return $next($request);
        }else{
            return redirect()->route('getLogin');
        }
        return $next($request);
    }
}
