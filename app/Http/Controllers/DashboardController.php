<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.user'); // Wajib login untuk akses
    }

    // Menampilkan halaman dashboard
    public function index()
    {
        if (session()->has('user')) {
            $sessionUser = session('user');
        }
       
        return view('dashboard', ['sessionUser' => $sessionUser, 'active' => true]);
    }
}