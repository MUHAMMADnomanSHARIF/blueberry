<?php

namespace App\Http\Middleware;

use Closure;

class ForceRedirectnonwwwMidleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
public function handle($request, Closure $next)
{
    $host = $request->header('host');

    if (strpos($host, 'www.') === 0) {
        $url = 'https://' . substr($host, 4) . $request->getRequestUri();

        return redirect()->to($url, 301);
    }

    return $next($request);
}




}
