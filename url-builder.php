<?php
/**
 * Template Name: URL Builder
 * Description: Custom page template for BAP FAQ
 */
namespace AmericanPromise\AmericanPromiseTheme;

remove_action( "genesis_loop", "genesis_do_loop" );
// add a custom loop
add_action( "genesis_loop" , __NAMESPACE__ . '\url_builder' );

/**
 * Structure for the URL builder page
 *
 * @since 1.0.1
 */

function url_builder(){
    ?>

    <h2>Your URL:</h2>
    <input type="text" id="url">
    <br/>
    <h2>Campaign Source (Facebook, newsletter, email):</h2>
    <input type="text" id="source">
    <br/>
    <h2>Campaign Name (newsletter, facebook ad, etc):</h2>
    <input type="text" id="name">
    <br/>
    <h2>Campaign Date (MMDDYY):</h2>
    <input type="text" id="date">
    <br/>
    <div style="color:white;background-color:#2f5179;padding:10px; max-width: 50px;margin: 20px;" id="build">Go</div>
    <br/>
    <div id="results">
        <h2>Your URL:</h2>
        <input type="text"  id="newurl" style="width: 600px;">
    </div>
    <?php
}

genesis();