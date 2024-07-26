<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckFormSubmission
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if (!$request->session()->has('example_key')) {
        //     return response()->view('theme.index', [], 500);
        // }

        return $next($request);
    }
}
