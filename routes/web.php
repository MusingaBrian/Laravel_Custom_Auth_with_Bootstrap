<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('welcome');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class])->name('login.post');


Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class])->name('register.post');
