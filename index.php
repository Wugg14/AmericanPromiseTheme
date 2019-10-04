<?php
/**
 * Blog Home Structure
 *
 * @package  	AmericanPromise\AmericanPromiseTheme
 * @since		1.0.0
 * @author		MarkSteininger
 * @link		marksteininger.com
 * @license		GNU General Public License 2.0+
 */

 namespace AmericanPromise\AmericanPromiseTheme;

// remove Genesis default loop
remove_action( "genesis_loop", "genesis_do_loop" );

//remove Genesis Archive Title block
remove_action( 'genesis_before_loop', 'genesis_do_posts_page_heading' );

// add a custom loop
add_action( 'genesis_loop',__NAMESPACE__  . '\custom_archive_loop' );

// add custom archive banner
add_action( 'genesis_after_header' ,  __NAMESPACE__ . '\custom_archive_header');

/**
 * Creates new archive page content
 *
 * @since 1.0.0
 *
 * @return void
 */
function custom_archive_loop() {
	custom_blog_archive_loop();
}

function custom_archive_header() {
	?>
	<div class="featured-page-image" style="background: url(<?php echo get_theme_file_uri('/assets/images/BannerStories.jpg') ?>);">
		<h1>Promising Stories</h1>
	</div>
	<?php
}

function custom_blog_archive_loop(){
	?>
		<div class="spacer">

				<?php
				$postCounter = 0;
				while (have_posts()) {
					the_post();
					if ($postCounter%2 == 0){
						?>
							<div class= "first one-half">
								<div class="index-page__card slide-top">
						<?php
					} else{
						?>
							<div class= "one-half">
								<div class="index-page__card slide-top">
					<?php
					}
          if (has_post_thumbnail()){
            ?>
            <div class="index-page__card__img__container">
              <img class="index-page__card__img" src="<?php the_post_thumbnail_url('medium'); ?>"></img>
            </div>
            <?php
          } else{
            ?>
            <div class="index-page__card__img__container">
              <img class="index-page__card__img" src="<?php echo get_theme_file_uri('/assets/images/APLogoColorOptimized.jpg') ?>"></img>
            </div>
            <?php
          }
					?>
                  <header class="index-page__card__header">
										<h1 style="padding: 10px 10px 0px 10px;"><a style="color:black;text-decoration: none;" href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a><span style="color:#777;">&nbsp;|&nbsp;<?php echo get_the_date('F j, Y'); ?></span></h1>
									</header>
									<div class="index-page__blog-posts">
										<p>
										<?php if (has_excerpt()) {
											echo get_the_excerpt();
										} else {
											echo wp_trim_words(get_the_content(), 48);
										} ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
									</div>
								</div>
							</div>
				<?php
				$postCounter += 1;
				} ?>
				<div style="margin: 20px;" class="first">
				<?php
				echo paginate_links();
				?>
				</div>
		</div>
	<?php
}
 genesis();
