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
            'username' => 'required',
            'password' => 'required'
        ]);
        $username = $request->input('username');
        $password = $request->input('password');

        // Find user by username
        $user = User::where('username', $username)->first();
       
        // Attempt to authenticate the user
        if ($user && Hash::check($password, $user->password)) {
            
            $request->session()->put('user', [
                'user_id' => $user->id,
                'name' => $user->name,
                'username' => $user->username,
                'role' => $user->role,
                'phone_number' => $user->phone_number,
                'is_login' => true
            ]);
    
            return redirect('/dashboard'); // Redirect after login success
        }
    
        return back()->withErrors(['error' => 'Username atau password salah']);
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

   
}
