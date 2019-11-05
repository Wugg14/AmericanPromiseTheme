<?php
/**
 * Template Name: NCLC 2019 Review
 * Description: Custom page template for NCLC Review 2019
 */

namespace AmericanPromise\AmericanPromiseTheme;

remove_action("genesis_loop", "genesis_do_loop");
// add a custom loop
add_action("genesis_loop", __NAMESPACE__ . '\nclc_review');

function nclc_review(){
    ?>
    <div class="nclc-review___header">
        <h1>NCLC 2019 in Review</h1>
        <h3><i>It’s On! Gearing up to take our movement to the next level in 2020.</i></h3>
        <p>After a year of major successes, at the 2019 National Citizen Leadership Conference 28th Amendment advocates from across the nation come together to fuel up for our next set of strategic victories throughout 2020. Our work at the NCLC focused on four high-level goals.</p>
    </div>
    <div class="nclc-review__section-1">
        <div class="first one-half"><h1>Cause of Our Time: Inviting more young Americans to the movement</h1></div>
        <div class="one-half nclc-review-sub-header__text-block"><p>The rising generation of young Americans faces so many issues—among them crippling student loan debt, a broken healthcare system, and the mounting consequences of climate change. Young Americans are ready to tackle the underlying cause of these issues: big money in politics. At the NCLC, we launched the Cause of Our Time Statement of Principle, inviting young Americans to sign on to take a stand against big money in politics. </p></div>
        <hr/>
        <div class="nclc-review__button-row">
            <div class="first one-fourth"><a class="nclc-review__button nclc-review__button--white">Cause of Our Time: Article 1</a></div>
            <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Cause of Our Time: Article 2</a></div>
            <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Cause of Our Time: Article 3</a></div>
            <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Content piece w/ Devin & Isabelle</a></div>
        </div>
        <div class="nclc-review__video-row">
            <div class="first one-half"><iframe src="https://www.youtube.com/embed/E2ej7y1A53Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><span class="nclc-review__video-caption"> LOREM IPSUM THIS IS A CAPTION</span></div>
            <div class="one-half"><iframe src="https://www.youtube.com/embed/E2ej7y1A53Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><span class="nclc-review__video-caption"> LOREM IPSUM THIS IS A CAPTION</span></div>
        </div>
    </div>
<?php
};

genesis();
