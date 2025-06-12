<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function signUp(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        auth()->login($user);
        // return 'signed up successfully';
        return redirect('/');
    }
    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required',
            'password' => 'required|string',
        ]);
        // dd($info);
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        }
        return "Invalid credentials";
        // return response()->json(['message' => 'Invalid credentials'], 401);
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }

    //Views

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function showSignUpForm()
    {
        return view('auth.signup');
    }
}
