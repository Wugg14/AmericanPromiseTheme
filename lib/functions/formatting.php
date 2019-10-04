<?php
/**
 * Description: Functions that format specified pages
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.com
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
        <hr />
        <div class="one-half first">
            <div class="internal-custom__h1"><h1>Sign up for our newsletter to stay up-to-date on news and progress towards the amendment</h1></div>
            <?php echo do_shortcode('[gravityform id="6" title="false" description="false" ajax="true"]'); ?>
        </div>
        <div class="one-half post-footer__box" >
            <h1>Donate to the Cause of Our Time</h1>
            <h3>Your support directly impacts how fast We the People can take back control of our country.</h3>
            <form action="https://www.americanpromise.net/donate">
                <button id="donate-button">Donate</button>
            </form>
        </div>

        <?php
	}
}
