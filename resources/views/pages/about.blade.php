@extends('layouts.parentPage')

@push('title')
	{{$title ?? "MyProject"}}
@endpush

@section('content')
	<h1> {{$title}} </h1>
	<p>Welcome to the about page</p>
@endsection