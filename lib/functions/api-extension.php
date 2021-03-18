<?php
/**
 * API Extension for creating calendar events from Form Assembly submissions
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.12
 * @author		MarkSteininger
 * @link		marksteininger.com
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;
use \DateTimeZone;
use \DateTime;

add_action( 'rest_api_init', function () {
    register_rest_route( 'ampro/v1', 'event/', array(
        'methods' => 'POST',
        'callback' => __NAMESPACE__ . '\create_website_event',
        'permission_callback' => function() {
            return current_user_can('edit_posts');
        }
    ) );
} );


/**
 * Parses incoming cURL POST request from Form Assembly form for Calendar event submission
 *
 * @since 1.0.11
 *
 * @param $request cURL
 *
 * @return 'Success!' on completion, for testing with Postman
 */
function create_website_event( $request) {

    $postStatus = 'publish';

    if($request['eventZoomLink'] == '') {
        $postStatus = 'draft';
    }


    $start = $request['eventStartDate'] . ' ' . $request['eventStartTime'];
    $end = $request['eventStartDate'] . ' ' . $request['eventEndTime'];

    $content = $request['eventContent'];


    if($request['eventTimeZone'] == 'Eastern Standard Time'){
        $date = date_create($start, new \DateTimeZone('America/New_York'));
        $endDate = date_create($end, new \DateTimeZone('America/New_York'));
      }
    if($request['eventTimeZone'] == 'Central Standard Time'){
        $date = date_create($start, new DateTimeZone('America/Chicago'));
        $endDate = date_create($end, new DateTimeZone('America/Chicago'));
      }
    if($request['eventTimeZone'] == 'Mountain Standard Time'){
        $date = date_create($start, new DateTimeZone('America/Denver'));
        $endDate = date_create($end, new DateTimeZone('America/Denver'));
    }
    if($request['eventTimeZone'] == 'Mountain Standard Time no DST'){
        $date = date_create($start, new DateTimeZone('America/Phoenix'));
        $endDate = date_create($end, new DateTimeZone('America/Phoenix'));
    }
    if($request['eventTimeZone'] == 'Pacific Standard Time'){
        $date = date_create($start, new DateTimeZone('America/Los_Angeles'));
        $endDate = date_create($end, new DateTimeZone('America/Los_Angeles'));
    }
    if($request['eventTimeZone'] == 'Alaska Standard Time'){
        $date = date_create($start, new DateTimeZone('America/Anchorage'));
        $endDate = date_create($end, new DateTimeZone('America/Anchorage'));
    }
    if($request['eventTimeZone'] == 'Hawaii Standard Time'){
        $date = date_create($start, new DateTimeZone('America/Adak'));
        $endDate = date_create($end, new DateTimeZone('America/Adak'));
    }
    if($request['eventTimeZone'] == 'Hawaii Standard Time no DST'){
        $date = date_create($start, new DateTimeZone('Pacific/Honolulu'));
        $endDate = date_create($end, new DateTimeZone('Pacific/Honolulu'));
    }

    if (!$date) {
        error_log($request['eventTitle']);
        error_log($request['eventTimeZone']);
        error_log($start);
    }
    //Reset the time to eastern time zone
    $date -> setTimezone(new DateTimeZone('America/New_York'));
    $endDate -> setTimezone(new DateTimeZone('America/New_York'));

    $category = get_term_by('slug', $request['eventState'], 'tribe_events_cat');


    tribe_create_event( array(
        'post_content' => $content,
        'post_title' => $request['eventTitle'],
        'EventStartDate' => $date->format('Y-m-d'),
        'EventEndDate' => $endDate->format('Y-m-d'),
        'EventStartHour' => $date->format('h'),
        'EventStartMinute' => $date->format('i'),
        'EventStartMeridian' => $date->format('A'),
        'EventEndHour' => $endDate->format('h'),
        'EventEndMinute' => $endDate->format('i'),
        'EventEndMeridian' => $endDate->format('A'),
        'EventURL' => $request['eventZoomLink'],
        'tax_input' => Array(
            'tribe_events_cat' => Array($category->term_id)),
        'post_status' => $postStatus
    ), True, True);

    return 'Success!';
};
