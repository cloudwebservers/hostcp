<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateCustomer
{
    public function handle(Request $request, Closure $next)
    {
        // Add your authentication logic for customers here
        if (!auth()->guard('customer')->check()) {
            return redirect()->route('login'); 
        }

        return $next($request);
    }
}
