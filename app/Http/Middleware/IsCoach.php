<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsCoach
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Memastikan pengguna adalah coach dan statusnya tidak 0
        if (!Auth::check() || (Auth::user()->role != 'coach' && Auth::user()->status != 0)) {
            abort(403);
        }

        return $next($request);
    }
}
