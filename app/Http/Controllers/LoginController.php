<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create() {
        return view('auth/login');
    }

    public function authenticate(LoginRequest $request) {
        $credentials = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'password' => ['required']
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
