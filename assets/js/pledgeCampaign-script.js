jQuery(document).ready( function () {
  jQuery('#table1_wrapper').hide();
  jQuery('#2018').on('click',function(){
    jQuery('#2018').removeClass('not-active-button');
    jQuery('#2018').addClass('active-button');
    jQuery('#2019').removeClass('active-button');
    jQuery('#2019').addClass('not-active-button');
    jQuery('#table2_wrapper').slideUp(400);
    jQuery('#table1_wrapper').slideDown(400);
  });
  jQuery('#2019').on('click',function(){
    jQuery('#2019').removeClass('not-active-button');
    jQuery('#2019').addClass('active-button');
    jQuery('#2018').removeClass('active-button');
    jQuery('#2018').addClass('not-active-button');
    jQuery('#table1_wrapper').slideUp(400);
    jQuery('#table2_wrapper').slideDown(400);
    });
});
