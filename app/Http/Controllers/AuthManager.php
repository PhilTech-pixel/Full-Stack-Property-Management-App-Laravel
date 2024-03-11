<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthManager extends Controller
{
    function login()
    {
        if (Auth::check()) {
            return redirect(route('dash'));
        }
        return view('login2');
    }
    function register()
    {
        if (Auth::check()) {
            return redirect(route('dash'));
        }
        return view('register');
    }
    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('dash'));
        }
        return redirect(route('login'))->with("error", "Login Details not Valid");
    }
    function registerPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|',
            'name' => 'required',
            'password' => 'required'
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if (!$user) {
            return redirect(route('register'))->with("error", "Registration Failed");
        }
        return redirect(route('login'))->with("Karibu", "Registration Successful. Login");
    }
    function logout()
    {
        FacadesSession::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
