jQuery(document).ready(function() {
    let url = window.location.search;
    if(url.indexOf('&apchannel=') !== -1) {
        channelVal = get_paramater('apchannel')
        Cookies.set('apchannel', channelVal, { expires: 30 });
        if(jQuery('.channel-code')) {
            checkCode = jQuery('.channel-code').text();
            if(checkCode !== channelVal) {
                jQuery('.form-channel-field > .ginput_container > input').val(channelVal);
            }
        }
    }
});

//retrieves the key for any parameter in the url bar
function get_paramater(parameter) {
    let sPageURL = window.location.search.substring(1);
    let sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == parameter){
            return sParameterName[1];
        }
    }
};