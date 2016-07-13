@extends('master')

@section('title') 

movie databse

@endsection

@section('content')

	<div class="row">
		<div class="col col-sm-3">				
			<div class="list-goup">
				 @foreach($categories as $category_for)
					
					<a class="list-group-item" href="{{ URL('categories',$category_for->id) }}">{{ $category_for->name }}</a>

				@endforeach 

			</div>
			<select name="filter_year">
			@foreach($years as $year)
				<option value="{{ $year->year }}">{{ $year->year }}</option>
			@endforeach 
				
			</select>
		</div>
		<div class="col col-sm-9">
			<div class="row">
				@foreach ($movies as $movie)
					<div class="col-sm-3">
						<h2>{{ $movie->title }}</h2>
						<a href="{{URL('movies',$movie->id)}}">
						<img  style="max-height:400px" src={{ $movie->image }} alt="" class="img-responsive">
						</a>
						@foreach($movie->category as $category)
								
							<p>{{ $category->name }}</p>	

						@endforeach
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection