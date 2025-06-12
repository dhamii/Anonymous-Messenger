@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="/register">Register here</a></p>
    </form>
@endsection