<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class EnsureUserRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();
        // jika yang ingin diakses adalah laman khusus admin, tapi user bukan admin
        // atau jika yang ingin diakses adalah laman khusus user, tapi user adalah admin (bukan user biasa)
        if(($role == 'admin' && !$user->is_admin)||($role == 'user' && $user->is_admin)){
            abort(403);
        }
        return $next($request); // ini untuk melanjutkan kembali ke controller
    }
}
