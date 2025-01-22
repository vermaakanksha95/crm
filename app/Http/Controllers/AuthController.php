<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        if ($req->isMethod("post")) {
            $req->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            $credentials = $req->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('home')->with('success', 'Login Successful'); // Use route name 'home'
            }
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        return view("login");
    }
}
