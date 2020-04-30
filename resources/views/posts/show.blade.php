@extends('layouts.parentPage')

@section('content')
	
	<a href="/posts" class="btn btn-default">Return</a>

	<h1> {{$post->title}} </h1>
	<div>
		{{$post->body}}
	</div>
	
	<hr>
	<small>Written on {{ $post->created_at }} </small>

@endsection