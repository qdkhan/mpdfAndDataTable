<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role = null): Response
    {

       
        \Log::info($role);

        $response = $next($request);

        \Log::info('Hello User Will be Downloded');
        return $response;
    }

    public function terminate(Request $request, Response $response): void
    {

        \Log::info(round('15.69'));
    }
}
