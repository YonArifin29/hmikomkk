<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Pastikan hanya user yang sudah login bisa mengakses dashboard
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Menampilkan halaman dashboard
    public function index()
    {
        return view('dashboard', ['user' => Auth::user()]);
    }
}