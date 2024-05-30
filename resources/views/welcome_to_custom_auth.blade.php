@extends('layout.layout')
@section('title', 'Welcome to : '.config('app.name'))

@section('content')

    @auth
    
    {{ auth()->user()->name }}
        
    @endauth
    
@endsection