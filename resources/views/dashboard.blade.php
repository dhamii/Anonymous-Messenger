@extends('layouts.app')
@section('title')
    Dashboard
@endsection

@section('styles')
    <style>
        .unique {
            display: none;
        }
        button {
            margin-top: 10px;
        }
        button:hover {
            cursor: pointer;
        }
        h4 {
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')
    <h1>Dashboard</h1>
    <p>Welcome, {{ $name }}!</p>
    <p>Your email: {{ $email }}</p>
    

    <h4>View your link: <button onclick="openMessage()">View</button></h4>
    <p class="unique">Your unique link: <a href="{{route('message', ['id' => $id])}}">http://127.0.0.1:8000/message/{{$id}}</a></p>
    <form action="/logout" method="POST">
    @csrf
        <button type="submit">Logout</button>
    </form>
    <form action="/message" method="GET">
        <button type="submit">View Messages</button>
    </form>

    <script>
            function openMessage() {
                const uniqueLink = document.querySelector('.unique');
                uniqueLink.style.display = 'block';
            }
    </script>
@endsection