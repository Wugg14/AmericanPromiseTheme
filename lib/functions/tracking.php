<?php
/**
 * Description
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.me
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

//Tracking for Donate form refurl hidden field
add_filter( 'gform_field_value_refurl', __NAMESPACE__ . '\populate_referral_url');

/**
 * Adds the HTTP referer to the hidden field
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

add_filter( 'gform_field_value_your_parameter', __NAMESPACE__ . '\form_population' );

/**
 * Autofills the hidden field of Event Name on all Event RSVP forms for tracking purposes
 *
 * @since 1.0.0
 *
 * @return $title variable containing title of current event page
 */
function form_population() {
	$title = get_the_title();
  return $title;
}
