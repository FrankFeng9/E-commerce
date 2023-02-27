<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AdminAuthenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (!$this->auth->guard('admin')->check()) {
            if (! $request->expectsJson()) {
                $notification = array(
                    'message' => 'Please login first',
                    'alert-type' => 'warning',
                );
                return redirect('admin/login')->with($notification);
            }
        }

        return $next($request);
    }
}
