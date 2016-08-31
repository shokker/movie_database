<div class="col col-md-2 col-xs-12 col-sm-12">	

{!! Form::open(['method'=>'POST','id'=>'categorySearch']) !!}			
	<div class="list-group form-group">
		@foreach($categories as $category_for)
			<label class="list-group-item">
			{!! Form::checkbox('category[]', $category_for->name) !!}
			{{ $category_for->name }}
			</label>
		@endforeach 
	</div>

	<div class="form-group">

	<h4>Choose year</h4>

	<label for="from">From</label>

		{{ Form::select('from',$years,0,['class'=>'form-control','id'=>'select_from']
		)}}
	<label for="to">To</label>

		{{ Form::select('to',$years,count($years)-1,['class'=>'form-control','id'=>'select_to'] 
		)}}
	</div>

	<div class="form-group">
	{!! Form::submit('Search',[
		'class'=>'btn btn-default',
	]) !!}
	</div>

	{!! Form::close() !!}
	
</div>
