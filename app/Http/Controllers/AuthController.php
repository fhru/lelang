<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/lelang');
        }else {
            return redirect('/login')->with('error','Wrong Email/Password');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {

        $user                   = new \App\Models\User;
        $user->name             = $request->name;      
        $user->email            = $request->email;    
        $user->password         = bcrypt($request->password); 
        $user->remember_token   = Str::random(60);       
        $user->save();  

        $pelelang = new \App\Models\Pelelang;
        $pelelang->nama = $request->name;
        $pelelang->email = $request->email;
        $pelelang->save();

        return redirect('/login')->with('sukses', 'Register Berhasil, Silahkan Login');
        // dd($user);
        // return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
