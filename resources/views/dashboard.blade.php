@extends('layouts.app')
@section('title')
    Dashboard
@endsection



@section('content')
    <h1>Dashboard</h1>
    <p>Welcome, {{ $name }}!</p>
    <p>Your email: {{ $email }}</p>
    <a href="/logout">Logout</a>
@endsection