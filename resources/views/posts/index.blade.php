@extends('layouts.master')


@section('title')
	{{ $page_title }}
@stop

@section('content')

	

	@if (Session::has('success'))
		<div class="alert alert-success">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

	        <h2>{{ Session::get('success') }}</h2>
	    </div>
	@endif
	
	<h4><a href="/posts/create">New Post</a></h4>
	<table width="100%" class="table table-bordered table-hover">
		<tr>
			<th style="text-align: center;" width="10%">Id</th>
			<th style="text-align: center;" width="30%">Title</th>
			<th style="text-align: center;" width="15%">Created</th>
			<th style="text-align: center;" width="15%">Updated</th>
			<th style="text-align: center;" width="30%" colspan="3">Actions</th>
		</tr>
		
		@foreach ($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>{{ $post->created_at }}</td>
				<td>{{ $post->updated_at }}</td>
				<td style="text-align: center;"><a href="/posts/{{ $post->id }}" class="btn btn-primary">Show</a></td>
				<td style="text-align: center;"><a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a></td>
				<td style="text-align: center;">
					{!! Form::open(['method' => 'delete', 'route' => ['posts.destroy', $post->id]]) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onClick' => "return check()"]) !!}
					{!! Form::close() !!}
				</td>
			</tr>
		@endforeach
	</table>
	<div class="text-center">
        {!! $posts->render() !!}
    </div>

@stop


