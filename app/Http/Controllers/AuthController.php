<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show the registration form
    public function showRegister()
    {
        return view('authentication.register');
    }

    // Show the login form
    public function showLogin()
    {
        return view('authentication.login');
    }

    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password) // hash password
        ]);

        return redirect()->route('login.form')->with('success', 'Registration Successful');
    }

    // Handle login
    public function performlogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Regenerate session to prevent session fixation
            $request->session()->regenerate();

            // Redirect to homepage after login
            return redirect('/')->with('success', 'Login successful!');
        }

        // Login failed, redirect back with error
        return back()->withErrors([
            'email' => 'Invalid Credentials'
        ])->withInput();
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have logged out successfully.');
    }
}
