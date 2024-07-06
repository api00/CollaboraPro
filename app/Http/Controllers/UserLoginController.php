<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Example: 'auth.login' is your login form view
    }

    public function login(Request $request)
    {
        // Retrieve only the 'email' and 'password' from the request
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user with the provided credentials
        if (Auth::attempt($credentials)) {
            // If authentication passes, redirect the user to the intended route (usually the dashboard)
            return redirect()->intended('/dashboard');
        }

        // If authentication fails, redirect back to the login form with an error message
        return redirect()->route('login.form')->with('error', 'Invalid credentials');
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/'); // Redirect to homepage after logout
    }
}
