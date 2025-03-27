<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticatedUser
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah sesi user sudah ada
        if ($request->session()->has('user')) {
            return redirect('/dashboard'); // Redirect ke dashboard jika sudah login
        }

        return $next($request); // Lanjutkan request jika belum login
    }
}
