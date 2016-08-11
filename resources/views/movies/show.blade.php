@extends('master')

@section('title') 

 {{ $movie->title }}

@endsection

@section('content')
	@include('partials/form')
	@include('partials/left_panel')
		<div class="col col-md-10">
			<div class="panel panel-default">
				<div class="row">
					<div class="col-md-3 col-sm-5">
						<p><img src='{{ URL::asset('img/' . $movie->image) }}' alt=""  class="img-responsive center-block"></p>	
						@foreach($movie->category as $category)
						<p>		
						<a href="{{ URL('movies/category',$category->id) }}">
							<button type="button" class="btn btn-primary btn-block">{{ $category->name }}</button>
						</a>
						</p>
					@endforeach
					</div>
					<div class="col-md-9 col-sm-7" >
						<h2>{{ $movie->title  }}</h2>
						@if(Auth::check())
							<p>
							<span>
								<a href="{{ URL('movies/'. $movie->id . '/edit') }}" class="btn btn-info" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> edit</a>
							</span>
							<span>
								<a href="{{ URL('movies/'. $movie->id . '/delete') }}" class="btn btn-danger" role="button"><i class="fa fa-times" aria-hidden="true"></i> delete</a>
							</span>
							</p>
							
						@endif
						<div class="alert alert-info">
							&#9733; {{ tmdb()->getMovie($movie->tmdb)->getVoteAverage() }}
							<i class="fa fa-calendar fa-1g fa-fw" aria-hidden="true"> </i>{{$movie->year}}
						</div>
						<p> {{ $movie->text }} </p>
						<p>
						@foreach(tmdb()->getMovie($movie->tmdb)->get('casts') as $key=>$value)
							@if($key=='crew')
								<div class='panel panel-warning'>
									<div class="panel-heading">	
										<h4 class=panel-title>Producion</h4>  
									</div> 
									<div class='panel-body'>
										<div class="row">
											@foreach($value as $crew)
												@if (in_array($crew['job'],['Director','Director of Photography','Original Music Composer']))
													<div class="col-md-4">
														<p><strong>{{ $crew['name'] }}</strong></p>
														<p class='small'>{{ $crew['job'] }}</p>
													</div>
												@endif 
											@endforeach
										</div>
									</div>
								</div>
							@endif

							@if($key=='cast')
								<div class='panel panel-info'>
									<div class="panel-heading">		
										<h4 class=panel-title>Casts</h4>
									</div>
									<div class='panel-body'>
										<div class="row">
											@for($i=0;$i<6;$i++)
												<div class="col-md-2">
													<p><strong>{{ $value[$i]['name'] }}</strong></p>
													<p class='small'>{{ $value[$i]['character'] }}</p>
												</div>
											@endfor
										</div>
									</div>
								</div>
							@endif
						@endforeach
						</p>
						<div class='panel panel-danger'>
							<div class="panel-heading">
								<h4 class="panel-title">Trailer</h4>
							</div>
							<div class='panel-body'>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="{{ URL::asset('https://www.youtube.com/embed/'. tmdb()->getMovie($movie->tmdb)->getTrailer()) }}">
									</iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection