<!-- resources/views/articles/create.blade.php -->
 
@extends('layout')
 
@section('content')
    <h1>Write a New Article</h1>
 
    <hr/>
    @if( $errors->any())
        <ul>@foreach( $errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach </ul>
    @endif
    {!! Form::open(['url' => 'articles']) !!}
        <div class="form-group">
            {!! Form::label('writer', 'Name:') !!}
            {!! Form::text('writer', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection