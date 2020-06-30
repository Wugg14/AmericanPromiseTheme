<?php
/**
 * Template Name: Stand with Maine
 * Description: Custom page template for Stand with Maine
 */

namespace AmericanPromise\AmericanPromiseTheme;

// Force full-width-content layout setting in Genesis
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove Site Inner Markup for custom page
add_filter( 'genesis_markup_site-inner', '__return_null' );
add_filter( 'genesis_markup_content-sidebar-wrap_output', '__return_false' );
add_filter( 'genesis_markup_content', '__return_null' );
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );


// remove Genesis default loop
remove_action( "genesis_loop", "genesis_do_loop" );


// add a custom loop
add_action( "genesis_loop",__NAMESPACE__  . "\custom_maine_loop" );

/**
 * NCLC Review Template
 *
 * @since 1.0.10
 *
 * @return void
 */
function custom_maine_loop(){
    ?>
    <style>
        .featured-page-image{
            background-color: #2f5179;
        }
    </style>
    <br/>
    <div class="site-inner">
        <div style="text-align: center;">
            <img alt="Mainers from all walks of life Stand with Maine" src="https://americanpromise.net/wp-content/uploads/2020/05/Mainers-from-all-walks-of-life-from-across-the-state-Stand-with-Maine.-1.png"/>
        </div>
        <div style="text-align: center;">
            <h1>Please sign the petition if you have not already. Then, use the tools on the right to move this campaign forward and protect the right of Mainers– not outside interests.</h1>
        </div>
        <div class="first two-thirds">
            <div style="background-color: #d0d0d0; padding: 8px;">
                <h2 style="color: black; font-size: 1em;"><b>We the people of Maine agree with the Maine Resolution calling for an amendment to the United States Constitution to “reaffirm the power of citizens through their government to regulate the raising and spending of money in elections.”</b></h2>
                We urge all candidates and elected officials to pledge to work together, without regard to party or other political differences, to pass and ratify such a constitutional amendment as soon as possible.

                <?php gravity_form( 28, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $echo = true ); ?>

            </div>
        </div>
        <div class="one-third">
            <strong>Learn More:</strong>
            <br/>
            <a href="https://drive.google.com/open?id=0B5VZHQJbBX6zcUpXRmN0eW0zSDkzZHZlR0tsMzY2MGVNNFl3" target="_blank"><button style="margin: 10px;font-size: 1.25em;" class="small-button--purple">Background One-Pager</button></a>
            <br/>
            <a href="https://americanpromise.net/wp-content/uploads/2020/05/Stand-with-Maine_-Money-in-Maine-Politics-Fact-Sheet-Final-3.pdf" target="_blank"><button style="margin: 10px;font-size: 1.5em;" class="small-button--purple">Fact Sheet</button></a>
            <br/>
            <a href="https://docs.google.com/document/d/1QZpjWOBwIkQZdT8OifEixWWK2VqmTTILYuTMhN9-lCs/edit?usp=sharing" target="_blank"><button style="margin: 10px;background-color:#DB1E3B;font-size: 1.6em;" class="small-button--purple">Get Involved</button></a>
        </div>
    </div>
    </div>
    <br/>
    <div style="background:url(https://americanpromise.net/wp-content/uploads/2018/12/pledge-banner-opaque.jpg);background-position: 50%;background-size:cover;">
        <div class="site-inner">
        <h1 style="color: black; font-size:1.5em;text-align:center;" >What Mainers Are Saying:</h1>
            <div style="max-width:40%;margin-left:auto;margin-right:auto;margin-bottom: 25px;">
                <?php echo do_shortcode('[gallery size="large" media_category="8" sl_autoplay="true" sl_lazyload="anticipated" slick_active="true" sl_autoplayspeed="5000" ids="5783,5784,6139,5786,5787,5788,5789,5790,5791,5792,5793,5860"]') ?>
            </div>
        </div>
    </br>
    </div>
    <?php
}


function events_section() {
    ?>
    <div class="event-section__background">
        <div class="container narrow-section__container">
            <h1 style="margin-top: 40px;color:white;">Upcoming Citizen Uprising Events</h1>
            <div class="event-cards__row">
                <?php
                $homepageEvents = tribe_get_events(array(
                    'posts_per_page' => 3,
                    'start_date' => date( 'Y-m-d H:i:s' )
                ));
                $event_counter = 0;
                foreach ($homepageEvents as $event) {
                    $start_date_year = tribe_get_start_date($event->ID, false, 'Y');
                    $start_date_day = tribe_get_start_date($event->ID, false, 'j');
                    $start_date_month = tribe_get_start_date($event->ID, false, 'M');



                    ?>
                    <div class="post__card flex-col">
                        <div class="thumbnail__container" style="overflow:auto;"><?php

                            // Check for thumbnail
                            if (has_post_thumbnail($event->ID)){
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $event->ID ), $size = 'medium');
                                $imageURL = $image[0];
                                ?>
                                <img class="post-thumbnail" alt="post-thumbnail" src="<?php echo $imageURL; ?>"/>
                                <?php
                            }else{
                                ?>
                                <img class="post-thumbnail" alt="default-thumbnail" src="<?php echo get_theme_file_uri('/assets/images/APLogoColorOptimized.jpg') ?>"/>
                                <?php
                            }?>

                        </div>
                        <p style="color: #d0d0d0"><?php echo $start_date_month ?> <?php echo $start_date_day ?>, <?php echo $start_date_year ?></p>
                        <h3 style="margin-bottom: 45px;"><a style="color: white;text-decoration: underline;" href="<?php echo esc_url(get_permalink($event->ID)); ?>"><?php echo $event->post_title; ?></a></h3>
                    </div> <?php
                    $event_counter += 1;
                }
                if ($event_counter == 2){
                    ?>
                    <div class="post__card flex-col">
                        <div class="thumbnail__container" style="overflow:auto;">
                            <p class="view-all">No Other Upcoming Events</p>
                        </div>
                    </div>
                    <?php
                } elseif($event_counter == 1){
                    ?>
                    <div class="post__card one-third">
                        <div class="thumbnail__container" style="overflow:auto;">
                            <p class="view-all">No Other Announced Events</p>
                        </div>
                    </div>
                    <div class="post__card one-third">
                        <div class="thumbnail__container" style="overflow:auto;">
                            <p class="view-all">No Other Announced Events</p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <form action="<?php echo esc_url(site_url('/events')); ?>"><button class="events-link-button">American Promise Calendar</button></form>
        </div>
    </div>
    <?php
};

genesis();