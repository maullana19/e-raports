<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function processRegister(Request $request)
    {
        // Validasi data pendaftaran
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'nip' => 'required|string|max:20|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'no_hp' => 'required|string|max:15',
            'password' => 'required|string|min:8',
            'role_id' => 'required|integer',
        ]);

        // Membuat user baru
        $user = User::create($validatedData);

        // Redirect ke halaman login setelah pendaftaran berhasil
        return redirect()->route('login-form')->with('successRegister', 'Pendaftaran berhasil. Silakan login.');
    }
}
