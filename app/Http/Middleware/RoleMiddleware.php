<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null, ...$role)
    {
        if (!$request->user()->hasMiddlewareRole($role)) {
            abort(404);
        }

        // dd($permission);

        // if ($permission !== null && !$request->user()->can($permission)) {
        //     abort(404);
        // }

        return $next($request);
    }
}
