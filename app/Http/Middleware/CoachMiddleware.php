<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CoachMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     // Check if the user is authenticated and has the 'coach' role
    //     if (Auth::check() && Auth::user()->hasRole('coach')) {
    //         return $next($request);
    //     }

    //     // If the user is not authorized, deny access
    //     abort(403, 'Unauthorized action.');
    // }
}

