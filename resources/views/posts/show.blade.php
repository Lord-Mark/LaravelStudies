@extends('layouts.parentPage')

@section('content')
	
	<a href="/posts" class="btn btn-default">Return</a>

	<h1> {{$post->title}} </h1>
	<div>
		{!!$post->body!!}
	</div>
	
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit Post</a>
	<br>
	<small>Written on {{ $post->created_at }} </small>

@endsection