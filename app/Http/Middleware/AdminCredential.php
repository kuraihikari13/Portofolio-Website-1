<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class AdminCredential
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
        if(auth()->user()->cred == 1){
            return $next($request);
        } else {
            Session::flash('error', 'Anda tidak memiliki hak Admin');
            return redirect('login');
        }

        Session::flash('error', 'Anda tidak memiliki hak Admin');
            return redirect('login');
    }
}
