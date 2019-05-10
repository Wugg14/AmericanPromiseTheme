<?php

/**
* Template Name: State Page
* Description: Custom page template for individual state pages
*/

namespace AmericanPromise\AmericanPromiseTheme;

// Adds the Council Cards after the entry
add_action( 'genesis_after_entry' , __NAMESPACE__ . '\state_blog_posts' );


/**
 * State Blog posts
 *
 * @since 1.0.1
 *
 * @return void
 */
function state_blog_posts(){
  global $post;
  $page_slug = $post->post_name;
  $relatedPostsQueryArgs = array(
        'posts_per_page' => 4,
        'post_type' => 'post',
        'tag' => $page_slug, //use tag to filter posts
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
