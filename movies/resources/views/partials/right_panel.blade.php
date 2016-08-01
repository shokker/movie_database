
<div class="col col-md-6">
				<div class="jumbotron text-center">
					<h2>{{ $movie->title }}</h2>
					<a href="{{URL('movies',$movie->id)}}">
						<p><img  style="max-height:400px" src='{{ URL::asset('img/' . $movie->image) }}' alt="" class="img-responsive center-block"></p>
					</a>
					<p>vote : {{ tmdb()->getMovie($movie->tmbd_id)->getVoteAverage() }}</p>
					<p> {{ str_limit(tmdb()->getMovie($movie->tmbd_id)->get('overview'),80) }}</p>
					@foreach($movie->category as $category)	
						<a href="{{ URL('categories',$category->id) }}">
							<button type="button" class="btn btn-primary btn-sm">{{ $category->name }}</button>
						</a>
					@endforeach
				</div>
			</div>