<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class UserMiddleware
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
        if(auth()->user()->type == "admin")
        {
            return redirect('/admin/create');
        }
        return $next($request);
    }
}