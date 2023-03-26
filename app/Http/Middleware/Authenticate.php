<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        /**
         * return route('login'); has been modified
         * to spatie style of route
         * Modified the code to redirect to
         * login page if the session is expired
         */
        if (! $request->expectsJson()) {
            return route('login.perform');
        }
    }
}
