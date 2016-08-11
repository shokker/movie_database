@extends('master')


@section('content')

<div class="col-md-12">

	{!! Form::open(['url'=>'movies/create','method'=>'post']) !!}

	<h2>Add Movie 1/2: Basic</h2>


	<div class="form-group">
		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title', null, [
			'class'=>'form-control',
			'autofocus'=>true,
			'reqiured'=>true,
		]) !!}
	</div>

	
	<div class="form-group">
		
		{!! Form::submit('Next', [
			'class'=>'btn btn-default',
		]) !!}
	</div>
	{!! Form::close() !!}






</div>


@endsection