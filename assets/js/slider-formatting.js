jQuery(document).ready( function () {
	jQuery(".attachment-full").each(function (){
		var slide__caption = jQuery(this).next()
		jQuery(this).before( jQuery( slide__caption ) )
		jQuery(slide__caption).css({
			"font-size" : "2.7rem",
			"padding-bottom" : "20px"
		});
		jQuery("#bullets").css({
			"font-size" : "2rem"
		});
		console.log('changed bullet css')
	});
});
