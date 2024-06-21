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
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if(isset(auth()->user()->role) && auth()->user()->role == 1){
    //         if(isset(auth()->user()->status) && auth()->user()->status == 1){
    //             return $next($request);
    //         }
    //         return redirect()->route('onlineInquiry')->with('userId', auth()->user()->id);
    //     }
    //     return redirect()->route('/');
    // }
    public function handle(Request $request, Closure $next): Response
    {
        if(isset(auth()->user()->role) && auth()->user()->role == 1){
            if(isset(auth()->user()->status) && auth()->user()->status == 0){
                return redirect()->route('onlineInquiry')->with('userId', auth()->user()->id);
            }
            elseif(isset(auth()->user()->status) && auth()->user()->status == 1){
                return redirect('/')->with('error','You are not approved yet');
            }
            elseif(isset(auth()->user()->status) && auth()->user()->status == 2){
                return $next($request);
            }
            elseif(isset(auth()->user()->status) && auth()->user()->status == 3){
                return redirect('/')->with('error','You are not allowed to signin');
            }
            return redirect()->route('/')->with('userId', auth()->user()->id);
        }
        return redirect()->route('/');
    }
}
