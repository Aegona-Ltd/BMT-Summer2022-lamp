<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$name)
    {
        // echo $request->name;
        // dd($request->name);
        if($request->name!="quynh"|| $request->name==null){
            return response()->view('hello-word',["hellostr"=>$name]);
        }
        return $next($request); // cái này là return về được đi tiếp tới controller 
    }
}
