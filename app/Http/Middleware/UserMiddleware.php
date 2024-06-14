<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(isset(auth()->user()->role) && auth()->user()->role == 1){
            if(isset(auth()->user()->status) && auth()->user()->status == 1){
                return $next($request);
            }
            return redirect()->route('onlineInquiry')->with('userId', auth()->user()->id);
        }
        return redirect()->route('/');
    }
}
