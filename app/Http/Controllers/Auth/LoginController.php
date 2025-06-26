<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');  // Custom login view
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect to the Filament dashboard
            return redirect()->route('filament.admin.pages.dashboard');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
