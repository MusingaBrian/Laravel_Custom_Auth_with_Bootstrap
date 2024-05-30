<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return View('welcome_to_custom_auth');
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect(route('welcome'));
        }
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
        if (Auth::check()) {
            return redirect(route('welcome'));
        }
        return View('register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        $user = User::Create($data);

        if (!$user) {
            return redirect(route('register'))->with('error', 'Sorry Something went wrong!');
        }
        return redirect(route('login'))->with('success', 'welcome!');
    }

    public function logOut()
    {
        Session::flush();
        Auth::logout();

        return redirect(route('login'));
    }
}
