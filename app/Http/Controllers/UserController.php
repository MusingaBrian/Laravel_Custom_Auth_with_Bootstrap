<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        return View('login');
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
