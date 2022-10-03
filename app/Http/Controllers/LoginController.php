<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view(
            '/login',
            ["title" => "Login"]
        );
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->User()->status == 'user') {
                return redirect()->intended('/');
            }
            if (auth()->User()->status == 'admin') {
                return redirect()->intended('/admin-web');
            }
        }

        return back()->with([
            'eror' => 'Login gagal! Masukan Email dan Password yang benar',
        ]);
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}