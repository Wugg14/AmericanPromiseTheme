jQuery(document).on('resize, ready', function() {
	// Add class if screen size equals
	var hasShrunk = false;
	var $window = jQuery(window);
	function resize() {

    if ($window.width() < 1205) {
		hasShrunk = true;
		jQuery('#card-3, #card-5').addClass('first');
		jQuery('#card-4').removeClass('first');
		jQuery('.card-container').each(function (){
			jQuery(this).removeClass('one-third');
			jQuery(this).addClass('one-half');
		});
    }
		if (($window.width() > 1205) && (hasShrunk = true)) {
			hasShrunk = false;
			jQuery('#card-3, #card-5').removeClass('first');
			jQuery('#card-4').addClass('first');
			jQuery('.reformat-me').each(function (){
				jQuery(this).removeClass('one-half');
				jQuery(this).addClass('one-third');
			});
		}
  }
  $window.resize(resize).trigger('resize');
});
