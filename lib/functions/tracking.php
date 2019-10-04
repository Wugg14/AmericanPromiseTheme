<?php
/**
 * Description
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.com
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

//Tracking for forms
add_filter( 'gform_field_value_refurl', __NAMESPACE__ . '\populate_referral_url');

add_filter( 'gform_field_value_page_title', __NAMESPACE__ . '\form_title_population' );

add_filter( 'gform_field_value_url', __NAMESPACE__ . '\form_url_population' );

// If the cookie is present, this will fill in the channel hidden field on forms
// This will only happen if the form is visited after a first page reload
// This is because PHP cannot access a cookie until the browser sends it back in a second
// request to the server. This is fine, as if the user is filling out a form
// on their first page load the URL parameter will populate the hidden field.
if(isset($_COOKIE['apchannel'])){
    add_filter('gform_field_value_apchannel', __NAMESPACE__ . '\form_channel_population');
    add_action( 'genesis_after_header' ,  __NAMESPACE__ . '\form_channel_population');
    add_action( 'genesis_before_footer', __NAMESPACE__ . '\check_channel_code_with_js');
}


/**
 * Adds the HTTP referer to the Redirect URL field
 *
 * @since 1.0.0
 *
 * @param $form
 *
 * @return $refurl the referring url
 */
function populate_referral_url( $form ){
    // Grab URL from HTTP Server Var and put it into a variable
    $refurl = $_SERVER['HTTP_REFERER'];

    // Return that value to the form
    return esc_url_raw($refurl);
}


/**
 * Autofills the hidden field of Event Name on all Event RSVP forms for tracking purposes
 *
 * @since 1.0.0
 *
 * @return $title variable containing title of current event page
 */
function form_title_population() {
    //get the title of the current page
	$title = get_the_title();

	//return the value of the title
    return $title;
}

/**
 * Autofills the hidden field of form url
 *
 * @since 1.0.1
 *
 * @return $currentUrl variable containing url of current page
 */
function form_url_population() {
    //get the url of the current page
    $currentUrl = get_the_permalink();

    //return the value of the url
    return $currentUrl;
}

/**
 *Fills in the channel hidden field with the apchannel cookie value
 *
 * @since 1.0.1
 *
 * @return $currentUrl variable containing url of current page
 */
function form_channel_population() {
    $apchannel = $_COOKIE['apchannel'];

    return $apchannel;
}

/**
 * creates hidden div before the footer so that jquery can check to make sure the
 * channel code is correct. For cases when cookie has not yet been reloaded with new
 * channel value.
 *
 * @since 1.0.1
 */
function check_channel_code_with_js() {
    ?>
    <div class="channel-code" style="display:none;"><?php echo $_COOKIE['apchannel'] ?></div>
    <?php
}