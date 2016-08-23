@extends('master')


@section('content')
@if ($errors->any())
<ul class='alert alert-danger'>
	@foreach($errors->all() as $error)
		<li>{{$error}}</li>
	@endforeach
</ul>
@endif


<div class="col-md-12">

	{!! Form::open(['url'=>'movies/create','method'=>'post','id'=>'movie_create']) !!}

	<h2>Add Movie 1/2: Basic</h2>


	<div class="form-group">
		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title', null, [
			'class'=>'form-control name',
			'autofocus'=>true,
			'reqiured'=>true,
		]) !!}
		<div class ='alert alert-danger error_text'>Need more like 2 char</div>
	</div>
	

	
	<div class="form-group">
		
		{!! Form::submit('Next', [
			'class'=>'btn btn-default',
		]) !!}
	</div>
	{!! Form::close() !!}






</div>


@endsection