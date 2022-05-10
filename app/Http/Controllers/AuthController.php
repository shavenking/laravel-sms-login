<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login()
    {
        // todo login

        return redirect()->route('dashboard.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('auth.show-login');
    }
}
