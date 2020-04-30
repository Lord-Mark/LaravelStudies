@extends('layouts.parentPage')

@push('title')
	{{$title ?? "MyProject"}}
@endpush

@section('content')
	<h1> {{$title}} </h1>
	<p>Welcome to the services page</p>

	<ul class="list-group">
		@if (count($services) > 0)
			@foreach ($services as $service)
				<li class="list-group-item">
					{{$service}}
				</li>
			@endforeach
		@endif
	</ul>
@endsection