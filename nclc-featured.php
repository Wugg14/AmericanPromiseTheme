<?php

/**
 * Template Name: NCLC 2019 Featured Content Page
 * Description: NCLC branded page for holding featured videos and photos
 */

namespace AmericanPromise\AmericanPromiseTheme;

// Force full-width-content layout setting in Genesis
add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content');

// Remove Breadcrumbs
remove_action('genesis_before_loop', 'genesis_do_breadcrumbs');

// Remove Site Inner Markup for custom homepage
add_filter('genesis_markup_site-inner', '__return_null');
add_filter('genesis_markup_content', '__return_null');

remove_action("genesis_loop", "genesis_do_loop");
// add a custom loop
add_action("genesis_loop", __NAMESPACE__ . '\nclc_features');



function nclc_features(){
    ?>
    <div class="nclc-review___header nclc-review__parallax nclc-review__parallax--purple">
        <div class="nclc-review__container">
            <h1>NCLC 2019</h1>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <?php
    the_content();
}

genesis();
