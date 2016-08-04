@extends('master')


@section('content')

<div class="col-md-12">
	<form method="POST" action="/movies/create_tmdb" role='form' enctype="multipart/form-data">
		<div class="row">
	 		{!! csrf_field() !!}
    		@for($i=0;$i<3;$i++)
    			<div class="col-md-4">
    				<div class='panel panel-default'>
    					<div class="panel-heading">
        					<h2 class='panel-title'>{{ $movies[$i]->get('title') }}</h2>
        				</div>
        				<div class="panel-body">
        					<section> {{$movies[$i]->get('overview')}}</section>
        					<input type="radio" name="movie" value="{{$movies[$i]->get('id')}}" checked> Select
        				</div>
    				</div>
    			</div>
			@endfor
		</div>
		<h3>Categories</h3>
		@foreach($categories as $category)
		<span class='form-group'>
			<input type="checkbox" name="cat[]" value="{{ $category->id }}"> {{$category->name}}
		</span>
		@endforeach
	<h3>Choose image</h3>
	<input type="file" name="image" accept="image/*">
	<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>
@endsection