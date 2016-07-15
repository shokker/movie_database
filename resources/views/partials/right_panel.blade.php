<div class="col-md-4">
				<div class="jumbotron text-center">
					<h2>{{ $movie->title }}</h2>
					<a href="{{URL('movies',$movie->id)}}">
						<p><img  style="max-height:400px" src={{ $movie->image }} alt="" class="img-responsive center-block"></p>
					</a>
					@foreach($movie->category as $category)
								
						<a href="{{ URL('categories',$category->id) }}">
							<button type="button" class="btn btn-primary btn-sm">{{ $category->name }}</button>
						</a>

					@endforeach
				</div>
			</div>