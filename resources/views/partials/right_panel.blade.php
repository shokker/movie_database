

<div class="col col-md-6 col-sm-12 col-xs-12">
				<div class="panel panel-default">
				<div class="row">
				
					<div class="col col-md-5 col-xs-5">
						<a href="{{URL('movies',$movie->id)}}">
						<img  style="max-height:250px" src='{{ URL::asset('img/' . $movie->image) }}' alt="" class="img-responsive center-block">
						</a>
					</div>
					<div class="col col-md-7 col-xs-7">
						<h3>{{ $movie->title }}</h3>
						<p>
						 {{ str_limit(tmdb()->getMovie($movie->tmbd_id)->get('overview'),80) }}
						 </p>
						 <p>
							<span>&#9733; {{ tmdb()->getMovie($movie->tmbd_id)->getVoteAverage() }}</span>
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