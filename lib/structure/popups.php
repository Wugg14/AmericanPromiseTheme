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

//add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\init_cookie' );
if(is_page('pop-up-test-page')){
	add_action( 'genesis_after_footer', __NAMESPACE__ . '\signup_popup' );
};

/**
 * Enqueues the jQuery Cookie
 *
 * @since 1.0.1
 *
 * @return void
 */
function init_cookie() {
	wp_register_script( 'wd-cookie', get_stylesheet_directory_uri() . '/js/jquery.cookie.js' );
	wp_enqueue_script('wd-cookie');
}


/**
 * Structure for Sign Up Popup
 *
 * @since 1.0.1
 *
 * @return void
 */
function signup_popup() {
  ?>
  <div class="email-popup-con">
    <div class="email-popup-inner-con">
      <div class="email-popup-img-con">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/DonateToOurCauseImage-optimized.png" alt="Email Subscribe Image">
            <div class="pop-up__close">
            <i class="fa fa-window-close close-popup" aria-hidden="true"></i>
            </div>
            <div class="message-overlay-con">
              Sign-Up to Learn More:
            </div>
        </div>
        <?php echo do_shortcode('[gravityform id="1" title="false" description="true" ajax="true"]'); ?>
       </div>
  </div>
  <?php
}
