<?php

namespace App\Http\Middleware;

use App\Http\Controllers\admin\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // check user is admin //
        $user = new User();
        if(!$user->getUser() || $user->isAdmin() === false) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
