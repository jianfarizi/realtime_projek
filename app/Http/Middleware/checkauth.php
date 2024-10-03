<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class checkauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $type)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        if ($type && Auth::user()->type != ($type == 'admin' ? 2 : 1)) {
           return redirect('login');
        }
        if ($type && Auth::user()->type != ($type == 'user' ? 1 : 2)) {
            return redirect('login');
        }
        return $next($request);
    }
}
