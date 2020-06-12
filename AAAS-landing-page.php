<?php
/**
 * Template Name: AAAS Landing Page
 * Description: Landing page for AAAS report
 */


namespace AmericanPromise\AmericanPromiseTheme;

add_action( 'genesis_after_entry' , __NAMESPACE__ . '\AAAS_content' );


function AAAS_content(){
    ?>
    <div class="internal-custom__h1">
        <h1>Related Stories:</h1>
    </div>
    <?php
    global $post;
    $relatedPostsQueryArgs = array(
        'posts_per_page' => -1,
        'post_type' => 'post',
        'tag' => 'AAAS' //use tag to filter posts
    );

    $relatedPosts = new \WP_Query($relatedPostsQueryArgs);
    $postCounter = 1;

    ?>
    <div class="first one-half">
        <div class="index-page__card slide-top">
            <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/American_Academy_of_Arts_and_Sciences.png/375px-American_Academy_of_Arts_and_Sciences.png" /></div>
            <header class="index-page__card__header">
                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.amacad.org/news/american-academy-arts-and-sciences-launches-new-commission-focus-practice-democratic" target="_blank" rel="noopener noreferrer">American Academy of Arts & Sciences Launches New Commission to Focus on the Practice of Democratic Citizenship</a></h1>
            </header>
            <div class="index-page__blog-posts">When the American Academy of Arts and Sciences was founded in 1780 – by John Adams, James Bowdoin, John Hancock, and others – it was rooted in a commitment to serving the new republic by creating knowledge that would be of use to a “free, independent, and virtuous people.” More than 230 years later, the importance of an educated and engaged citizenry remains vitally important while the way citizenship is expressed has changed and continues to do so at a rapid pace. <a class="nu gray" target="_Blank" href="https://www.amacad.org/news/american-academy-arts-and-sciences-launches-new-commission-focus-practice-democratic">Read more</a></div>
        </div>
    </div>
    <?php

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