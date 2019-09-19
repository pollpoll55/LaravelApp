@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-primary">Go Back<a>
    <h1>{{$post->title}}</h1>
    @if($post->cover_image != "noimage.jpg")
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    @endif
    <div style="margin: 1rem">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <div style="text-align: center">
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>
        @endif
    @endif
@endsection