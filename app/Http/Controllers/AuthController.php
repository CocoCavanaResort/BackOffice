<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate( ['email'=> 'required', 'password'=> 'required']);
        $user = User::where('email', $credentials['email'])->first();
        if(auth()->attempt($credentials) ) {
            return redirect()->intended('/dashboard')->with('success','');
        } else {
            return redirect()->back()->with('error','');
        }
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
