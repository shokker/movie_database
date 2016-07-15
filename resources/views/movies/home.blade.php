@extends('master')

@section('title') 

movie databse

@endsection

@section('content')
	@include('partials/left_panel')
	<div class="col col-md-9">
		<div class="row row-eq-height">
			@foreach ($movies as $movie)
				@include('partials/right_panel')
			@endforeach
		</div>
	</div>
@endsection


