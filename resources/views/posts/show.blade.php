@extends('layouts.master')


@section('title')
	{{ $post->title }}
@stop

@section('content')
	
	<div class="row jumbotron">


	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			<h3>{{ $post->title }}</h3>
			<h5>{{ $post->created_at }}</h5>
			<h4>{{ $post->content }}</h4>
		</div>
	</div>

@stop

@section('footer')

@stop