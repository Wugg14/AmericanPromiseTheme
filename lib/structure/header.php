<?php
/**
 * Header HTML markup structure
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.com
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

// Add Google Tag Manager code in <head>
add_action( 'wp_head',  __NAMESPACE__ . '\google_tag_manager_head' );
function google_tag_manager_head() { ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PTNKGPZ');</script>
    <!-- End Google Tag Manager -->

<?php }


// Add Google Tag Manager code immediately below opening <body> tag
add_action( 'genesis_before',  __NAMESPACE__ . '\google_tag_manager_body' );
function google_tag_manager_body() { ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTNKGPZ"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<?php }



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
        if (!is_front_page() && $imgURL && !is_home() && !is_404() && !tribe_is_month() && !tribe_is_day() && !(tribe_is_past() || tribe_is_upcoming() && !is_tax() )) {
            remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
            if (get_field('no_banner_header')){
                ?><div class="featured-page-image" style="height: auto;">
                <img src=<?php echo $imgURL ?>></img>
                </div><?php
            } else {
                ?><div class="featured-page-image" style="background: url(<?php echo $imgURL ?>); background-position: 50%;">
                <h1><?php the_title(); ?></h1>
                </div><?php
            }
        } else {
            if (!is_page('donate') && !is_author() && 'landing_page' != get_post_type() && !is_front_page() && !is_home() && !is_404() && !tribe_is_month() && !tribe_is_day() && !(tribe_is_past() || tribe_is_upcoming() && !is_tax())){
                remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
                if(get_field('no_banner_header')){
                    ?><div class="featured-page-image" style="background: url(https://americanpromise.net/wp-content/uploads/2018/12/pledge-banner-opaque.jpg); background-position: 50%;"></div><?php
                } else {
                    ?><div class="featured-page-image" style="background: url(https://americanpromise.net/wp-content/uploads/2018/12/pledge-banner-opaque.jpg); background-position: 50%;">
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







