<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    public function generateToken()
    {
        $user = Auth::user();
        
        if ($user) {
            $token = $user->createToken('token-name')->plainTextToken;

            // Передаем токен в представление и отображаем его
            return view('token')->with('token', $token);
        }

        // Если пользователь не авторизован, перенаправляем на страницу входа с ошибкой
        return redirect('/login')->withErrors(['message' => 'Пользователь не авторизован']);
    }
}
