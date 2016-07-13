@extends('master')

@section('title') 

 {{ $category->name }} 

@endsection

@section('content')

	<div class="row">
		<div class="col col-sm-3">				
			<div class="list-goup">
				  @foreach($categories as $category_for)
					
					<a class="list-group-item" href="{{ URL('categories',$category_for->id) }}">{{ $category_for->name }}</a>

				@endforeach 

			</div>
		</div>
		<div class="col col-sm-9">
		<h2>{{ $category->name }}</h2> 
			<div class="row">
			
			@foreach ($category->movie as $movie)
					<div class="col-sm-3">
						<h2>{{ $movie->title }}</h2>
						<a href="{{URL('movies',$movie->id)}}">
						<img  style="max-height:400px" src={{ $movie->image }} alt="" class="img-responsive">
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection