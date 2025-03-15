<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->role_id == '1' || Auth::user()->role_id == '2') ) {
            return $next($request);
        }

        return redirect()->route('admin.login')->with('error', 'Bạn không có quyền truy cập.');
    }
}
