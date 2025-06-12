@extends('layouts.app')

@section('title')
    Messages
@endsection

@section('content')
    <h1>Your Messages</h1>
    @if ($messages->isEmpty())
        <p>No messages found.</p>
    @else
     @foreach ($messages as $message)
     <p>{{$message->message}}<br>From Anonymous<br>{{$message->created_at->format('d M Y')}}</p>
     
     @endforeach
    @endif

@endsection