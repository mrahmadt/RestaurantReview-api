<?php

namespace App\Http\Middleware;

use Closure;

class CacheControl{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

       $response->headers->set('Cache-Control', 'no-cache, private');
        // Or whatever you want it to be:
        // $response->header('Cache-Control', 'max-age=100');
        //https://support.cloudflare.com/hc/en-us/articles/115003206852-Origin-Cache-Control
        return $response;
    }
}