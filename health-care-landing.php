<?php
/**
 * Template Name: Healthcare Landing Page
 * Description: Healthcare Landing Page
 */


namespace AmericanPromise\AmericanPromiseTheme;

add_action( 'genesis_after_entry' , __NAMESPACE__ . '\healthcare_content' );


function healthcare_content(){
    ?>
    <div class="internal-custom__h1">
        <h1>Related Stories:</h1>
    </div>
    <?php
    global $post;
    $relatedPostsQueryArgs = array(
        'posts_per_page' => -1,
        'post_type' => 'post',
        'tag' => 'Healthcare_Politics' //use tag to filter posts
    );

    $relatedPosts = new \WP_Query($relatedPostsQueryArgs);
    $postCounter = 1;

    ?>
    <div class="first one-half">
        <div class="index-page__card slide-top">
            <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://assets-c3.propublica.org/images/articles/_threeTwo1200w/20200420-PE-staffing-ads-3x2.jpg" /></div>
            <header class="index-page__card__header">
                <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.propublica.org/article/medical-staffing-companies-cut-doctors-pay-while-spending-millions-on-political-ads" target="_blank" rel="noopener noreferrer">From ProPublica - Medical Staffing Companies Cut Doctors’ Pay While Spending Millions on Political Ads</a></h1>
            </header>
            <div class="index-page__blog-posts">Private equity-backed medical staffing companies that have cut doctors’ pay are continuing to spend millions on political ads, according to Federal Communications Commission disclosures. The ads amount to $2.2 million since Health and Human Services Secretary Alex Azar declared a public health emergency on Jan. 31. About $1.2 million has been spent since President Donald Trump’s national emergency declaration on March 13, the disclosures show. <a class="nu gray" target="_Blank" href="https://www.propublica.org/article/medical-staffing-companies-cut-doctors-pay-while-spending-millions-on-political-ads/">Read more</a></div>
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