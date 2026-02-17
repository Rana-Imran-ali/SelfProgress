{{-- <h1>Hello contact </h1> --}}
@extends('layouts.master')

<h1>Hello contact</h1>
<nav>
    <a href="contact">contact</a>
    <a href="about">about</a>
    <a style ="subject">subject</a>

</nav>

@foreach($teachers as $teacher)
    <p>{{ $teacher->name }} - {{ $teacher->email }} - {{ $teacher->subject }}</p>
@endforeach

