@extends('layouts.parentPage')

@push('title')
	{{$title ?? "MyProject"}}
@endpush

@section('content')
	<div class="jumbotron text-center">
		<h1> {{$title}} </h1>
		<p>Welcome to the index page</p>
		<p>
			<a class="btn btn-primary btn-lg" role="button" href="/login">Login</a>
			<a class="btn btn-success btn-lg" role="button" href="/register">Register</a>
		</p>
	</div>
@endsection