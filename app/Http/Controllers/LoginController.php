<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function indexLogin()
    {
        return view('login.index');
    }
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'invalid credentials']);
    }

    public function index()
    {
        return view('layout');
    }



    // public function logout(){
    //         Auth::logout();
    //         return redirect()->route('login');
    //     }
}
