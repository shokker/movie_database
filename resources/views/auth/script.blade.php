<script>
	$(function()
	{
		var validation = {
			reguired: function(val) { return !!val },



		});
		$(#form-login).submit(function()
			{
				var inputs = $(this).find(':inputs').not(':submit');

				inputs.each(function()
				{
					var input = $(this),
						value = input.val,
						classes = input.attr('class');

					console.log(classes);



				});

				return false;


			
			});


	})
</script>