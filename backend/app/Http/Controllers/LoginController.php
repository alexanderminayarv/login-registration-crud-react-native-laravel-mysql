<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function loginUser(Request $request)
    {
        // Validación de datos
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intento de inicio de sesión
        if (auth()->attempt($data)) {
            // Éxito en el inicio de sesión
            $user = auth()->user();
            return response()->json(['firstName' => $user->firstName], 200);
        } else {
            // Error en el inicio de sesión
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
}