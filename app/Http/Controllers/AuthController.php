<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('fe.auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string|min:6'
        ]);

        // Coba autentikasi user dengan username & password
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user(); // Ambil data user setelah login

            // Simpan data user ke session
            session([
                'user_id' => $user->id,
                'name' => $user->name,
                'username' => $user->username,
                'role' => $user->role,
                'phone_number' => $user->phone_number
            ]);

            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['username' => 'Username atau password salah']);
    }

    // Logout
    public function logout()
    {
        session()->flush(); // Hapus semua session
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout berhasil!');
    }

    // Menampilkan halaman register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'username' => 'required|string|max:50|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone_number' => 'required|string|max:13|unique:users'
        ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'author', // Default role "author"
            'phone_number' => $request->phone_number,
            'otp' => null // Default tidak ada OTP
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
