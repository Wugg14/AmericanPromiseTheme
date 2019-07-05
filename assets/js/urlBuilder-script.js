jQuery(document).ready( function () {
    jQuery('#results').hide();

    jQuery('#build').on('click',function(){
        jQuery('#results').show();

        let url = jQuery('#url').val();
        let source =  jQuery('#source').val();
        let bucket = jQuery('#bucket').val();
        let audience = jQuery('#audience').val();
        let target = jQuery('#target').val();
        if (target === '') {
            target = 'null';
        }
        let partner = jQuery('#partner').val();
        if (partner === '') {
            partner = 'null';
        }
        let descriptor = jQuery('#descriptor').val();
        let date = jQuery('#date').val().toString();

        let campaign = source + '-' + bucket + '-' + audience + '-' + target + '-' + partner + '-' + descriptor + '-' + date;

        if (url.slice(-1) != '/'){
            url += '/';
        }

        let results = url + '?utm_source=' + source + '&utm_campaign=' + campaign + '&apchannel=' + campaign;

        jQuery('#newurl').val(results);
    })
});

