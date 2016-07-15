@extends('master')

@section('title') 

movie databse

@endsection

@section('content')

	<div class="row">
		@include('partials/left_panel')
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