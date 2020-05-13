@extends('layouts.parentPage')

@section('content')
	<h1>Edit Post</h1>

	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title', $post->title, ["class" => "form-control", "placeholder" => "Input your title"])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
    		{{Form::textarea('body', $post->body, ["id"=>"article-ckeditor", "class" => "form-control", "placeholder" => "Input your text here"])}}
    	</div>
        {{Form::hidden("_method", "PUT")}}
    	{{Form::submit('Submit', ["class" => "btn btn-primary"])}}
	{!! Form::close() !!}
@endsection