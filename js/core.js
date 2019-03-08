jQuery(function ($) {
			
	var $searchlink = $('#search-toggle i');
	var $searchbar  = $('#search-bar');
	var $searchfield = $('#search-text');
	
	$('#search-toggle').on('click', function(e){
		
		if(!$searchbar.is(":visible")) { 
			// if invisible we switch the icon to appear collapsable
			$searchlink.removeClass('fas-search').addClass('fas-search-minus');
		} else {
			// if visible we switch the icon to appear as a toggle
			$searchlink.removeClass('fas-search-minus').addClass('fas-search');
		}
	
		$searchbar.slideToggle(250, function(){
			// callback after search bar animation
			$searchfield.focus();
		});
		
	});
	
	$('#searchform').submit(function(e){
		e.preventDefault(); // stop form submission
	});	
	
	$(document).on('facetwp-loaded', function() {
        if (FWP.loaded) {
            $('html, body').animate({
                scrollTop: $('.facetwp-template').offset().top
            }, 500);
        }
    });
			
});