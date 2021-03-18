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

add_action( 'genesis_before_header', __NAMESPACE__ . '\sign_up_popup' );



/**
 * Structure for Sign Up Popup
 *
 * @since 1.0.1
 *
 * @return void
 */
function sign_up_popup() {
    $popupfield = get_field("turn_off_popup");
    if(!is_user_logged_in() && !$popupfield) {
        ?>
        <div class="email-popup-con">
            <div class="email-popup-inner-con">
                <div class="email-popup-img-con darkened-background">
                    <a href="https://www.americanpromise.net/take-action/sign-up-to-learn-more" target="_blank"><img src="https://americanpromise.net/wp-content/uploads/2020/03/twitter-cartoon-of-the-week-2.png" style="z-index: 1;" alt="Email Subscribe Image"/></a>
                    <div class="pop-up__close">
                        <i class="fa fa-window-close close-popup" aria-hidden="true"></i>
                    </div>
                    <div class="message-overlay-con">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
