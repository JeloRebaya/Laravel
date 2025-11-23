<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showRegister(){
        return view('authentication.register');
    }

    function showLogin(){
        return view('authentication.login');
    }

    function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login.form')->with('success','Registration Successful');
    }

    function performlogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only(
            'email',
            'password'))){
                return redirect('/');
            }

        return back()->withErrors([
            'email'=> 'Invalid Credentials'
        ]);
    }
}
