@extends('master')


@section('content')

<div class="col-md-12">

{!! Form::open(['url'=>'movies/category/create','method'=>'POST','id'=>'category_add']) !!}

<h2>Create Category</h2>

@if($errors->any())
	<ul class='alert alert-danger'>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif



<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name',null, [
		'class'=>'control-form name',
		'required'=>true,
		'autofocus'=>true,
	]) !!}
	<div class ='alert alert-danger error_text'>Need more like 2 char</div>
</div>

<div class="form-group">
	{!! Form::submit('Create Category',[
		'class'=>'btn btn-default',
	]) !!}

</div>
{!! Form::close() !!}
@endsection