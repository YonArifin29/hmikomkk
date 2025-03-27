<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateUser
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user sudah login (session memiliki is_login)
        if (!$request->session()->has('user')) {
            return redirect('/login')->withErrors(['error' => 'Silakan login terlebih dahulu.']);
        }

        return $next($request);
    }
}