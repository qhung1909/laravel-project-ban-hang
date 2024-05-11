<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{   

    function login(){
        return view('account.login');
    }
    function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required', 
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended();
        }
        return redirect('/login')->with("error", "Thông tin đăng nhập không hợp lệ");
    }

    function register(){
        return view('account.register');
    }
    
    function registerPost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required', 
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect('/register')>with("error", "Đăng kí thất bại");
        }
        return redirect('/login')->with("success", "Đăng kí thành công");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
