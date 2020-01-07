<?php
/**
 * Front Page Structure
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.com
 * @license		GNU General Public License 2.0+
 */
namespace AmericanPromise\AmericanPromiseTheme;


// Force full-width-content layout setting in Genesis
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove Site Inner Markup for custom homepage
add_filter( 'genesis_markup_site-inner', '__return_null' );
add_filter( 'genesis_markup_content-sidebar-wrap_output', '__return_false' );
add_filter( 'genesis_markup_content', '__return_null' );


// remove Genesis default loop
remove_action( "genesis_loop", "genesis_do_loop" );


// add a custom loop
add_action( "genesis_loop",__NAMESPACE__  . "\custom_front_page_loop" );

/**
 * Creates new front page content
 *
 * @since 1.0.0
 *
 * @return void
 */
function custom_front_page_loop () {
	custom_header();
	problem_solution_section();
    donate_section();
	blog_section();
	events_section();
};

/**
 * Front Page Header Content
 *
 * @since 1.0.0
 *
 * @return void
 */

function custom_header() {
	?>
	<div class="front-header__background">
		<div class="container__header">
			<div class="header-flex__container">
				<h1 class="front-header__title">Imagine a Government Run by People, Not&nbsp;Money</h1>
				<div class="front-header-button__container">
					<form action="<?php echo esc_url(site_url('/take-action/sign-up-to-learn-more/')); ?>"><button class= "front-header__button">Sign Up for Our Newsletter</button></form>
				</div>
			</div>
		</div>
	</div>
	<?php
};

/**
 * Problem/Solution Content
 *
 * @since 1.0.0
 *
 * @return void
 */
function problem_solution_section(){
	?>
	<div class="container container__problem-solution">
		<div class="first one-half problem__section">
			<h1>The Problem</h1>
			<p>The legally granted right to unchecked political spending by corporations, unions, special interest groups, and wealthy individuals is silencing the voices of citizens and corrupting our ability to freely and fairly elect a representative government of, by, and&nbsp;for&nbsp;the&nbsp;people. </p>
			<form action="<?php echo esc_url(site_url('/who-we-are/faq/')); ?>"><button class="small-button--purple">Read More</button></form>
		</div>
		<div class="one-half solution__section">
			<h1>The Solution</h1>
			<p>The goal of American Promise is to organize Americans to win the 28th Amendment to the Constitution to restore American democracy in which We the People—not big money, not corporations, not unions, not&nbsp;special&nbsp;interests—govern&nbsp;ourselves.</p>
			<form action="<?php echo esc_url(site_url('/who-we-are/about-american-promise/#solution')); ?>"><button class="small-button--purple">Read More</button></form>
		</div>
	</div>
	<?php
};

/**
 * Join Banner Content
 *
 * @since 1.0.0
 *
 * @return void
 */
function join_list_section() {
	?>
	<div class="front-join__background">
		<div class="container front-join__container">
			<i class="fa fa-envelope" id="front-join__icon" aria-hidden="true"></i>
			<h1>Subscribe to Our Newsletter</h1>
			<p>Tired of bad news, political divisiveness, and unsolved problems? Sign up to learn more about the growing movement towards the solution: winning the 28th Amendment so that people—not big money, not corporations, not unions, not special&nbsp;interests—govern&nbsp;America!</p>
			<!-- Begin Mailchimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="https://americanpromise.us19.list-manage.com/subscribe/post?u=7df407720bf61a8c8416bb9e7&amp;id=f12c7850d0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    					<div id="mc_embed_signup_scroll">
									<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"  placeholder="Your Email" required>
    							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7df407720bf61a8c8416bb9e7_f12c7850d0" tabindex="-1" value=""></div>
    							<div class="clear" style="display: inline-block;"><input style="padding-right: 40px;padding-left: 40px;" type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    					</div>
						</form>
					</div>
<!--End mc_embed_signup-->
		</div>
	</div>
	<?php
};

/**
 * Blog Section
 *
 * @since 1.0.0
 *
 * @return void
 */
 function blog_section() {
 ?>
 	<div class="container narrow-section__container">
 		<h1 style="margin-top: 40px;">Promising Stories</h1>
		<div class="front__pagination-buttons">
			<i id="prev" class="fa fa-chevron-circle-left pagination-arrow"></i><i id="next" class="fa fa-chevron-circle-right pagination-arrow"></i>
		</div>
		<div class="narrow-section__cards">
			<?php
			$homepagePosts = new \WP_Query(array(
				'posts_per_page' => 8
			));

			// init counter variables
			$blog_counter = 0;
			$row_counter = 0;

			while ($homepagePosts->have_posts()) {
                    $homepagePosts->the_post();

				//Check for if it is the first in the row
				if ($blog_counter == 0 || $blog_counter == 3 || $blog_counter == 6){
					?>
					<div id= "<?php echo $row_counter ?>" class="post__row"> <?php
				}

				?><div class="post__card flex-col">
				<div class="thumbnail__container"><?php

				// Check for thumbnail
				if (has_post_thumbnail()){
						?>
							<img class="post-thumbnail" alt="post-thumbnail" src="<?php the_post_thumbnail_url('medium'); ?>"/>
						<?php
				}else{
						?>
							<img class="post-thumbnail" alt="default-thumbnail" src="<?php echo get_theme_file_uri('/assets/images/APLogoColorOptimized.jpg') ?>"/>
						<?php
				}?>
				</div>
					<h3><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>&nbsp;<span class="font-blog-post__date">|&nbsp;<?php echo get_the_date('F j, Y'); ?></span></h3>
				</div> <?php

				// Check if this is the end to post the 9th card
				if ($blog_counter == 7){
				?>	<div class="post__card flex-col">
						<div class="thumbnail__container" style="overflow: auto;">
							<h3 class="view-all"><a href="<?php echo esc_url(site_url('/promising-stories/')); ?>">View All Stories</a></h3>
						</div>
					</div> <?php
				}

				// Close the row div if its the last in its row
				if ($blog_counter == 2 || $blog_counter == 5 || $blog_counter == 7){
					?>
					</div>
					<?php
					$row_counter += 1;
				}
				$blog_counter += 1;
			} ?>
			</div>
	</div>
 <?php
};


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

function donate_section(){
	?>
	<div class="donate__flex-grid">
		<div class="donate-col donate_image__container"><img  alt="donate" class="donate__image" src="https://res.cloudinary.com/dfzj6lgdn/image/upload/c_scale,w_1000/v1556215301/DonateToOurCauseImage.jpg" /></div>
		<div class="donate-col">
			<div class="donate-flex-half">
				<div>
					<h1>Donate to the Cause of Our Time</h1>
					<p style="padding:10px;">Your support directly impacts how fast We the People can take back control of our country.</p>
					<form action="<?php echo esc_url(site_url('/donate')); ?>"><button id="donate-button">Donate</button></form>
				</div>
			</div>
		</div>
	</div>
	<?php
};

genesis();
