@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>
    <div class = 'container'>
        <h3 style='text-align: center'>Contact Us Form</h3>
        {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST']) !!}
            <div class='form-group'>
                {{Form::label('name', 'Name:')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class='form-group'>
                {{Form::label('email', 'Email:')}}
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
            <div class='form-group'>
                {{Form::label('message', 'Messsage:')}}
                {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Message'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection