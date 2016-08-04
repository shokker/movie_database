@extends('master')

@section('title') 

movie databse

@endsection

@section('content')
	@include('partials/form')
	@include('partials/left_panel')
	<div class="col col-md-10 col-sm-12 col-xs-12">
		<div class="row">
			@forelse ($movies as $movie)
				@include('partials/right_panel')

			@empty
				<p>No movies</p>
			@endforelse
		</div>
	</div>
@endsection


