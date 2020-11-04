<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CekAktor{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $aktor){
        if (Auth::check() && Auth::user()->aktor == 'Petani'){
            return redirect('/homePetani');
        }else if (Auth::check() && Auth::user()->aktor == 'Pabrik') {
            return redirect('/homePabrik');
        }else if (Auth::check() && Auth::user()->aktor == 'Admin') {
            return redirect('/homeAdmin');
        }
        return redirect('/');
    }
}
