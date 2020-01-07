<?php
/**
 * Template Name: Stand with Maine
 * Description: Custom page template for Stand with Maine
 */

namespace AmericanPromise\AmericanPromiseTheme;

// Force full-width-content layout setting in Genesis
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove Site Inner Markup for custom homepage
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
    <div class="site-inner">
        <hr/>
        <?php
        the_content();
        ?>
    </div>
    <div style="background-color:#2f5179;">
        <div class="site-inner">
        <h1 style="color: white; font-size:1.5em;" >What Mainers Are Saying:</h1>
        <div class="first one-fourth">
            <figure class="testimonial-card">
                <blockquote>I am encouraged to see the progress of this proposed Constitutional amendment. We need effective and reasonable regulation of money in our political system to protect the integrity of elections and secure the equal right of all Americans to free speech, representation, and participation in self-government.</blockquote>
                <div class="council-member">

                    <img src="https://www.americanpromise.net/wp-content/uploads/2018/12/snowe.jpg" alt="Olympia Snowe" />
                    <h5>Olympia Snowe<span class="noautop">Former Senator, (R-Maine)</span><span class="noautop">Lewiston, ME</span></h5>
                </div></figure>
        </div>

        <div class="one-fourth">
            <figure class="testimonial-card">
                <blockquote>More than 80% of Americans know we need this Constitutional amendment so that all citizens can exercise our free speech rights and participate in self-government on equal terms. Constitutional amendments take persistence and action from Americans who put the country ahead of their political party. Stand With Maine and American Promise are bringing Mainers and all Americans together to make this Constitutional amendment a reality, and all of us will be better for it.</blockquote>
                <div class="council-member">

                    <img src="https://www.americanpromise.net/wp-content/uploads/2019/12/tom-allen.jpg" alt="Tom Allen" />
                    <h5>Tom Allen<span class="noautop">Former Congressman, (D-Maine)</span><span class="noautop">Portland, ME</span></h5>
                </div></figure>
        </div>

            <div class="one-fourth">
                <figure class="testimonial-card">
                    <blockquote>Maine has been a leader in the fight to get money out of politics, but our democracy is literally drowning in corporate and wealthy donations which is impacting policies across the board. While Americans largely agree on raising the minimum wage, addressing climate change, ensuring universal health care and education, protecting women's rights, protecting our environment, and reducing wealth inequality, uber rich donors are demanding politicians represent them and not the people. It's time to unrig the system once and for all, and we can't do that without rebalancing the money in politics problem.</blockquote>
                    <div class="council-member">
                        <img src="https://www.americanpromise.net/wp-content/uploads/2019/12/Headshot-Diane.jpg" alt="Diane Russell" />
                        <h5>Diane Russell<span class="noautop">Former State Representative, (D-Maine 39th)</span><span class="noautop">Brunswick, ME</span></h5>
                    </div></figure>
            </div>

        <div class="one-fourth">
                <figure class="testimonial-card">
                    <blockquote>Stand with Maine, and its partnership with American Promise nationally, offers a pathway to containing the excessive spending in today’s politics. Acting together, across all parties and independents, we can reverse the divisive impact of unlimited money in political campaigns and restore citizen voice in our democracy.</blockquote>
                    <div class="council-member">
                        <img src="https://www.americanpromise.net/wp-content/uploads/2019/12/dick-woodbury.jpg" alt="Dick Woodbury" />
                        <h5>Dick Woodbury<span class="noautop">Former State Senator, (I-Maine 11th)</span><span class="noautop">Brunswick, ME</span></h5>
                    </div></figure>
            </div>
        </div>
    </br>

    </div>
    <div class="site-inner" style="margin-bottom: 30px;margin-top: 30px;">
        <strong style="font-size: 1.5em;">Ready to get involved? Three things you can do right now:</strong>
        <br/>
        <span style="font-size: 24pt;">1 </span><span style="font-size: 12pt;">Get connected with the Portland, ME American Promise Association and join an organized, dynamic group of active citizen leaders already in your community! Contact: Amy Cartmell, <a href="mailto:dansciman@gmail.com">acartmell@kw.com</a> .</span>

        <?php gravity_form( 5, $display_title = true, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true ); ?>
        <br/>

        <strong><span style="font-size: 24pt;">2 </span></strong><span style="font-size: 24pt;"><span style="font-size: 12pt;">Share this page and ask your friends to sign the Stand with Maine petition themselves!</span></span>

        <p style="text-align:center;">
            <a target="_Blank" href="http://twitter.com/share?url=https://www.americanpromise.net/stand-with-maine/&text=Stand%20with%20Maine%20:Sign%20now%20to%20help%20ensure%20that%20We%20the%20People—not%20big%20money,%20not%20corporations,%20not unions,%20not%20special%20interests—govern%20ourselves." class="fa fa-twitter twitter social" rel="noopener noreferrer"></a><a target="_Blank" href="http://www.facebook.com/sharer/sharer.php?u=https://www.americanpromise.net/stand-with-maine/" class="fa fa-facebook facebook social" rel="noopener noreferrer"></a><a target="_Blank" href="http://www.linkedin.com/shareArticle?url=https://www.americanpromise.net/stand-with-maine/&title=Stand%20with%20Maine%20:Sign%20now%20to%20help%20ensure%20that%20We%20the%20People—not%20big%20money,%20not%20corporations,%20not unions,%20not%20special%20interests—govern%20ourselves." class="fa fa-linkedin linkedin social" rel="noopener noreferrer"></a>
        </p>

        <br/>
        <span style="font-size: 24pt;"><strong>3 </strong> <span style="font-size: 12pt;"><a href="https://www.americanpromise.net/donate/" target="_blank" rel="noopener noreferrer">Make a donation</a> now to help ensure that We the People–not big money, not corporations, not unions, not special interests—govern ourselves.
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