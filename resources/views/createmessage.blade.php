@extends('layouts.app')
@section('title')
    Create Message
@endsection

@section('content')
    Send a message to {{$userinfo->name}} with them knowing<br>
    <form action="{{route('message.create', ['id' => $id]) }}" method="POST">
        @csrf
        <textarea name="message"></textarea>
        <button>Submit</button>
    </form>

@endsection