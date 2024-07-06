<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class UserRegistrationController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
            'account_type' => 'required|in:individual,company',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Determine the default role based on account type
        $defaultRole = $request->account_type == 'company' ? 'tenant_admin' : 'guest';

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $defaultRole, // Set the default role here
        ]);

        // Authenticate the user
        Auth::login($user);

        if ($user) {
            // If user creation is successful, redirect to home with a success message
            return redirect()->route('Company-user.dashboard')->with('success', 'User registered successfully');
        } else {
            // If user creation fails, redirect back to the registration page with an error message
            return redirect()->back()->with('error', 'Failed to register user')->withInput();
        }
    }
}
