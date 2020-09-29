jQuery('.faq-q-header').click(function(){
    jQuery(this).next().toggle();

    if(jQuery(this).children().hasClass('fa-chevron-right')){
        jQuery(this).children().removeClass('fa-chevron-right').addClass('fa-chevron-down')
    } else {
        jQuery(this).children().removeClass('fa-chevron-down').addClass('fa-chevron-right')
    }

});