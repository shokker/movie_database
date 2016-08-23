@extends('master')


@section('content')

<div class="col-md-12">
{!! Form::model($movie,['url'=>['movies',$movie->id],'method'=>'PUT','files'=>true]) !!}

<div class="form-group">
		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title', null, [
			'class'=>'form-control',
			'autofocus'=>true,
			'reqiured'=>true,
		]) !!}
	</div>
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
	
	<div class="form-group">
		
		{!! Form::submit('Next', [
			'class'=>'btn btn-default',
		]) !!}
	</div>

{!! Form::close() !!}

</div>
@endsection