jQuery(document).ready( function () {
    jQuery('#results').hide();

    jQuery('#build').on('click',function(){
        jQuery('#results').show();

        let url = jQuery('#url').val();
        let source =  jQuery('#source').val();
        let name = jQuery('#name').val();
        let date = jQuery('#date').val().toString();

        let campaign = source + '-' + name + '-' + date;

        if (url.slice(-1) != '/'){
            url += '/';
        }

        let results = url + '?utm_source=' + source + '&utm_campaign=' + campaign + '&apchannel=' + campaign;

        console.log(results);
        jQuery('#newurl').val(results);
    })
});

