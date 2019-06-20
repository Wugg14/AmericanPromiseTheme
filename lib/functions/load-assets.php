<?php
/**
 * Asset loader handler.
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.me
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

/*
 * Manage loading of theme styles
 */
add_action( 'after_setup_theme', __NAMESPACE__ . '\child_load_stylesheet' );

function child_load_stylesheet() {

	// First, remove the stylesheet
	remove_action( 'genesis_meta', 'genesis_load_stylesheet' );

	// Enqueue the new stylesheet at a later priority to trump WooCommerce
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\child_enqueue_main_stylesheet', 15 );
}

function child_enqueue_main_stylesheet() {
	$stylesheet = get_stylesheet_directory() . '/style.css';
	$cachebust = ( file_exists($stylesheet) ? filemtime($stylesheet) : mt_rand() );
	$version = defined( 'CHILD_THEME_VERSION' ) && CHILD_THEME_VERSION ? CHILD_THEME_VERSION : PARENT_THEME_VERSION;
	$handle  = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? sanitize_title_with_dashes( CHILD_THEME_NAME ) : 'child-theme';
	// Serve minified stylesheet when SCRIPT_DEBUG or WP_DEBUG is false
	if ( SCRIPT_DEBUG == true || WP_DEBUG == true ) {
		wp_enqueue_style( $handle, get_stylesheet_directory_uri() . '/style.css', false, $cachebust );
	}
	else {
		wp_enqueue_style( $handle, get_stylesheet_directory_uri() . '/style.min.css', false, $version );
	}

}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue Scripts and Styles.
 *
 * @since 1.0.2
 *
 * @return void
 */
function enqueue_assets() {
	//Enqueue Google Fonts
	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts', '//fonts.googleapis.com/css?family=Lato', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );
	//Enqueue JS Responsive Menu
	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-responsive-menu', CHILD_URL . '/assets/js/responsive-menu.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	//Enqueue Live Search
	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-search', CHILD_URL . '/assets/js/search.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	//Enqueue Cookie Scripts
	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-JScookie', CHILD_URL . '/assets/js/jquery.cookie.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-popup', CHILD_URL . '/assets/js/popupBox-script.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	// Page specific assets
	if(is_page()){ //Check if we are viewing a page
		global $wp_query;
		$template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
		//Enqueue jQuery Masontry on the Council Page
		if($template_name == 'ap-advisory-council.php' || $template_name == 'bap-national-page.php'){
			wp_enqueue_script('jquery-masonry');
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-masonry-script', CHILD_URL . '/assets/js/masonry-script.js', array(), false, true );
		}
		if(is_page('pledge-campaign')){
			wp_enqueue_style( CHILD_TEXT_DOMAIN . '-dataTablesStyles', '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css', array(), CHILD_THEME_VERSION );
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-dataTablesJS', '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js', array('jquery'), false, true );
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-dataTablesScript', CHILD_URL . '/assets/js/dataTables-script.js', array('jquery'), false, true );
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-pledgeCampaignScript', CHILD_URL . '/assets/js/pledgeCampaign-script.js', array('jquery'), false, true );
		}
		if(is_page('join-a-program')){
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-toggleImageBoxScript', CHILD_URL . '/assets/js/toggleImageBox-script.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-programBoxResizeScript', CHILD_URL . '/assets/js/programImageBoxResize-script.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
		}
		if(is_page('business-for-american-promise')){
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-toggleImageBoxScript', CHILD_URL . '/assets/js/toggleImageBox-script.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
            wp_enqueue_script( CHILD_TEXT_DOMAIN . '-signerImagesLinkScript', CHILD_URL . '/assets/js/signerImagesLink-script.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
		}
		if(is_page('nh_pledges') || is_page('bap-signers-of-the-statement-of-principle')){
			wp_enqueue_style( CHILD_TEXT_DOMAIN . '-dataTablesStyles', '//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css', array(), CHILD_THEME_VERSION );
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-dataTablesJS', '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js', array('jquery'), false, true );
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-dataTablesScript', CHILD_URL . '/assets/js/dataTables-script.js', array('jquery'), false, true );
		}
		if(is_front_page()){
			wp_enqueue_script('jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'), '1.12.1');
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-frontPageHiddenContentScript', CHILD_URL . '/assets/js/frontPageHiddenContent.js', array( 'jquery', 'jquery-ui-core' ), CHILD_THEME_VERSION, true );
		}
		if(is_page('resources')){
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-resourceFormScript', CHILD_URL . '/assets/js/resourceForms-script.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
		}
		if(is_page('building-a-national-network')){
			wp_enqueue_script( CHILD_TEXT_DOMAIN . '-mapScript', CHILD_URL . '/assets/js/map-jquery.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
		}
	};
	$localized_script_args = array(
		'mainMenu' => __( 'Menu', CHILD_TEXT_DOMAIN ),
		'subMenu'  => __( 'Menu', CHILD_TEXT_DOMAIN ),
	);
	wp_localize_script( CHILD_TEXT_DOMAIN . '-responsive-menu', 'developersL10n', $localized_script_args );
	wp_localize_script(CHILD_TEXT_DOMAIN . '-search', 'amproData',array(
		'root_url' => get_site_url()
	));
}
