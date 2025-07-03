<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            if (Auth::user()->role == 'user') return redirect('/user');
            return redirect()->intended('dashboard');
        }
        return back()->with('Failed', 'Login failed, please try again.');
    }

    public function logout()
    {
        Auth::logout(Auth::user());
        return redirect('/');
    }
}
