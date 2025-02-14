<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(): View
    {
        return view('user-list', [
            'users' => User::all()
        ]);
    }

    public function add_user(): RedirectResponse
    {
        
        return redirect('/user');
    }
}
