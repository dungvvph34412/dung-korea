<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    public function login(){
        return view('login');
    }
    public function postLogin(Request $req){
       $req->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
       ], [
        'email.required' => 'Email không được để trống',
        'email.email' => 'Email không đúng định dạng',
        'password.required' => 'Password không được để trống',
        
       ]);

        if(Auth::attempt([
            'email' => $req->email,
            'password' => $req->password,
        ])){
            return redirect()->route('admin.users.listUsers');
        }else{
            return redirect()->back()->with([
                'messageError' => 'Email hoặc mật khẩu không đúng'
            ]);
        }

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with([
            'messageError' => 'Đăng xuất thành công'
        ]);
    }
}
