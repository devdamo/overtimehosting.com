<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = Auth::user();

        if ($user->role == 'admin' || $user->role == $role) {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');
    }
}
