<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;;

class localizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }

        return $next($request);
    }
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if(Session::get("locale") !=null){
    //         App::setLocale(Session::get("Locale"));

    //     }
    //     else{
    //         Session::put("locale","en");
    //         App::setLocale(Session::get("locale"));
    //     }
    //     return $next($request);
    // }
}
