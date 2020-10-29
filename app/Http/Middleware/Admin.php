<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->aktor == 'Petani') 
        {
            return redirect('/admPetani');
        }
        else if (Auth::check() && Auth::user()->aktor == 'Pabrik') {
            return redirect('/admPabrik');
        }
        else if (Auth::check() && Auth::user()->aktor == 'Admin') {
            return redirect('/homeAdmin');
        }

        return $next($request);
    }
}
