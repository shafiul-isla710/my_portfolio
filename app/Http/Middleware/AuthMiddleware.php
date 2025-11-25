<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_id = session('user_id');

        $opt = Otp::where('user_id', $user_id)->exists();

        if (!$opt) {
            return redirect()->route('login-page')->with('error', 'Unauthorized, Please Login.');
        }
        return $next($request);
    }
}
