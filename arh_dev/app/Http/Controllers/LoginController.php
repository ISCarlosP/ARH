<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Http\Controllers\DashboardController;
use Illuminate\Testing\Fluent\Concerns\Has;


class LoginController extends Controller{

    public function authenticate (Request $request): RedirectResponse
    {
        $credentials = $request->only('username', 'password');

        $loginCredentials = [
            'user_screen_name' => $credentials['username'],
            'user_password' => $credentials['password']
        ];

        if (Auth::attempt($loginCredentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }

        return redirect('/')->with('error', 'Credenciales incorrectas');

    }

}
