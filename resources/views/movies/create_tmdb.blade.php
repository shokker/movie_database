@extends('master')


@section('content')

<div class="col-md-12">
    {!! Form::open(['url'=>'movies/create_tmdb','method'=>'POST','files'=>true]) !!}
    <h2>Add Movie 2/2: Choose film from TMDB</h2>
            @if($counter>0)
    		    @for($i=0;$i<$counter;$i++)
    			    <div class="row">
    			    <div class="col-md-4">
    				    <div class='panel panel-default'>
    					    <div class="panel-heading">
        					    <h2 class='panel-title'>{{ $movies[$i]->get('title') }}</h2>
        				    </div>
        				    <div class="panel-body">
        					     <section> {{$movies[$i]->get('overview')}}</section>
                                  {!! Form::radio('movie',$movies[$i]->get('id')) !!}
                                
        					      Select
        				    </div>
    				    </div>
    			    </div>
                    </div>
                @endfor
                <div class="form-group">
                <h3>Categories</h3>
                 @foreach($categories as $category)
                      <label>
                    {!! Form::checkbox('category[]', $category->id) !!}
                    {{ $category->name }}
                    </label>
                 @endforeach
                 </div>
                <div class="form-group">
                     <h3>Choose Poster</h3>
                    {!! Form::file('image', [
                    'class'=>'form-control',
                    'accept'=>'image/*',
                    ]) !!}
                 </div>
                <div class="form-group">
                     <h3>Choose Cover</h3>
                    {!! Form::file('cover-img', [
                    'class'=>'form-control',
                    'accept'=>'image/*',
                    ]) !!}
                 </div>

                {!! Form::submit('Submit', [
                    'class'=>'btn btn-default',
                    ]) !!}
                {!! Form::close() !!}
    		@else
    			<div class="alert alert-danger"><h2>Movie not exist in TMDB</h2>
                <a href="javascript:history.back()">Try again</a></div>
    		@endif
			
		
        
</div>
@endsection