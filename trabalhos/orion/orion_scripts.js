(function($) {

	var div_ad = "img[alt='www.000webhost.com']";
	
	$(window).on( "load", function() {
		$("#fade").fadeOut( "fast" );
		$(div_ad).delay(1500).fadeOut( "fast" );
    });
	
	$(window).bind('beforeunload', function(event) {
		$("#fade").fadeIn( "fast" );
		$(div_ad).fadeIn( "slow" );
	});
	
})( jQuery );