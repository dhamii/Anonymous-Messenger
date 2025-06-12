<?php

use App\Models\Messages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\Auth\UserController;

Route::get('/', [MessagesController::class, 'dashboardview'])->name('dashboard');


Route::get('/login', [UserController::class, 'showLoginForm'])->name('loginview');;

Route::get('/signup', [UserController::class, 'showSignUpForm'])->name('signupview');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/signup', [UserController::class, 'signUp'])->name('signup');
