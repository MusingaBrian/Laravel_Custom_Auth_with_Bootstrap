<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome_to_custom_auth');
});
