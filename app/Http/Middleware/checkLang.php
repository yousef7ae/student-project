<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkLang
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
        if ($request->query->has('lang')) {
            $request->attributes->add(['currentTime'=> Date('Y-m-d H:i:s')]);
            return $next($request);
        }else{

            return response()->view('errors.missing');
        }
        
    }
}
