@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <div class="container">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam iure voluptas nulla accusamus veniam vitae unde debitis optio, porro, a possimus placeat dolorem rerum sint ab dolores doloribus labore necessitatibus.</p>
    </div>
    <p style="text-align: center"><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    @include('inc.slideshow')
@endsection