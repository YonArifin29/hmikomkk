<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('fe.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        dd($this->only('username', 'password'));

        $request->authenticate();
        $request->session()->regenerate();

        $user = Auth::user();
        
        dd(Auth::check());
        if ($user) { // Ensure user is authenticated before storing session data
            $request->session()->put('user', [
                'user_id' => $user->id,
                'name' => $user->name,
                'username' => $user->username ?? '', // Avoid error if null
                'role' => $user->role ?? 'user', // Provide a default role
                'phone_number' => $user->phone_number ?? 'N/A', // Avoid null values
                
            ]);

            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // If authentication fails, return with an error message
        return back()->withErrors(['error' => 'Username atau password salah']);
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
