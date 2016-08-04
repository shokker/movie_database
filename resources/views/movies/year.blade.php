@extends('master')

@section('title') 

 {{ $year }} 

@endsection

@section('content')
		@include('partials/form')
		@include('partials/left_panel')
		<div class="col col-md-10 ">
			<div class="jumbotron text-center">
				<h2>{{ $year }}</h2>
			</div>
			<div class="row">
				@foreach ($movies as $movie)
					@include('partials/right_panel')
				@endforeach
			</div>
		</div>
@endsection