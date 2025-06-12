@extends('layouts.app')
@section('title')
    Dashboard
@endsection



@section('content')
    <h1>Dashboard</h1>
    <p>Welcome, {{ $name }}!</p>
    <p>Your email: {{ $email }}</p>
    

    <h4>Copy your link: <button>Show</button></h4>
    <p>Your unique link: <a href="{{route('message', ['id' => $id])}}">http://127.0.0.1:8000/message/{{$id}}</a></p>
    <form action="/logout" method="POST">
    @csrf
        <button type="submit">Logout</button>
    </form>
@endsection