<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function listUsers(){
       $listUser =  User::select('id', 'name', 'email', 'role')->get();
        return view('admin.users.list-user')->with([
            'listUser' => $listUser
        ]);
    }
    
    public function addUsers(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ],[
            'name.required' => 'Name không được để trống',
            'email.required' => 'Email không được để trống',
            'password.required' => 'Password không được để trống', 
            'role.required' => 'Chưa chọn role',
           ]
     );

     $newUser = new User();
     $newUser->name = $req->name;
     $newUser->email = $req->email;
     $newUser->password = Hash::make($req->password);
     $newUser->role = $req->role;
     $newUser->save();
     return redirect()->back()->with([
        'message' => 'thêm mới thành công'
     ]);

    }
}
