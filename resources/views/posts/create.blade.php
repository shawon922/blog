@extends('layouts.master')


@section('title')
	{{ $page_title }}
@stop

@section('content')

	<div class="row jumbotron">

	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open(['route' => ['posts.store']]) !!}

				@include('posts.form', ['submitButtonText' => 'Save Post'])

			{!! Form::close() !!}

			@include('errors.list')

		</div>
	</div>
@stop

@section('footer')

@stop
