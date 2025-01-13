<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function profile() {
        return view('users.profile');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:15',
            'confirm_password' => 'required|same:password'
        ]);


        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);

        return view('auth.login');
    }

    public function loginUser(Request $request)
    {
        // Validate the login form input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:15',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed
            return redirect()->route('dashboard')->with('success', 'Logged in successfully!');
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
        }
    }

    public function update(Request $request)
    {
        // Validate the data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(), // Ensures the email is unique except the logged-in user
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Update the user's details
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save(); // Save changes to the database

        // Redirect back with success message
        return redirect()->route('users.profile')->with('success', 'Profile updated successfully!');
    }

}
