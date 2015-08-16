	{!! Form::hidden('user_id', 1) !!}
	<div class="form-group">
		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title', null, array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('content', 'Content') !!}
		{!! Form::textarea('content', null, array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('published_at', 'Publish On') !!}
		{!! Form::input('date', 'published_at', date('Y-m-d'), array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::submit($submitButtonText, array('class' => 'btn btn-primary')) !!}
	</div>