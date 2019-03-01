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
	// Page specific assets
	if(is_page()){ //Check if we are viewing a page
		global $wp_query;
		$template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
		//Enqueue jQuery Masontry on the Council Page
		if($template_name == 'ap-advisory-council.php'){
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
		}
		if(is_page('business-for-american-promise') || is_page('nh_pledges')){
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
