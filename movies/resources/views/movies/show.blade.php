@extends('master')

@section('title') 

 {{ $movie->title }}

@endsection

@section('content')

	@include('partials/left_panel')
	<div class="col col-md-9">
			<div class="jumbotron text-center">

				<h2>{{ $movie->title  }}</h2>

				<p><img src='{{ URL::asset('img/' . $movie->image) }}' alt="" style="max-height:600px" class="img-responsive center-block"></p>

				<p> {{ $movie->text }} </p>

				<p>{{ $movie->year }}</p>

				<p>   

				@foreach(tmdb()->getMovie($movie->tmbd_id)->get('casts') as $key=>$value)

					@if($key=='crew')

					@foreach($value as $crew)


					
						@if (in_array($crew['job'],['Director','Director of Photography','Original Music Composer']))

							<p>{{ $crew['job'] }}</p>
							<p>{{ $crew['name'] }}</p>
						@endif 
					@endforeach
					@endif
					@if($key=='cast')

					@for($i=0;$i<5;$i++)

					<p>{{ $value[$i]['character'] }}</p>
					<p>{{ $value[$i]['name'] }}</p>



					@endfor



					@endif
				@endforeach
				</p>

				<p>
					<iframe width="420" height="345" src="{{ URL::asset('https://www.youtube.com/embed/'. tmdb()->getMovie($movie->tmbd_id)->getTrailer()) }}">
					</iframe>
				</p>

				@foreach($movie->category as $category)
								
						<a href="{{ URL('categories',$category->id) }}">
							<button type="button" class="btn btn-primary btn-sm">{{ $category->name }}</button>
						</a>

				@endforeach

			</div>
	</div>


@endsection