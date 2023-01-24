<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ServiceProviderMiddleware
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
      if(Auth::check()){
        // role=0 :User
        // role=1 :Service Provider
        // role=2 :Admin
            if(Auth::user()->role=='1'){
                return $next($request);
            }
            else if(Auth::user()->role=='2') {
                return redirect('/admin')->with('message','Access Denied as you are not Service Provider!');
            }
            else {
                return redirect('/home')->with('message','Access Denied as you are not Admin!');
            }
        } 
        else{
            return redirect('/login')->with('message','Login to access the website info!');
        }
        return $next($request);
      }  
    }

