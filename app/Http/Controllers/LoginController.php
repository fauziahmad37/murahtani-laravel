<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'login'
        ]);
    }

    // web
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]); // throw exception if not valid

        $credentials = $request->only('email', 'password'); // ['email' => 'fauzi', 'password' => 'password']

        $authenticationResult = auth()->attempt($credentials); // boolean true or false
        if ($authenticationResult) {
            return redirect()->route('home');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'Email atau password salah'
        ]);
    }
}
