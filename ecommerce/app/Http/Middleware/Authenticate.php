<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (!$this->auth->guard()->check()) {
            if (! $request->expectsJson()) {
                $notification = array(
                    'message' => 'You Need to Login First',
                    'alert-type' => 'error',
                );
                return redirect('login')->with($notification);
            }
        }

        return $next($request);
    }
}
