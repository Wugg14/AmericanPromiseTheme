<?php
/**
 * Template Name: Blog Home Copy
 * Description: Copy of index.php
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
    <div class="internal-custom__h1">
        <h1>Featured Stories</h1>
    </div>


    <div class="first one-third">
        <div class="index-page__card slide-top">
            <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2020/01/CU-anniversary-meme-keschl.png" /></div>
            <header class="index-page__card__header">
                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/cu-anniversary/" target="_blank" rel="noopener noreferrer">Citizen's United 10th Anniversary</a></h1>
            </header>
            <div class="index-page__blog-posts">
                In the decade since the 2010 Citizens United Supreme Court decision, Americans have seen its devastating effects: Election spending by the wealthiest individuals and untraceable dark money groups has skyrocketed, faith in our representative democracy is historically low, and legislative outcomes don’t represent the wishes of Americans, but rather serve the interests of the wealthy elite. <a class="nu gray" href="https://www.americanpromise.net/cu-anniversary/">Read more</a>
            </div>
        </div>
    </div>

    <div class="one-third">
        <div class="index-page__card slide-top">
            <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2020/01/history-of-people-power-banner.png" /></div>
            <header class="index-page__card__header">
                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/history-of-people-power/" target="_blank" rel="noopener noreferrer">A History of People Power</a></h1>
            </header>
            <div class="index-page__blog-posts">
                Throughout our nation’s history, citizen leaders have coalesced around reform movements that expand our fundamental rights to broader coalitions of Americans and improve our democratic self-governance—often through the amendment process.  <a class="nu gray" href="https://www.americanpromise.net/history-of-people-power/">Read more</a>
            </div>
        </div>
    </div>
    <div class="one-third">
        <div class="index-page__card slide-top">
            <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2018/12/banner-our-goal-1024x307.jpg" /></div>
            <header class="index-page__card__header">
                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/blog/2019/08/21/7-critical-democracy-reforms-which-are-most-important-to-you/" target="_blank" rel="noopener noreferrer">7 Critical Democracy Reforms: Which Are Most Important to You?</a></h1>
            </header>
            <div class="index-page__blog-posts">
                There are several election reforms at the core of the nascent democracy movement growing in the United States, and the prospect that we need to pass constitutional amendments to fix some of the structural issues is gaining traction.  <a class="nu gray" href="https://www.americanpromise.net/blog/2019/08/21/7-critical-democracy-reforms-which-are-most-important-to-you/">Read more</a>
            </div>
        </div>
    </div>
    <hr />
    <div class="internal-custom__h1" style="clear:both;">
        <h1>Most Recent Stories:</h1>
    </div>

    <?php
    $postCounter = 0;
    $theposts = new \WP_Query(array(
        'posts_per_page' => 8
    ));
while ($theposts->have_posts()) {
    $theposts->the_post();
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
