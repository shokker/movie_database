<script>
$(function(){

	$(this).find('.error_text').hide();

	var validation = {
				name  : function(val) { return val.length>2;},
			}
	
	
	$('#category_add, #movie_create').submit(function()
		{	
			var valid = true;
			$(this).find('.error_text').hide();
			var inputs = $(this).find(':input').not(':submit').not(':hidden');
			console.log(inputs);

			inputs.each(function()
			{

				var input  = $(this),
				    value  = input.val(),
				    classes = input.attr('class').split(' ');
				

				console.log(typeof classes,classes);
				
				for (i in classes)
				{
					console.log(classes[i]);
					if(validation.hasOwnProperty(classes[i]) && !validation[classes[i]](value))
					{	
						valid = false;
						input.next().fadeIn(1000);
					}

				}
			});
			return valid;
		});
	$('#select_from').change(function(){
		var from = $('#select_from option:selected' ).text();
		$('#select_to option').each(function(){

		if($(this).text()<from){
			$(this).hide();
		}
		else{
			$(this).show();



		}
	});

	});


	

	

	$('#categorySearch').submit(function(){

		
		var from = $('#select_from option:selected').text();
		var to = $('#select_to option:selected').text();
		var inputs = $(this).find(':checkbox');
		var array = [];

		$('#select_from option:selected').val(from);
		$('#select_to option:selected').val(to);

		inputs.each(function(){
		if($(this).is(':checked')){
				array[array.length]=$(this).val(); 
			}
		});
		var url = array.join('-') +'-' + from +'-'+ to;
		$(this).attr('action','/movies/filter/' + url);
		return true;
	});


	$('.movie_block').hover(function(){

		$(this).css('box-shadow','0px 0px 7px #BABABA');
	},function(){
		$(this).css('box-shadow','0px 0px 0px #BABABA');

	});
})
</script>