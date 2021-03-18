<?php
/**
 * Template Name: Stand with Maine
 * Description: Custom page template for Stand with Maine
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
add_action( "genesis_loop",__NAMESPACE__  . "\custom_maine_loop" );

/**
 * Stand with Maine Custom Content
 *
 * @since 1.0.10
 *
 * @return void
 */
function custom_maine_loop(){
    ?>
    <style>
        .featured-page-image{
            background-color: #2f5179;
        }
    </style>
    <br/>
    <div class="site-inner">
        <div style="text-align: center;">
            <img alt="Mainers from all walks of life Stand with Maine" src="https://americanpromise.net/wp-content/uploads/2020/05/Mainers-from-all-walks-of-life-from-across-the-state-Stand-with-Maine.-1.png"/>
        </div>
        <div style="text-align: center;">
            <h1>Individuals, please sign the petition if you have not already. <a href="#endorse">Organizations, please endorse Stand with Maine.</a> Then, use the tools on the right to move this campaign forward and protect the right of Mainers– not outside interests.</h1>

        </div>
        <div class="first two-thirds">
            <div style="background-color: #d0d0d0; padding: 5px;">
                <h2 style="color: black; font-size: 1em;"><b>We the people of Maine agree with the Maine Resolution calling for an amendment to the United States Constitution to “reaffirm the power of citizens through their government to regulate the raising and spending of money in elections.”</b></h2>
                We urge all candidates and elected officials to pledge to work together, without regard to party or other political differences, to pass and ratify such a constitutional amendment as soon as possible.

                <?php echo do_shortcode('[formassembly formid= 4866703]'); ?>
            </div>
        </div>
        <div class="one-third">
            <strong>Learn More:</strong>
            <br/>
            <a href="https://americanpromise.net/wp-content/uploads/2020/09/Stand-With-Maine-One-Pager-1.pdf" target="_blank"><button style="margin: 10px;font-size: 1.25em;" class="small-button--purple">Background One-Pager</button></a>
            <br/>
            <a href="https://docs.google.com/document/d/12Hsq4EjKb6lTYuB-ZVHp3iyo5fQLfEV_MatPYpVL7Hs/edit?usp=sharing" target="_blank"><button style="margin: 10px;font-size: 1.25em;" class="small-button--purple">Resources</button></a>
            <br/>
            <a href="https://americanpromise.net/wp-content/uploads/2021/03/2021-Update-SwM-Money-in-Maine-Politics-Fact-Sheet.pdf" target="_blank"><button style="margin: 10px;font-size: 1.5em;" class="small-button--purple">Fact Sheet</button></a>
            <br/>
            <a href="https://docs.google.com/document/d/1QZpjWOBwIkQZdT8OifEixWWK2VqmTTILYuTMhN9-lCs/edit?usp=sharing" target="_blank"><button style="margin: 10px;background-color:#DB1E3B;font-size: 1.6em;" class="small-button--purple">Get Involved</button></a>
        </div>
    </div>
    </div>
    <div class="site-inner">
        <div class="anchor">
            <a name="endorse"></a>
        </div>
        <hr/>
        <?php echo do_shortcode('[formassembly formid= 4892205]'); ?>

        <div style="max-width:1000px; display: flex; justify-content:center">
           <img src="https://americanpromise.net/wp-content/uploads/2020/10/SWM-Endorse-100920.png" alt="Maine Endorsement"/>
        </div>
    </div>
    <br/>
    <div style="background:url(https://americanpromise.net/wp-content/uploads/2018/12/pledge-banner-opaque.jpg);background-position: 50%;background-size:cover;">
        <div class="site-inner">
        <h1 style="color: black; font-size:1.5em;text-align:center;" >What Mainers Are Saying:</h1>
            <div style="max-width:40%;margin-left:auto;margin-right:auto;margin-bottom: 25px;">
                <?php echo do_shortcode('[gallery size="large" media_category="8" sl_autoplay="true" sl_lazyload="anticipated" slick_active="true" sl_autoplayspeed="5000" ids="5783,5784,6139,5786,5787,5788,5789,5790,5791,5792,5793,5860"]') ?>
            </div>
        </div>
    </br>
    </div>
    <?php
}

genesis();
