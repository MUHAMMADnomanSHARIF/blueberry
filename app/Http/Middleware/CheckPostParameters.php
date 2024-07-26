<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPostParameters
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if it's a POST request and the required parameters are missing
        if ($request->isMethod('post') && (!$request->has('hour') || !$request->has('source'))) {
            return redirect()->route('theme.reservation')->with('error', 'Please provide hour and source parameters.');
        }

        return $next($request); // Continue with the request
    }
}
