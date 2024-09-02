<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register');
    }

    public function storeRegister(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email:dns|max:255|unique:users',
            'name' => 'required|min:3|max:255',
            'password' => 'required|min:6|max:255|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::created($validated);

        return redirect(route('login'));
    }

    
}
