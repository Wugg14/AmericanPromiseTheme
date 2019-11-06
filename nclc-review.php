<?php
/**
 * Template Name: NCLC 2019 Review
 * Description: Custom page template for NCLC Review 2019
 */

namespace AmericanPromise\AmericanPromiseTheme;

// Force full-width-content layout setting in Genesis
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Remove Breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

// Remove Site Inner Markup for custom homepage
add_filter( 'genesis_markup_site-inner', '__return_null' );
add_filter( 'genesis_markup_content', '__return_null' );

remove_action("genesis_loop", "genesis_do_loop");
// add a custom loop
add_action("genesis_loop", __NAMESPACE__ . '\nclc_review');

function nclc_review(){
    ?>
    <div class="nclc-review___header nclc-review__parallax nclc-review__parallax--purple">
        <div class="nclc-review__container">
            <h1>NCLC 2019 in Review</h1>
            <h2><i>It’s On! Gearing up to take our movement to the next level in 2020.</i></h2>
            <p class="nclc-review__header__blurb">After a year of major successes, at the 2019 National Citizen Leadership Conference 28th Amendment advocates from across the nation come together to fuel up for our next set of strategic victories throughout 2020. Our work at the NCLC focused on four high-level goals.</p>
        </div>
    </div>
    <div class="nclc-review__section-1">
        <div class="nclc-review__container">
            <div class="first two-thirds"><h1>Cause of Our Time: </h1><h2 style="color: black;">Inviting more young Americans to the movement</h2></div>
            <div class="one-third nclc-review-sub-header__text-block nclc-review-sub-header__text-block--black nclc-review-sub-header__text-block--right"><p>The rising generation of young Americans faces so many issues—among them crippling student loan debt, a broken healthcare system, and the mounting consequences of climate change. Young Americans are ready to tackle the underlying cause of these issues: big money in politics. At the NCLC, we launched the Cause of Our Time Statement of Principle, inviting young Americans to sign on to take a stand against big money in politics. </p></div>
           <div class="nclc-review__photos-container">
                <div class="first one-third">
                    <div class="nclc-review__small-photo-container">
                        <img src="https://www.americanpromise.net/wp-content/uploads/2019/11/image1-1.jpeg"/>
                    </div>
                    <div class="nclc-review__small-photo-container">
                        <img src="https://www.americanpromise.net/wp-content/uploads/2019/11/image1-1.jpeg"/>
                    </div>
                </div>
                <div class="two-thirds">
                    <div class="nclc_review__collage-container--right">
                        <div class="nclc_review__image-container"><img width="100%" src="https://www.americanpromise.net/wp-content/uploads/2019/11/Ellen-Greene-Bush.jpg"></div>
                        <div class="nclc_review__card-container">
                            <div class="nclc_review__quote-card">
                                <p class="nclc_review__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tempus vitae tortor ac tempor. Maecenas egestas odio in nunc aliquam, ac aliquet enim suscipit. Nulla facilisi. Suspendisse consectetur vitae enim nec maximus. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr/>
            <div class="nclc-review__button-row">
                <div class="first one-fourth"><a class="nclc-review__button nclc-review__button--white">Cause of Our Time: Article 1</a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Cause of Our Time: Article 2</a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Cause of Our Time: Article 3</a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Content piece w/ Devin & Isabelle</a></div>
            </div>
            <div class="nclc-review__video-row">
                <div class="first one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/E2ej7y1A53Y" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption"> LOREM IPSUM THIS IS A CAPTION</span>
                </div>
                <div class="one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/E2ej7y1A53Y" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption"> LOREM IPSUM THIS IS A CAPTION</span>
                </div>
            </div>

        </div>
    </div>

    <div class="nclc-review__section-2 nclc-review__parallax nclc-review__parallax--teal">
        <div class="nclc-review__container">
            <div class="first two-thirds"><h1>Citizen Leadership: </h1><h2 class="nclc_review__subheader">Furthering citizen-led action and successes across the nation</h2></div>
            <div class="one-third nclc-review-sub-header__text-block nclc-review-sub-header__text-block--right nclc-review-sub-header__text-block--white"><p>Our grassroots movement is successful when citizen leaders across the nation are empowered to win support among their fellow community members, local elected officials, and state officials. Our citizen leaders have been extremely effective in racking up local victories over the course of the past year, and we are ready to double down on these victories in 2020. </p></div>

            <div class="nclc-review__photos-container">
                <div class="first two-thirds">
                    <div class="nclc_review__collage-container--left">
                        <div class="nclc_review__image-container"><img width="100%" src="https://www.americanpromise.net/wp-content/uploads/2019/11/Ellen-Greene-Bush.jpg"></div>
                        <div class="nclc_review__card-container">
                            <div class="nclc_review__quote-card" style="background-color: #5b2b7c;">
                                <p class="nclc_review__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tempus vitae tortor ac tempor. Maecenas egestas odio in nunc aliquam, ac aliquet enim suscipit. Nulla facilisi. Suspendisse consectetur vitae enim nec maximus. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <div class="nclc-review__small-photo-container">
                        <img src="https://www.americanpromise.net/wp-content/uploads/2019/11/image1-1.jpeg"/>
                    </div>
                    <div class="nclc-review__small-photo-container">
                        <img src="https://www.americanpromise.net/wp-content/uploads/2019/11/image1-1.jpeg"/>
                    </div>
                </div>
            </div>

            <hr/>
            <div class="nclc-review__button-row">
                <div class="first one-fourth"><a class="nclc-review__button nclc-review__button--purple">Citizen Leadership Article 1</a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--purple">Essential Tools for Starting & Succeeding w/ an APA </a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--purple">Amplifying Victories State by State</a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--purple">APA leader statements</a></div>
            </div>
            <div class="nclc-review__video-row">
                <div class="first one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/E2ej7y1A53Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption"> LOREM IPSUM THIS IS A CAPTION</span>
                </div>
                <div class="one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/E2ej7y1A53Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption"> LOREM IPSUM THIS IS A CAPTION</span>
                </div>
            </div>

        </div>
    </div>


    <div class="nclc-review__section-3">
        <div class="nclc-review__container">
            <div class="first two-thirds"><h1>We the People: </h1><h2 class="nclc_review__subheader">Building an inclusive movement across political parties, interests, occupations, and generations</h2></div>
            <div class="one-third nclc-review-sub-header__text-block nclc-review-sub-header__text-block--white nclc-review-sub-header__text-block--right"><p>Business leaders, veterans, farmers, environmentalists—Americans of all stripes are motivated to end the domination of big money in politics. Our movement invites all Americans to the table, inclusive of all points along the political spectrum, and those from all occupations and walks of life. Learn more about the reasons all types of Americans care about this fundamental issue.</p></div>
            <div class="nclc-review__photos-container">
                <div class="first one-third">
                    <div class="nclc-review__small-photo-container">
                        <img src="https://www.americanpromise.net/wp-content/uploads/2019/11/image1-1.jpeg"/>
                    </div>
                    <div class="nclc-review__small-photo-container">
                        <img src="https://www.americanpromise.net/wp-content/uploads/2019/11/image1-1.jpeg"/>
                    </div>
                </div>
                <div class="two-thirds">
                    <div class="nclc_review__collage-container--right">
                        <div class="nclc_review__image-container"><img width="100%" src="https://www.americanpromise.net/wp-content/uploads/2019/11/Ellen-Greene-Bush.jpg"></div>
                        <div class="nclc_review__card-container">
                            <div class="nclc_review__quote-card">
                                <p class="nclc_review__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tempus vitae tortor ac tempor. Maecenas egestas odio in nunc aliquam, ac aliquet enim suscipit. Nulla facilisi. Suspendisse consectetur vitae enim nec maximus. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr/>
            <div class="nclc-review__button-row">
                <div class="first one-fourth"><a class="nclc-review__button nclc-review__button--white">Business leaders</a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Building an Inclusive Movement</a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Leveraging Networks</a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Cross-Partisan Strategies</a></div>
            </div>
            <div class="nclc-review__video-row">
                <div class="first one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/E2ej7y1A53Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption"> LOREM IPSUM THIS IS A CAPTION</span>
                </div>
                <div class="one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/E2ej7y1A53Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption"> LOREM IPSUM THIS IS A CAPTION</span>
                </div>
            </div>

        </div>
    </div>

    <div class="nclc-review__section-4 nclc-review__parallax nclc-review__parallax--purple">
        <div class="nclc-review__container">
            <div class="first two-thirds"><h1>Building Congressional Support: </h1><h2 class="nclc_review__subheader">Empowering elected officials to take the lead on this cross-partisan issue in Congress</h2></div>
            <div class="one-third nclc-review-sub-header__text-block nclc-review-sub-header__text-block--right nclc-review-sub-header__text-block--white"><p>Building congressional support around the 28th Amendment is a key component of our ratification strategy. Our work to build support in Washington has seen an array of key successes over the past year, and we aim to grow this impact in 2020, with a particular focus on growing collaboration across the political aisle. </p></div>
            <div class="nclc-review__photos-container">
                <div class="first two-thirds">
                    <div class="nclc_review__collage-container--left">
                        <div class="nclc_review__image-container"><img width="100%" src="https://www.americanpromise.net/wp-content/uploads/2019/11/Ellen-Greene-Bush.jpg"></div>
                        <div class="nclc_review__card-container">
                            <div class="nclc_review__quote-card">
                                <p class="nclc_review__quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tempus vitae tortor ac tempor. Maecenas egestas odio in nunc aliquam, ac aliquet enim suscipit. Nulla facilisi. Suspendisse consectetur vitae enim nec maximus. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <div class="nclc-review__small-photo-container">
                        <img src="https://www.americanpromise.net/wp-content/uploads/2019/11/image1-1.jpeg"/>
                    </div>
                    <div class="nclc-review__small-photo-container">
                        <img src="https://www.americanpromise.net/wp-content/uploads/2019/11/image1-1.jpeg"/>
                    </div>
                </div>
            </div>

            <hr/>
            <div class="nclc-review__button-row">
                <div class="first one-fourth"><a class="nclc-review__button nclc-review__button--white">Lobby Day overview article</a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Content Piece 2 </a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Content Piece 3</a></div>
                <div class="one-fourth"><a class="nclc-review__button nclc-review__button--white">Content Piece 4</a></div>
            </div>
            <div class="nclc-review__video-row">
                <div class="first one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/E2ej7y1A53Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption"> LOREM IPSUM THIS IS A CAPTION</span>
                </div>
                <div class="one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/E2ej7y1A53Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption"> LOREM IPSUM THIS IS A CAPTION</span>
                </div>
            </div>

        </div>
    </div>
<?php
};

genesis();
