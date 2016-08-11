@extends('master')


@section('content')

<div class="col-md-12">

{!! Form::open(['url'=>'movies/category/create','method'=>'POST']) !!}

<h2>Create Category</h2>

<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name',null, [
		'class'=>'form-control',
		'required'=>true,
		'autofocus'=>true,
	]) !!}
</div>

<div class="form-group">
	{!! Form::submit('Create Category',[
		'class'=>'btn btn-default',
	]) !!}

</div>
{!! Form::close() !!}
@endsection