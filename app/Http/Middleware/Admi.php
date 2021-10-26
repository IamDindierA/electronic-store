<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Admi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        

            if(Auth::check()&& Auth::user()->role_id =="2"){
               
                //que siga la siguiente peticion, "continua tu camino"
                return $next($request);
            }
        
            return redirect("/");
    }
}
