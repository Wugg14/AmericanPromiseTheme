jQuery(document).ready(function(){
	jQuery(".active-chapter-pin").hover(function(e) {
		jQuery('#info-box').css('display','block');
		jQuery('#info-box').html(jQuery(this).data('info'));
	});
	jQuery(".active-chapter-pin").mouseleave(function(e) {
		jQuery('#info-box').css('display','none');
	});

});
jQuery(document).mousemove(function(e) {
  jQuery('#info-box').css('top',e.pageY-jQuery('#info-box').height()-30);
  jQuery('#info-box').css('left',e.pageX-(jQuery('#info-box').width())/2);
}).mouseover();
