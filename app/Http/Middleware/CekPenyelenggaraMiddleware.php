<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekPenyelenggaraMiddleware
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
        if (!Auth::guard('penyelenggara')->check()) {
            return redirect()->route('penyelenggara.login');
        }
        
        return $next($request);
    }
}
