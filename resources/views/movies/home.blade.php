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
			<label for="sel1">Choose year</label>
			<select name="filter_year" class="form-control" id="sel1" onchange="filter()">
			<option value=""></option>
			@foreach($years as $year)
				<option value="{{ $year->year }}">{{ $year->year }}</option>
			@endforeach 	
			</select>
		<p id="demo"></p>
		</div>
		<div class="col col-sm-9">
			<div class="row">
				@foreach ($movies as $movie)
					<div class="col-sm-3">
						<div class="jumbotron text-center">
						<h2>{{ $movie->title }}</h2>
						<a href="{{URL('movies',$movie->id)}}">
						<img  style="max-height:400px" src={{ $movie->image }} alt="" class="img-responsive">
						</a>
						@foreach($movie->category as $category)
								
							<p class="alert alert-success"><a href="{{ URL('categories',$category->id) }}">{{ $category->name }}</a></p>

						@endforeach
					</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection


<script>
function filter() {
    var x = document.getElementById("sel1");
    var i = x.selectedIndex;
    window.location.replace('/by_year/'+ x.options[i].text);
}
</script>