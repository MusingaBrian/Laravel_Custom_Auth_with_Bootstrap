<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Http

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

    public function loginPost()
    {
        return View('login');
    }


    public function register()
    {
        return View('register');
    }

    public function registerPost()
    {
        return View('register');
    }
}
