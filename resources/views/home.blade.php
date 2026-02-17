@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome to Laravel Blade</h1>

    @if($showMessage)
        <p>{{ $message }}</p>
    @endif

    <h3>Users:</h3>
    <ul>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
@endsection
