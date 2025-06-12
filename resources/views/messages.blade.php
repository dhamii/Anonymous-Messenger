@extends('layouts.app')

@section('title')
    Messages
@endsection

@section('content')
    <h1>Messages</h1>
    @if ($messages->isEmpty())
        <p>No messages found.</p>
    @else
     @foreach ($messages as $message)
     <p>{{$message->message}}</p>
     
     @endforeach
    @endif

@endsection