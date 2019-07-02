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
    <h2>Channel Source (Facebook, twitter, email, partner):</h2>
    <select name="source" id="source">
        <option value="FBAd">FBAd</option>
        <option value="email">email</option>
        <option value="FBorganic">FBorganic</option>
        <option value="Manually Entering Event Signups">Manually Entering Event Signups</option>
        <option  value="Partner">Partner</option>
    </select>
    <br/>
    <h2>Channel Bucket</h2>
    <select name="bucket" id="bucket">
        <option value="Petition">Petition</option>
        <option value="Event">Event</option>
        <option value="Giveaway">Giveaway</option>
        <option value="Newsletter">Newsletter</option>
        <option value="Donate">Donate</option>
        <option value="NCLC">NCLC</option>
    </select>
    <br/>
    <h2>Channel Descriptor:</h2>
    <input type="text" id="descriptor">
    <br/>
    <h2>Channel Date (MMDDYY):</h2>
    <input type="text" id="date">
    <br/>
    <div style="color:white;background-color:#2f5179;padding:10px; max-width: 50px;margin-top: 20px; margin-bottom: 20px;" id="build">Go</div>
    <div id="results" style="margin-bottom: 20px;">
        <h2>Your URL:</h2>
        <input type="text"  id="newurl" style="width: 600px;">
    </div>
    <?php
}

genesis();