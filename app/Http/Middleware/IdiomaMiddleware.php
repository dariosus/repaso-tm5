<?php

namespace App\Http\Middleware;

use Closure;
use App;

class IdiomaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $idioma = session("idioma");

        if (!$idioma) {
            $idioma = "es";
        }

        App::setLocale($idioma);

        return $next($request);
    }
}
