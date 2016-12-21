<!-- resources/views/articles/index.blade.php -->

@extends('layout')

@section('header')
	<h1>articles/index.blade.php</h1>
@endsection

@section('content')
	<h1>Articles</h1>
	<br>

	@foreach($articles as $article)
	<hr>
		<article>
			<h2><a href="{{ url('articles', $article->id) }}">
				{{ $article->title }} 
			</a></h2>
			<div class="body">
				{{ $article->body }}
			</div>
		</article>
	@endforeach
@endsection