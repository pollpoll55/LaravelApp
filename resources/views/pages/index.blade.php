@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam iure voluptas nulla accusamus veniam vitae unde debitis optio, porro, a possimus placeat dolorem rerum sint ab dolores doloribus labore necessitatibus.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        <hr>
        @include('inc.slideshow')
    </div>
@endsection