<?php

/**
 * Template Name: People Power Landing Page
 * Description: Custom page template for the People Power Landing Page
 */

namespace AmericanPromise\AmericanPromiseTheme;

// Force full-width-content layout setting in Genesis
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove Site Inner Markup for custom page
add_filter( 'genesis_markup_site-inner', '__return_null' );
add_filter( 'genesis_markup_content-sidebar-wrap_output', '__return_false' );
add_filter( 'genesis_markup_content', '__return_null' );
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// remove Genesis default loop
remove_action( "genesis_loop", "genesis_do_loop" );


// add a custom loop
add_action( "genesis_loop",__NAMESPACE__  . "\custom_people_power_loop" );

function custom_people_power_loop() {
    ?>
    <div class="site-inner">
        <p>Throughout our nation’s history, citizen leaders have coalesced around reform movements that expand our fundamental rights to broader coalitions of Americans and improve our democratic self-governance—often through the amendment process. Through the passage of amendments, Americans have abolished slavery, expanded access to citizenship, granted voting rights regardless of race or gender, and more.</p>
        <p>Now, it is time once again to pass a constitutional amendment to empower the American people — this time by ending the domination of big money in our political system. Drawing inspiration from generations of reformers before us helps guide and strengthen our movement. Here you will find a historical breakdown of moments when Americans have used our ultimate power to improve our nation, as well as articles that contextualize our fight for an amendment in the broader scope of history.</p>
    </div>
    <div style="background-color:#2f5179;">
        <div class="site-inner" style="padding-top: 30px;">
            <iframe src="https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=11z42ekVgVLrKDAkwFezdzq7HXt6yLZVuBpmIrb7F2Fg&font=Default&lang=en&initial_zoom=2&height=650" width="100%" height="650" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
    </div>

<?php
}

genesis();
