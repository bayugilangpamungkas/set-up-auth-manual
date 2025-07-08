<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginAuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            if (Auth::user()->role == 'user') return redirect('dashboard_user');
            return redirect()->intended('dashboard');
        }
        return back()->with('Failed', 'Login failed, please try again.');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|max:255',
            'password' => 'required|max:50|min:8',
            'confirm-password' => 'required|min:8|same:password',
        ]);

        $request['status'] = 'verify';
        $user = User::create($request->all());
        Auth::login($user);
        return redirect('dashboard_user');
    }

    public function google_redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function google_callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name'     => $googleUser->getName(),
                    'email'    => $googleUser->getEmail(),
                    'password' => Hash::make(Str::random(16)),
                    'status'   => 'active',
                    'role'     => 'user',
                ]);
            }

            if ($user->status === 'banned') {
                return redirect('/login')->with('Failed', 'Your account is banned.');
            }

            if ($user->status === 'verify') {
                $user->update(['status' => 'active']);
            }

            Auth::login($user);

            return $user->role === 'user'
                ? redirect('dashboard_user')
                : redirect('dashboard');
        } catch (\Exception $e) {
            return redirect('/login')->with('Failed', 'Google login failed. Please try again.');
        }
    }

    public function logout()
    {
        Auth::logout(Auth::user());
        return redirect('/');
    }
}
