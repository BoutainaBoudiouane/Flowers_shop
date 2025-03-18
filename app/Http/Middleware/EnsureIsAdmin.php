<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // Check if the authenticated user is the admin
       if (auth()->check() && auth()->user()->email === 'admin@gmail.com') {
        return $next($request);
    }

    // Redirect non-admin users to a different page or show an error
    return redirect('/')->with('error', 'You do not have access to this page.');
    }
}
