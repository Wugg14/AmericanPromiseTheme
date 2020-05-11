// Legacy Code from 2018 for handling database swapping
jQuery(document).ready( function () {
    jQuery('#table1_wrapper').hide();
    jQuery('#table2_wrapper').hide();
    jQuery('#pledge-databases').hide();

    jQuery('#databases-tab').on('click',function(){
        jQuery('#databases-tab').removeClass('not-active-button').addClass('active-button');
        jQuery('#graphics-tab').removeClass('active-button').addClass('not-active-button');
        jQuery('.candidate-graphics').slideUp(400);
        jQuery('#pledge-databases').slideDown(400);
    });

    jQuery('#graphics-tab').on('click',function(){
        jQuery('#graphics-tab').removeClass('not-active-button').addClass('active-button');
        jQuery('#databases-tab').removeClass('active-button').addClass('not-active-button');
        jQuery('#pledge-databases').slideUp(400);
        jQuery('.candidate-graphics').slideDown(400);
    });


    jQuery('#pres').on('click',function(){
        jQuery('#pres').removeClass('not-active-button').addClass('active-button');
        jQuery('#2019').removeClass('active-button').addClass('not-active-button');
        jQuery('#2018').removeClass('active-button').addClass('not-active-button');
        jQuery('#table2_wrapper').slideUp(400);
        jQuery('#table1_wrapper').slideUp(400);
        jQuery('#table5_wrapper').slideDown(400);
    });
    jQuery('#2018').on('click',function(){
        jQuery('#2018').removeClass('not-active-button').addClass('active-button');
        jQuery('#2019').removeClass('active-button').addClass('not-active-button');
        jQuery('#pres').removeClass('active-button').addClass('not-active-button');
        jQuery('#table2_wrapper').slideUp(400);
        jQuery('#table5_wrapper').slideUp(400);
        jQuery('#table1_wrapper').slideDown(400);
    });
    jQuery('#2019').on('click',function(){
        jQuery('#2019').removeClass('not-active-button').addClass('active-button');
        jQuery('#2018').removeClass('active-button').addClass('not-active-button');
        jQuery('#pres').removeClass('active-button').addClass('not-active-button');
        jQuery('#table1_wrapper').slideUp(400);
        jQuery('#table5_wrapper').slideUp(400);
        jQuery('#table2_wrapper').slideDown(400);
    });
});