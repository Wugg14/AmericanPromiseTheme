jQuery(document).ready( function () {
	jQuery('.hide-me').hide();
})

jQuery('.image-card').hover(function(){
	jQuery(this).find(".hide-me").slideToggle(300);
})
