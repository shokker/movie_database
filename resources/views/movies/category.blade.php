@extends('master')

@section('title') 

 {{ $category->name }} 

@endsection

@section('content')

		@include('partials/left_panel')
		<div class="col col-md-10">
			<div class="jumbotron text-center">
				<h2>{{ $category->name }}</h2>
			</div>
			<div class="row">
				@foreach ($category->movie as $movie)
					@include('partials/right_panel')
				@endforeach
			</div>
		</div>
@endsection