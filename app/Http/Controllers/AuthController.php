<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{   
    function __construct()
    {
        $categories = DB::table('categories')->where('an_hien', 1)->orderBy('thu_tu', 'asc')->get();
        View::share('categories', $categories);

        
    }
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
    
    public function registerPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        
        $user = User::create($data);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Registration failed',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Registration successful',
        ], 201);
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
