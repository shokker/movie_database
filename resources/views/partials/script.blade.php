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
})
</script>