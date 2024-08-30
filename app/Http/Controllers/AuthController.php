<?php

namespace App\Http\Controllers;

use App\Models\ActionLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                ActionLog::create([
                    'action_time' => now(),
                    'user_id' => Auth::id(),
                    'operation_name' => 'login',
                    'ip_address' => $request->ip(),
                    'action_status' => 'success',
                ]);

                return redirect()->intended('/dashboard');
            }

            ActionLog::create([
                'action_time' => now(),
                'operation_name' => 'login',
                'ip_address' => $request->ip(),
                'action_status' => 'error',
                'error_message' => 'Invalid credentials',
            ]);

            return back()->withErrors([
                'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
        } catch (\Exception $e) {
            ActionLog::create([
                'action_time' => now(),
                'operation_name' => 'login',
                'ip_address' => $request->ip(),
                'action_status' => 'error',
                'error_message' => $e->getMessage(),
            ]);

            return back()->withErrors([
                'email' => 'Ocurrió un error durante el inicio de sesión.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        try {
            ActionLog::create([
                'action_time' => now(),
                'user_id' => Auth::id(),
                'operation_name' => 'logout',
                'ip_address' => $request->ip(),
                'action_status' => 'success',
                'page_section' => 'Login Page',
            ]);

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/');
        } catch (\Exception $e) {
            ActionLog::create([
                'action_time' => now(),
                'user_id' => Auth::id(),
                'operation_name' => 'logout',
                'ip_address' => $request->ip(),
                'action_status' => 'error',
                'error_message' => $e->getMessage(),
            ]);

            return back()->withErrors([
                'message' => 'Ocurrió un error durante el cierre de sesión.',
            ]);
        }
    }
}