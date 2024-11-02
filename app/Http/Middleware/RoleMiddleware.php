<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Memastikan user sudah login dan role user sesuai
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request); // Akses diperbolehkan
        }

        // Akses ditolak, arahkan kembali ke halaman login dengan pesan error
        return redirect('/login')->withErrors(['login' => 'Anda tidak memiliki akses ke halaman ini']);
    }
}
