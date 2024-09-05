<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Mengecek apakah pengguna sudah terautentikasi
        if (!Auth::check()) {
            // Mengarahkan pengguna yang tidak terautentikasi ke halaman login
            return redirect()->route('login');
        }

        return $next($request);
    }
}
    

