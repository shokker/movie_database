

<div class="col col-md-6 col-sm-12 col-xs-12">
			<a href="{{URL('movies',$movie->slug)}}" >
				<div class="panel panel-default movie_block" style="min-height:240px;">
				<div class="row">
				
					<div class="col col-md-5 hidden-xs  col-lg-4 col-sm-4">
						
						<img  src='{{ URL::asset('img/' . $movie->image) }}' alt="" class="center-block img-responsive" style="max-height:240px;max-width:185px;">
			
					</div>
					<div class="col hidden-md col-xs-12 hidden-lg hidden-sm">
						<img  src='{{ URL::asset('img/' . $movie->coverImg) }}' alt="" class="center-block img-responsive">
					</div>
					<div class="col col-md-7 hidden-xs col-lg-8 col-sm-8">
						<div class="panel-body">
							<h3>{{ $movie->title }}</h3>
							@foreach($movie->category as $category)	
								<span class="small text-muted">{{ $category->name }}</span>	
							@endforeach
							<p>
							 {{ limit_text($movie->text,25) }}
							 </p>
							 <p>
								<span>&#9733; {{ tmdb()->getMovie($movie->tmdb)->getVoteAverage() }}</span> 
								<span><i class="fa fa-calendar fa-1g fa-fw" aria-hidden="true"> </i>{{$movie->year}}</span>
							</p>
							
						</div>
					</div>

				<div class="col hidden-md col-xs-12 hidden-lg hidden-sm">
						<div class="panel-body">
			
									<h3>{{ $movie->title }}</h3>		
									<span>&#9733; {{ tmdb()->getMovie($movie->tmdb)->getVoteAverage() }}</span> 
									<span><i class="fa fa-calendar fa-1g fa-fw" aria-hidden="true"> </i>{{$movie->year}}</span>
							</div>		
						</div>
					</div>
				</div>
				</a>
				</div>
			