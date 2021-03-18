<?php
/**
 * Archive HTML markup structure
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.com
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;

/**
 * Unregister archive callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_archive_callbacks() {

};

add_action( 'tribe_events_before_html',  __NAMESPACE__ . '\calendar_view_html');

function calendar_view_html(){
    if (!is_single()){
     ?>
        <p>Attending an event is a great way to connect with and learn from others who are passionate about working together to create a better future for ourselves, each other and our country. We have a great line up of options including national and state-based virtual events and meetings featuring movement leaders, elected officials, authors, academics, and citizens like you who are strengthening the call for the 28th Amendment everyday. Check out the calendar for all events or your <a href="https://americanpromise.net/take-action/see-whats-happening/">state’s page</a> to find an event near you.</p>

        <?php
    }

}