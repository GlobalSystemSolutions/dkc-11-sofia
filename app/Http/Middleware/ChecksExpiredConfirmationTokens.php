<?php

namespace App\Http\Middleware;

use Closure;

class ChecksExpiredConfirmationTokens
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $redirect)
    {
        if ($request->confirmation_token->hasExpired()) {

            flash()->error('Невалиден токен', 'Токенът за активация е изтекъл.');

            return redirect($redirect);
        }

        return $next($request);
    }
}
