

<div class="col col-md-6 col-sm-12 col-xs-12">
				<div class="panel panel-default">
				<div class="row">
				
					<div class="col col-md-3 col-xs-3">
						<a href="{{URL('movies',$movie->id)}}">
						<img  src='{{ URL::asset('img/' . $movie->image) }}' alt="" class="img-responsive center-block">
						</a>
					</div>
					<div class="col col-md-9 col-xs-9">
						<div class="panel-body">
							<h3>{{ $movie->title }}</h3>
							<p>
							 {{ limit_text(tmdb()->getMovie($movie->tmdb)->get('overview'),15) }}
							 </p>
							 <p>
								<span>&#9733; {{ tmdb()->getMovie($movie->tmdb)->getVoteAverage() }}</span>
								<span><i class="fa fa-calendar fa-1g fa-fw" aria-hidden="true"> </i>{{$movie->year}}</span>
							</p>
							@foreach($movie->category as $category)	
								<a href="{{ URL('categories',$category->id) }}">
									<button type="button" class="btn btn-primary btn-sm">{{ $category->name }}</button>
								</a>
							@endforeach
						</div>
					</div>
				</div>
				</div>
			</div>