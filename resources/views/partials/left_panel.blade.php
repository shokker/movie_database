<div class="col col-md-2 col-xs-12 col-sm-12">				
	<div class="list-goup">
		@foreach($categories as $category_for)
					
			<a class="list-group-item" href="{{ URL('movies/category',$category_for->id) }}">{{ $category_for->name }}</a>

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

<script>
function filter() {
    var x = document.getElementById("sel1");
    var i = x.selectedIndex;
    window.location.replace('/by_year/'+ x.options[i].text);
}
</script>