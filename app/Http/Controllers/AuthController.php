<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //// Show the login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle the login request
    public function authenticate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication successful, redirect to dashboard
            return redirect()->route('dashboard');
        }

        // Authentication failed, redirect back with an error message
        return back()->with('error', 'Invalid credentials. Please try again.');
    }

    // Show the dashboard page (protected route)
    public function dashboard()
    {
        return view('dashboard');  // Create a dashboard view if needed
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }
}
