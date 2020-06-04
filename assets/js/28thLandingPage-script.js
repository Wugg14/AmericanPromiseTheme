jQuery('.faq-q-header').click(function(){
    jQuery(this).next().show();
    jQuery(this).children().removeClass('fa-chevron-right').addClass('fa-chevron-down')
});