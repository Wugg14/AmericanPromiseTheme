<?php
/**
 * Popup HTML markup structure
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.1
 * @author		MarkSteininger
 * @link		marksteininger.com
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

add_action( 'genesis_before_header', __NAMESPACE__ . '\signup_popup' );


/**
 * Structure for Sign Up Popup
 *
 * @since 1.0.1
 *
 * @return void
 */
function signup_popup() {
    $popupfield = get_field("turn_off_popup");
	if(!is_user_logged_in() && !$popupfield) {
  ?>
  <div class="email-popup-con">
    <div class="email-popup-inner-con">
      <div class="email-popup-img-con darkened-background">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/DonateToOurCauseImage-optimized.png" alt="Email Subscribe Image">
            <div class="pop-up__close">
            	<i class="fa fa-window-close close-popup" aria-hidden="true"></i>
            </div>
            <div class="message-overlay-con">
                <strong>Sign here to tell Congress:</strong> Take a break from fundraising and listen to the people. Pass the 28th Amendment NOW to end corrupt pay-to-play politics and give EVERY American a voice.
            </div>
        </div>
        <?php echo do_shortcode('[gravityform id="26" title="false" description="false" ajax="true"]'); ?>
       </div>
  </div>
  <?php
	}
}

/**
 * Structure for Giveaway Popup
 *
 * @since 1.0.1
 *
 * @return void
 */
function giveaway_popup(){
	if(is_page('pop-up-test-page')){
  ?>
  <div class="email-popup-con" style="display:block;">
    <div class="email-popup-inner-con">
      <div class="email-popup-img-con">
        <img src="https://www.americanpromise.net/wp-content/uploads/2019/03/AP_STG_page.jpg" alt="Email Subscribe Image">
            <div class="pop-up__close">
            	<i class="fa fa-window-close close-popup" aria-hidden="true"></i>
            </div>
        </div>
        <?php echo do_shortcode('[gravityform id="8" title="false" description="false" ajax="true"]'); ?>
       </div>
  </div>
  <?php
 }
}
