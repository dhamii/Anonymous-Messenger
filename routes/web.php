<?php

// use GoogleController;
use App\Models\Messages;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\UserController;

Route::get('/', [MessagesController::class, 'dashboardview'])->name('dashboard');


Route::get('/login', [UserController::class, 'showLoginForm'])->name('loginview');;

Route::get('/signup', [UserController::class, 'showSignUpForm'])->name('signupview');

Route::post('/login', [UserController::class, 'login'])->name('login');

Route::post('/signup', [UserController::class, 'signUp'])->name('signup');

Route::get('/message/{id}', [MessagesController::class, 'show'])->name('message');

Route::post('/message/create/{id}', [MessagesController::class, 'create'])->name('message.create');

Route::get('message', [MessagesController::class, 'displayMessages'])->name('message.view');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);