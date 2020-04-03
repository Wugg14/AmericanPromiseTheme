<?php

/**
 * Template Name: State Page Sidebar
 * Description: Custom page template for individual state pages
 */

namespace AmericanPromise\AmericanPromiseTheme;


/**
 * State Side Bar Wrapper
 *
 * @since 1.0.5
 *
 * @return void
 */
add_action( 'genesis_before_entry', __NAMESPACE__ . '\before_content_wrap', 7 );
function before_content_wrap() {
    echo '<div class="first two-thirds">';
}

/**
 * State Side Bar End Wrapper and Side Bar Content
 *
 * @since 1.0.5
 *
 * @return void
 */
add_action( 'genesis_after_entry', __NAMESPACE__ . '\after_content_wrap' );
function after_content_wrap() {
    ?>
    </div>
    <div class="one-third state-page__sidebar">
        <h2>The Problem</h2>
        <p>Unlimited political spending by corporations, unions, special interest groups, and wealthy individuals is silencing the voices of average citizens and destroying our ability to create an America that works for its&nbsp;people.</p>
        <h2>The Solution</h2>
        <p>You! American Promise is empowering Americans like you, in all 50 states, to raise their voices and act together to win the 28th Amendment to the Constitution to save American democracy from the grip of Big Money and create a strong foundation for the future of our&nbsp;country.</p>
    </div>

    <?php
};

// Adds the Council Cards after the entry
add_action( 'genesis_after_entry' , __NAMESPACE__ . '\state_blog_posts' );


/**
 * State Blog posts
 *
 * @since 1.0.5
 *
 * @return void
 */
function state_blog_posts(){
    global $post;
    $page_slug = $post->post_name;
    $relatedPostsQueryArgs = array(
        'posts_per_page' => 4,
        'post_type' => 'post',
        'category_name' => $page_slug, //use tag to filter posts
    );

    // remove underspaces from the slug for displaying it as a string
    $length = strlen($page_slug);
    $formattedSlug =  $page_slug;
    for($i=0; $i<$length; $i++){
        if($formattedSlug[$i] == '_'){
            $formattedSlug[$i] = ' ';
        }
    };

    $relatedPosts = new \WP_Query($relatedPostsQueryArgs);
    if($relatedPosts->have_posts()){
        ?>
        <hr/>
        <div class="internal-custom__h1">
            <h1>Latest Stories From <span style="text-transform: capitalize;"><?php echo $formattedSlug ?></span></h1>
        </div>
        <?php
    }
    $postCounter = 0;

    while ($relatedPosts->have_posts()) {
        $relatedPosts->the_post();
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
    };
};

genesis();