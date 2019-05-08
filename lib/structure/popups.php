<?php
/**
 * Popup HTML markup structure
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.1
 * @author		MarkSteininger
 * @link		marksteininger.me
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

add_action( 'genesis_after_footer', __NAMESPACE__ . '\signup_popup' );


/**
 * Structure for Sign Up Popup
 *
 * @since 1.0.1
 *
 * @return void
 */
function signup_popup() {
	if(is_page('pop-up-test-page')){
  ?>
  <div class="email-popup-con">
    <div class="email-popup-inner-con" style="display:block;">
      <div class="email-popup-img-con">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/DonateToOurCauseImage-optimized.png" alt="Email Subscribe Image">
            <div class="pop-up__close">
            	<i class="fa fa-window-close close-popup" aria-hidden="true"></i>
            </div>
            <div class="message-overlay-con">
              Sign Up for Our Newsletter:
            </div>
        </div>
        <?php echo do_shortcode('[gravityform id="6" title="false" description="false" ajax="true"]'); ?>
       </div>
  </div>
  <?php
 }
}
