jQuery(document).ready(function() {
  var isMobile = isMobileDevice()
  if(isMobile == false){
    //Prevent's cookie from being given twice
    var signedUp = false;
    // Functionality that controls hiding/showing the email signup lightbox
    // Check to see if cookie is set prior to showing email signup after 5 second delay
    if( Cookies.get('noti') !== 'closed' ) {
      jQuery('.email-popup-con').delay(5000).fadeIn();
    }
    // If user closes lightbox set cookie for 30 days to not show again
    jQuery('.close-popup').click(function() {
      console.log(signedUp)
      if(signedUp == false){
        Cookies.set('noti', 'closed', { expires: 30 });
      };
      jQuery('.email-popup-con').fadeOut();
    });
    // Hides the email submit form 3 seconds after a successful submission and sets 1 year cookie to disable popup
    jQuery(document).bind('gform_confirmation_loaded', function(event, formId){
      if(formId == 1) {
        Cookies.set('noti', 'closed', { expires: 365 });
        signedUp = true;
      }
    });
  }
  else{
    exit;
  }
});

function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};
