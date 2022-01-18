<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
        public function index()
        {
            return view('login.index');
        }

        // public function postlogin(Request $request){
        //     if(Auth::attempt($request->only('email,'password))){
        //         return redirect('/home');
        //     }
        //     return redirect('/');
        // }

        public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
