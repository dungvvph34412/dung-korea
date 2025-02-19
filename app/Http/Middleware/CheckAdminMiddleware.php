<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if(Auth::check()){ // phai dang nhap
        if(Auth::user()->role == '1'){
        return $next($request);
        }else{
            return redirect()->route('login')->with([ //dang nhap that phai => return: login
                'messageError' => 'chỉ Admin mới có thể đăng nhập'
            ]);
        }
       }
       return redirect()->route('login')->with([ //dang nhap that phai => return: login
        'messageError' => 'Bạn chưa đăng nhập'
    ]);
    }
}
