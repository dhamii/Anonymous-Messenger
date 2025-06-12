@extends('layouts.app')
@section('title')
Sign Up
@endsection
@section('content')
    <p>Signup</p>
    <form action="/signup" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password" required>
    <button>Submit</button>
    </form>
@endsection

