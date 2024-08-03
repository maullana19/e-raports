<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roles;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('admins/dashboard_admin');
            } else {
                return redirect()->intended('dashboard');
            }
        }

        return redirect()->back()->with('loginError', 'username atau password yang anda masukan salah.');
    }

    public function processLogout()
    {
        Auth::logout();
        return redirect()->route('login-form')->with('success', 'Logout berhasil.');
    }
}
