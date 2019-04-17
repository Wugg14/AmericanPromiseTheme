<?php
/**
 * Description: Functions that format specified pages
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.me
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

//Remove wordpresses auto <p> tags for pages that have some sesnsitive code in the editor
remove_filter('the_content','wpautop');
add_filter('the_content', __NAMESPACE__ . '\p_formatting');

/**
 * Check if the post is a specific ID, in order to apply the wpautop() function selectively
 *
 * @since 1.0.0
 *
 * @param $content variable of post content
 *
 * @return $content that has had the apautop() function applied if it is not the specified ID.
 */
function p_formatting($content){
	if( in_array(get_the_ID(), array('306','208','303', '102'),true)){
		return $content;//no autop
	}else{
		return wpautop($content);
	}
};


add_action( 'genesis_after_header' ,  __NAMESPACE__ . '\navigation_bar_spacer');

/**
 * Create A Spacer for the Navigation Bar to prevent overlap, adds extra space on
 * Calendar and 404 due to lack of banner title.
 *
 * @since 1.0.0
 *
 * @return void
 */

 function navigation_bar_spacer() {
	 if (is_404() || (get_post_type() == 'tribe_events' && !is_singular( 'tribe_events' ) )){
		 ?>
			 <br/>
		 <?php
	 }
	?>
		<div class="navigation-bar__spacer"></div>
	<?php
 }

add_action( 'genesis_entry_footer' ,  __NAMESPACE__ . '\blog_post_footer');

/**
 * Adds signup image to bottom of blog posts
 *
 * @since 1.0.0
 */
function blog_post_footer() {
	if ( is_singular('post') ) {
		?>
			<a href="<?php echo esc_url(site_url('/take-action/sign-up-to-learn-more/')); ?>"><img class="post-footer__image"src="https://americanpromise.net/wp-content/uploads/2019/01/apsignup.jpg"></a>
		<?php
	}
}
