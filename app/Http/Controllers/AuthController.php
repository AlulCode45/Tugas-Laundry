<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function LoginView()
    {
        return view('auth.Login');
    }
    function Login(Request $request)
    {
    }
}
