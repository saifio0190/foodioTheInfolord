<?php

namespace App\Http\Middleware;

use Closure;
use Session;


class AdminLoginCheck
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

        if (Session::has('adminusers')) {
                    $email=Session::get('adminusers');
                    $name=Session::get('adminname');
                }else{
                    \Redirect::to('adminlogin')->send();
                }
        return $next($request);
    }
}
