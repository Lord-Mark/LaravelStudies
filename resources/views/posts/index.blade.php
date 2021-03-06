@extends('layouts.parentPage')

@section('content')
	<h1>Posts</h1>
	<div class="container">
		@if (count($posts) > 0)
			
			<div class="well">
				@foreach ($posts as $post)
					<h3>
						<a href="posts/{{$post->id}}">{{ $post->title }}</a>
					</h3>
					<small>Written on {{ $post->created_at }} </small>
					
				@endforeach
			</div>
			{{ $posts->links() }}
		@else
			<p>No posts found ;-;</p>
		@endif
	</div>
@endsection