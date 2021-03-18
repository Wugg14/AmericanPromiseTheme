<?php
/**
 * Description
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.com
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

/**
 * Rewrites the URL for event post types if the Zoom hidden fields are present
 *
 * @since 1.0.11
 *
 * @return string $url
 */
function prefix_filter_news_permalink( $url, $post ) {

    // If the custom_link ACF field is set get it's value
    $zoom_meeting_id = get_field( 'sf_campaign_id');
    $SF_meeting_name = get_field ('sf_campaign_name');
    $SF_meeting_name = preg_replace('/\s+/', '%20', $SF_meeting_name);
    $custom_link = $url . '?tfa_122=' . $SF_meeting_name . '&tfa_121=' . $zoom_meeting_id . '#';
    // If the custom_link is set and the post type is news change the URL to the custom_link value
    if ($zoom_meeting_id && 'tribe_events' == get_post_type( $post->ID ) ) {
        $url = $custom_link;
    }
    // Return the value of the URL
    return $url;
}

add_filter( 'post_type_link', __NAMESPACE__ . '\prefix_filter_news_permalink', 10, 2 );
