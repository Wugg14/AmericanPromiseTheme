<?php
/**
 * Footer HTML markup structure
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.com
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

/**
 * Unregister footer callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_footer_callbacks() {
	remove_action( 'genesis_footer', 'genesis_do_footer' );
}

add_action( 'genesis_footer', __NAMESPACE__ . '\ap_custom_footer' );
/**
 * Creates new footer content
 *
 * @since 1.0.0
 *
 * @return void
 */
function ap_custom_footer() {
	?>
	<img class="footer-logo" src="<?php echo get_theme_file_uri('/assets/images/LogoWhiteLetters.png') ?>" alt="American Promise Logo"><p class="values-text"> Human Liberty   |   Equal Citizenship   |   Responsible Self-Government </p>
	<div class="footer-container">
		<hr>
		<br>
		<div class="footer-links">
			<div class="footer__column-1">
				<p><a href="<?php echo esc_url(site_url('/donate')); ?>">Donate</a></p>
				<p><a href="<?php echo esc_url(site_url('/contact-us')); ?>">Contact Us</a></p>
				<p><a href="<?php echo esc_url(site_url('/career-opportunities')); ?>">We Are Hiring</a></p>
				<p><a href="<?php echo esc_url(site_url('/privacy-and-return-policy')); ?>">Return and Privacy Policies</a></p>
			</div>
			<div class="footer__column-2">
				<p><a href="https://www.facebook.com/ouramericanpromise/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></p>
				<p><a href="https://twitter.com/usapromise/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></p>
				<p><a href="https://www.instagram.com/americanpromiseusa/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></p>
				<p><a href="https://www.linkedin.com/company/american-promise/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a></p>
				<a href= http://www.bridgealliance.us target="_blank"><img class="footer-logo-bridge" alt="bridge alliance" src="<?php echo get_theme_file_uri('/assets/images/Bridge_Alliance_Member_Badge.png') ?>"></a>
			</div>
		</div>
		<div class="footer-end-text">
			<p style="line-height: 14px;">Since 1776, the American people have worked to fulfill the American promise: human liberty, equal citizenship, government by the people.   American Promise is a non-profit organization founded in 2016 to win the 28th Amendment that says people - not money - govern America. </p>
			<p><a href="<?php echo esc_url(site_url('/state-nonprofit-disclosures/')); ?>">See our state nonprofit disclosures.</a></p>
			<p>American Promise  ·  33 Bradford Street  ·  Concord, MA 01742  ·  978-254-6275</p>
			<p>© 2018 American Promise. All rights reserved. Built with Genesis and Wordpress</p>
		</div>
	</div>
	<?php
}
