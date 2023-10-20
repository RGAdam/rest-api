<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request): Response
    {
        dd($request->all());
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response(Auth::user(), 200);
        }

        abort(401);
    }

    public function logout(): Response
    {
        Auth::logout();

        return response(null, 200);
    }
}
