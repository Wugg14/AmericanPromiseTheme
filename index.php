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
	<div class="featured-page-image" style="background: url(https://res.cloudinary.com/dfzj6lgdn/image/upload/v1581352015/BannerStories_oavczx.jpg);background-position:center;">
		<h1>Promising Stories</h1>
	</div>
	<?php
}

function custom_blog_archive_loop(){
	?>
		<div class="spacer">
            <div class="first two-thirds">
            <div class="internal-custom__h1" style="clear:both;">
                <h1>Most Recent Stories:</h1>
            </div>

				<?php
                query_posts( 'posts_per_page=10' );
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
                </div>
                <div class="one-third" style="padding:10px;background: #d0d0d0">
                                    <div class="internal-custom__h1">
                                        <h1>Special Content Pages:</h1>
                                    </div>
                                    <div>
                                        <div class="index-page__card slide-top" style="background: white;">
                                            <div class="index-page__card__img__container" style="background: white;"><img class="index-page__card__img" src="https://americanpromise.net/wp-content/uploads/2020/09/landing-page-banners-for-web.png" /></div>
                                                <header class="index-page__card__header">
                                                    <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://americanpromise.net/constitution-day-2020/" target="_blank" rel="noopener noreferrer">Keep the Promise: America250</a></h1>
                                                </header>
                                        <div class="index-page__blog-posts">
                                            America is in crisis. The convergence in 2020 of the Covid-19 pandemic and the interrelated crises of economy, racial justice, political violence, climate disasters, and a collapse of trust has laid bare the danger and high stakes we Americans now face. Our constitutional democracy and commitment to the American promise of human liberty, equal citizenship, and effective self-government are in urgent need of repair and renewal. <a target="_blank" href="https://americanpromise.net/constitution-day-2020/">Read More</a></div>
                                    </div>
                                    <div>
                                        <div class="index-page__card slide-top" style="background: white;">
                                            <div class="index-page__card__img__container" style="background: white;"><img class="index-page__card__img" src="https://americanpromise.net/wp-content/uploads/2020/06/landing-page-banners-1.png" /></div>
                                            <header class="index-page__card__header">
                                                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://americanpromise.net/challenge-accepted/" target="_blank" rel="noopener noreferrer">#ChallengeAccepted: The American Promise Amendment + Reinventing Democracy for the 21st Century</a></h1>
                                            </header>
                                        <div class="index-page__blog-posts">
                                            Americans are in a huge moment of possibility for profound reform, and in that we can find hope. In the midst of systemic failures—in our economy, society, government—American citizens are rising to the challenge of reshaping our democracy for the 21st century and beyond. <a target="_blank" href="https://americanpromise.net/challenge-accepted/">Read More</a></div>
                                        </div>
                                    </div>

                                    <div>
                                         <div class="index-page__card slide-top" style="background: white;">
                                             <div class="index-page__card__img__container" style="background: white;"><img class="index-page__card__img" src="https://americanpromise.net/wp-content/uploads/2020/03/landing-page-banners.png" /></div>
                                            <header class="index-page__card__header">
                                                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://americanpromise.net/building-support-in-congress/" target="_blank" rel="noopener noreferrer">Building Support in Congress</a></h1>
                                            </header>
                                            <div class="index-page__blog-posts">
                                                Passing a constitutional amendment is difficult by design: the only way to achieve it is with widespread, cross-partisan support driven by grassroots action. While there are two routes to passing a constitutional amendment, only one method has ever been successfully used—acquiring two-thirds support from both houses of Congress and approval by three-quarters of the states. <a target="_blank" href="https://americanpromise.net/building-support-in-congress/">Read More</a></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="index-page__card slide-top" style="background: white;">
                                            <div class="index-page__card__img__container" style="background: white;"><img class="index-page__card__img" src="https://americanpromise.net/wp-content/uploads/2020/03/51.png" /></div>
                                            <header class="index-page__card__header">
                                                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://americanpromise.net/money-in-politics-and-health-care/" target="_blank" rel="noopener noreferrer">Money in Politics and Health Care</a></h1>
                                            </header>
                                            <div class="index-page__blog-posts">
                                                Big money political spending affects all facets of our society, including our nation’s health-care system. Lobbying from health insurance companies, pharmaceutical companies, and other health care-related interests has resulted in a dysfunctional system that is more expensive and provides less coverage than those in other developed countries. <a class="nu gray" href="https://americanpromise.net/money-in-politics-and-health-care/">Read more</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="index-page__card slide-top" style="background: white;">
                                            <div class="index-page__card__img__container" style="background: white;"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2020/01/history-of-people-power-banner.png" /></div>
                                            <header class="index-page__card__header">
                                                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/history-of-people-power/" target="_blank" rel="noopener noreferrer">A History of People Power</a></h1>
                                            </header>
                                            <div class="index-page__blog-posts">
                                                Throughout our nation’s history, citizen leaders have coalesced around reform movements that expand our fundamental rights to broader coalitions of Americans and improve our democratic self-governance—often through the amendment process.  <a class="nu gray" href="https://www.americanpromise.net/history-of-people-power/">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="index-page__card slide-top" style="background: white;">
                                            <div class="index-page__card__img__container" style="background: white;"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2018/12/banner-our-goal-1024x307.jpg" /></div>
                                            <header class="index-page__card__header">
                                                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/blog/2019/08/21/7-critical-democracy-reforms-which-are-most-important-to-you/" target="_blank" rel="noopener noreferrer">7 Critical Democracy Reforms: Which Are Most Important to You?</a></h1>
                                            </header>
                                            <div class="index-page__blog-posts">
                                                There are several election reforms at the core of the nascent democracy movement growing in the United States, and the prospect that we need to pass constitutional amendments to fix some of the structural issues is gaining traction.  <a class="nu gray" href="https://www.americanpromise.net/blog/2019/08/21/7-critical-democracy-reforms-which-are-most-important-to-you/">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="index-page__card slide-top" style="background: white;">
                            <div class="index-page__card__img__container" style="background: white;"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2020/01/CU-anniversary-meme-keschl.png" /></div>
                            <header class="index-page__card__header">
                                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/cu-anniversary/" target="_blank" rel="noopener noreferrer">Citizen's United 10th Anniversary</a></h1>
                            </header>
                            <div class="index-page__blog-posts">
                                In the decade since the 2010 Citizens United Supreme Court decision, Americans have seen its devastating effects: Election spending by the wealthiest individuals and untraceable dark money groups has skyrocketed, faith in our representative democracy is historically low, and legislative outcomes don’t represent the wishes of Americans, but rather serve the interests of the wealthy elite. <a class="nu gray" href="https://www.americanpromise.net/cu-anniversary/">Read more</a>
                            </div>
                        </div>
                                    </div>
                                </div>
                </div>
				<div style="margin: 20px;" class="first">
				<?php
				echo paginate_links();
				?>
				</div>
		</div>
	<?php
}
 genesis();
