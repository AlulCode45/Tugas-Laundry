<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function LoginView()
    {
        return view('auth.Login');
    }
    function Login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user and Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->to('/kasir');
        } else {
            return redirect()->to('/')->with('failed', 'Username / Password salah');
        }
    }
    function Logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
