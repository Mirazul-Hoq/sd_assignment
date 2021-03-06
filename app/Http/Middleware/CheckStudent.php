<?php

namespace App\Http\Middleware;

use Closure;

class CheckStudent
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
        if ($request->session()->has('userid') && $request->session()->has('userrole') && $request->session()->get('userrole')=='student') {
            return $next($request);
        }
            return redirect()->to('/');
    }
}
