<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Login View
     */
    public function login_view(): View
    {
        return view('auth.login');
    }

    /**
     * Login Action
     */
    public function login_action(Request $req)
    {
        /**
         * Validation
         */
        $validated  = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:64',
        ]);
        /**
         * Attempt password decryption
         */
        if (Auth::attempt($validated)) {
            $req->session()->regenerate();
            return redirect()->route('home.view');
        }
        throw ValidationException::withMessages(['credentials' => 'Wrong Credentials']);
    }

    /**
     * Register View
     */
    public function register_view(): View
    {
        return view('auth.register');
    }

    /**
     * Register Action
     */
    public function register_action(Request $req)
    {
        /**
         * Validation
         */
        $validated = $req->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required|min:8|max:20'
        ]);
        /**
         * New user insertion 
         */
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);
        return redirect()->route('login.view');
    }

    /**
     * Logout Action
     */
    public function logout_action(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('login.view');
    }
}
