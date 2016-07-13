$('a[rel=tooltip]').tooltip({
	'placement': 'bottom'
});


$('.navbar a, .subnav a').smoothScroll();


(function ($) {

	$(function(){

		// fix sub nav on scroll
		var $win = $(window),
				$body = $('body'),
				$nav = $('.subnav'),
				navHeight = $('.navbar').first().height(),
				subnavHeight = $('.subnav').first().height(),
				subnavTop = $('.subnav').length && $('.subnav').offset().top - navHeight,
				marginTop = parseInt($body.css('margin-top'), 10);

				isFixed = 0;

		processScroll();

		$win.on('scroll', processScroll);

		function processScroll() {
			var i, scrollTop = $win.scrollTop();

			if (scrollTop >= subnavTop && !isFixed) {
				isFixed = 1;
				$nav.addClass('subnav-fixed');
				$body.css('margin-top', marginTop + subnavHeight + 'px');
			} else if (scrollTop <= subnavTop && isFixed) {
				isFixed = 0;
				$nav.removeClass('subnav-fixed');
				$body.css('margin-top', marginTop + 'px');
			}
		}

	});

	// $(document).ready(function() { 
 //        var offset = 64;        
 //        var windowWidth = 0;

 //        $(window).resize(function(){
 //          windowWidth = $(window).width();
 //            if(windowWidth < 979 ){
 //              offset = 0;              
 //            }
 //        });

 //        $('.nav li a, .more').click(function(event) {
 //            if($(this).attr('href').substr(0,1) == '#' && $($(this).attr('href')).length) {
 //              event.preventDefault();
 //              $('body,html').animate({'scrollTop':$($(this).attr('href')).position().top - offset},600);
 //            }
 //        }); 


 //        $(window).trigger('resize');      

 //      });

})(window.jQuery);