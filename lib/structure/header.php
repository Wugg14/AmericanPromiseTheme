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

add_action( 'genesis_after_header' ,  __NAMESPACE__ . '\bap_subheader');

add_action( 'genesis_after_header' ,  __NAMESPACE__ . '\featured_image_header');



/**
 * Adds Featured Image Title Banner
 *
 * @since 1.0.0
 *
 * @return void
 */
function featured_image_header() {
    if (!get_field('remove_banner_entirely')){
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
            if (!is_page('donate') && !is_author() && !is_front_page() && !is_home() && !is_404() && !tribe_is_month() && !tribe_is_day() && !(tribe_is_past() || tribe_is_upcoming() && !is_tax())){
                remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
                if(get_field('no_banner_header')){
                    ?><div class="featured-page-image--no-image"></div><?php
                } else {
                    ?><div class="featured-page-image--no-image">
                    <h1><?php the_title(); ?></h1>
                    </div><?php
                }
            }
            if(is_page('donate')){
                remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
                remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
            }
        }

    }
};
/**
 * Checks to see if a page is a child page of the given ID
 *
 * @since 1.0.2
 *
 * @return void
 */
function is_child_page($page = NULL){
    global $post;
    if ($page == NULL){
        $p = get_post($post->ID);
        if ($p->post_parent  > 0 ){
            return true;
        }else{
            return false;
        }
    }
    $args = array( 'child_of' => (int)$page);
    $pages = get_pages($args);
    foreach ($pages as $p){
        if ($p->ID == $post->ID){
            return true;
            break;
        }
    }
    return false;
}

/**
 * Adds the BAP subheader to itself and child pages
 *
 * @since 1.0.2
 *
 * @return void
 */
function bap_subheader(){
    if(is_page(306)|| is_child_page(306)) {
        ?>
        <style>
            @media only screen and (min-width: 1020px) {
                .featured-page-image--no-image {
                    display: none;
                }
            }
        </style>
        <div class="bap-sub-header__container">
            <div class="bap-sub-header_left-side">
                <h1 class="bap-sub-header__h1"><?php the_title() ?></h1>
                <hr/>
                <div class="bap-sub-header__navigation">
                    <div>
                        <a href="https://www.americanpromise.net/pay-to-play-is-a-losing-proposition-for-business-society/"
                           class="subhead_l1">The Business Case</a>
                    </div>
                    <div>
                        <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/statement-of-principle/"
                           class="subhead_l1 dropdown">What We Believe <i class="fa fa-angle-down fa-lg"></i></a>
                        <div class="dropdown-content">
                            <a target="_Blank"
                               href="https://www.americanpromise.net/wp-content/uploads/2019/04/BAP_SoP_v1.5_final.pdf">Statement
                                of Principle</a>
                            <a href="https://www.americanpromise.net/bap-signers-of-the-statement-of-principle/">See the
                                Signers</a>
                            <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/statement-of-principle/#believe">Sign
                                the Statement</a>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/bap-join-us/"
                           class="subhead_l1 dropdown">Take Action <i class="fa fa-angle-down fa-lg"></i></a>
                        <div class="dropdown-content">
                            <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/become-a-member-of-bap/">Become
                                a Member</a>
                            <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/statement-of-principle/#believe">Sign
                                the Statement</a>
                            <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/share/">Sign
                                up to learn more</a>
                            <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/bap-join-us/make-a-contribution/">Make a Contribution</a>
                        </div>
                    </div>
                    <div>
                        <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/become-a-member-of-bap/"
                           class="subhead_l1 membership-btn">Become a Member</a>
                    </div>
                </div>
            </div>

            <div>
                <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/">
                    <img src="https://www.americanpromise.net/wp-content/uploads/2019/03/BfAP-logo.png" width="300px"/>
                </a>
            </div>
        </div>
        <?php
        remove_action('genesis_entry_header', 'genesis_do_post_title');
    }
}






