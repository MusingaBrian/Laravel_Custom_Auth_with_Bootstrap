<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return View('welcome_to_custom_auth');
    }
    public function login()
    {
        return View('login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|',
            'password' => 'required|',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('welcome'))->with('success', 'You are welcome.');
        }

        return redirect(route('login'))->with('error', 'Login details are not valid');
    }


    public function register()
    {
        return View('register');
    }

    public function registerPost(Request $request)
    {
        return View('register');
    }
}
