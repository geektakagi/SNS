<!-- resources/views/articles/show.blade.php -->

@extends('layout')

@section('header')
	<h1>articles/show.blade.php</h1>
@endsection

@section('content')
	<h1>{{ $article->title }}</h1>
	<br>

	<article>
		{!! delete_form(['articles', $article->id]) !!}

		<div class="body">{{ $article->body }}</div>
	</article>
@endsection