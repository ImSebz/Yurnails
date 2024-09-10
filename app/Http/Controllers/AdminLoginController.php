<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->intended('/admin/dashboard')->with('success', 'Login exitoso');
        }

        // Autenticación fallida
        return redirect()->back()->withErrors(['email' => 'Credenciales incorrectas'])->withInput();
    }
}   