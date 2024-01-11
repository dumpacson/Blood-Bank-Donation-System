<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (Auth::check()) {
            if (Auth::user()->name == 'admin') {
                return redirect('/admin');
            } else  return redirect('/homepage');
        }

        return $next($request);
    }
}

// public function handle($request, Closure $next)
// {
//     if (Auth::check()) {
//         if (Auth::user()->name == 'admin') {
//             return redirect('/admin');
//         } elseif (Auth::user()->name == 'user') {
//             return redirect('/home');
//         }
//     }

//     return $next($request);
// }
