<?php
/**
 * Header HTML markup structure
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.me
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

/**
 * Unregister header callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_header_callbacks() {
	remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
	remove_action( 'genesis_header', 'genesis_do_header' );
	remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
}

add_action( 'genesis_after_header' ,  __NAMESPACE__ . '\featured_image_header');

/**
 * Adds Featured Image Title Banner
 *
 * @since 1.0.0
 *
 * @return void
 */
function featured_image_header() {
	$imgURL = get_field("banner_image");
	if (!is_front_page() && $imgURL && !is_home() && !is_404() && !tribe_is_month() && !tribe_is_day() && !(tribe_is_past() || tribe_is_upcoming() && !is_tax())) {
		remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
		if (get_field('no_banner_header')){
			?><div class="featured-page-image" style="height: auto;">
				<img src=<?php echo $imgURL ?>></img>
			</div><?php
		} else {
			?><div class="featured-page-image" style="background: url(<?php echo $imgURL ?>);">
				<h1><?php the_title(); ?></h1>
			</div><?php
		}
	} else {
		if ( !is_front_page() && !is_home() && !is_404() && !tribe_is_month() && !tribe_is_day() && !(tribe_is_past() || tribe_is_upcoming() && !is_tax())){
			remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
			if(get_field('no_banner_header')){
				?><div class="featured-page-image--no-image"></div><?php
			} else {
				?><div class="featured-page-image--no-image">
					<h1><?php the_title(); ?></h1>
				</div><?php
			}
		}
	}
};
