@extends('master')

@section('title') 

 {{ $movie->title }}

@endsection

@section('content')

	@include('partials/left_panel')
	<div class="col col-md-9">
			<div class="jumbotron text-center">

				<h2>{{ $movie->title  }}</h2>

				<p><img src="{{$movie->image }}" alt="" style="max-height:600px" class="img-responsive center-block"></p>

				<p> {{ $movie->text }} </p>

				<p>{{ $movie->year }}</p>

				@foreach($movie->category as $category)
								
						<a href="{{ URL('categories',$category->id) }}">
							<button type="button" class="btn btn-primary btn-sm">{{ $category->name }}</button>
						</a>

				@endforeach

			</div>
	</div>


@endsection