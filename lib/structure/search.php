<?php
/**
 * Search Logic
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.com
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

add_action('rest_api_init', __NAMESPACE__ . '\ap_custom_rest');
add_action('rest_api_init', __NAMESPACE__ . '\ap_register_search');

/**
 * Customizes the Wordpress Rest API to include publishDate in Posts
 *
 * @since 1.0.0
 *
 * @return string
 */
function ap_custom_rest(){
	 register_rest_field('post', 'publishDate', array(
		'get_callback' => function(){
			return get_the_date();
		}
	 ));
 }

/**
 * Creates custom API route to reduce amount of JSON being sent
 *
 * @since 1.0.0
 *
 * @return void
 */
function ap_register_search(){
	 register_rest_route('americanpromise/v1','search', array(
		'methods' => \WP_REST_SERVER::READABLE,
		'callback' => __NAMESPACE__ . '\ap_search_results'
	));
}

/**
 * Helper function fetches search results
 *
 * @since 1.0.0
 *
 * @param string $data
 *
 * @return array
 */
function ap_search_results($data){
  $args = array(
  'post_status'=>'publish',
  'post_type'=> array('post', 'page'),
  's' => sanitize_text_field($data['term'])
);
	$main_query = new \WP_Query($args);
	$event_query = tribe_get_events(array(
					'start_date' => date( 'Y-m-d H:i:s' ),
					's' => sanitize_text_field($data['term']),

	));

	 $results = array(
		'pages' => array(),
		'posts' => array(),
		'events' => array()
	 );

	foreach ($event_query as $event){
		array_push($results['events'], array(
				'title' => $event->post_title,
				'permalink' => get_permalink($event->ID),
				'day' => tribe_get_start_date($event->ID, false, 'j'),
				'month' => tribe_get_start_date($event->ID, false, 'M')
			));
	}

	while($main_query ->have_posts()) {
		$main_query -> the_post();

		if(get_post_type() == 'page'){
			array_push($results['pages'], array(
				'title' => get_the_title(),
				'permalink' => get_the_permalink()
			));
		 }
		if(get_post_type() == 'post'){
			array_push($results['posts'], array(
				'title' => get_the_title(),
				'permalink' => get_the_permalink(),
				'postType' => get_post_type(),
				'publishDate' => get_the_date()
			));
		 }
	 }

	 return $results;
 };
