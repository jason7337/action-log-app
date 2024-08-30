<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ActionLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            ActionLog::create([
                'action_time' => now(),
                'user_id' => $user->id,
                'operation_name' => 'register',
                'ip_address' => $request->ip(),
                'action_status' => 'success',
            ]);

            return redirect('/dashboard');
        } catch (\Exception $e) {
            ActionLog::create([
                'action_time' => now(),
                'operation_name' => 'register',
                'ip_address' => $request->ip(),
                'action_status' => 'error',
                'error_message' => $e->getMessage(),
            ]);

            return back()->withErrors([
                'message' => 'Ocurrió un error durante el registro.',
            ]);
        }
    }
}