<div class="col col-sm-3">				
	<div class="list-goup">
		@foreach($categories as $category_for)
					
			<a class="list-group-item" href="{{ URL('categories',$category_for->id) }}">{{ $category_for->name }}</a>

		@endforeach 

	</div>
	<label for="sel1">Choose year</label>
	<select name="filter_year" class="form-control" id="sel1" onchange="filter()">
		<option value=""></option>
			@foreach($years as $year)
				<option value="{{ $year->year }}">{{ $year->year }}</option>
			@endforeach 	
	</select>
</div>