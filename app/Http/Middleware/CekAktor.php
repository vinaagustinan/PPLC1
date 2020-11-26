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
    public function handle($request, Closure $next, ...$aktor){

        if(in_array($request->user()->aktor, $aktor)){
            return $next($request);
        }

        return redirect('/');
    }
}
