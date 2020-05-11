<?php
/**
 * Template Name: 28th Amendment Landing Page
 * Description: Custom Content for the 28th Amendment Landing Page
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
add_action( "genesis_loop",__NAMESPACE__  . "\custom_28th_amendment_loop" );

/**
 * 28th Amendment Landing Page Template
 *
 * @since 1.0.11
 *
 * @return void
 */
function custom_28th_amendment_loop(){

}

function header_subnav(){}

function what_is_the_28th_section(){}

function why_the_28th_section(){}