<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('frontend.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'birthYear' => 'required|integer|min:1900|max:' . date('Y'),
            'country' => 'required',
            'city' => 'required',
            'alertType' => 'required',
        ]);

        $user = User::create([
            'fullName' => $validated['fullName'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'birthYear' => $validated['birthYear'],
            'country' => $validated['country'],
            'city' => $validated['city'],
            'alertType' => $validated['alertType'],
        ]);

        // Send welcome email
        Mail::to($user->email)->send(new WelcomeMail($user));

        return redirect()->route('login.show')->with('success', 'Registration successful! Please check your email for a welcome message.');
    }

    public function showLoginForm()
    {
        return view('frontend.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('backend.user-information'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showUserList()
    {
        $users = User::all();
        // dd($users); // Check if users are fetched correctly
        return view('backend.user_information1', compact('users'));
    }


    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('backend.edit_user_form', compact('user'));
    }


    public function deactivateUser($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => false]); // Assuming 'status' is a field in your users table
        return redirect()->back()->with('success', 'User deactivated successfully.');
    }
}
