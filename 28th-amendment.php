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
    hero_subnav();
    what_is_the_28th_section();
    why_the_28th_section();
    get_involved();
    the_28th_FAQ();

};

/**
 * 28th Amendment Hero Nav
 *
 * @since 1.0.11
 *
 * @return void
 */
function hero_subnav(){
    ?>
    <header class="amendment-header">
        <section class="header-content">

            <div class="hero-anchor-links">
                <p class="header-button animate-pop-in"><a href="#what" class="button animate-pop-in color-top-border-button color-top-border-button--blue">What is the 28th Amendment?</a></p>
                <p class="header-button animate-pop-in"><a href="#why" class="button color-top-border-button color-top-border-button--purple">Why an Amendment?</a></p>
                <p class="header-button animate-pop-in"><a href="#how" class="button color-top-border-button color-top-border-button--red">Get Involved</a></p>
                <p class="header-button animate-pop-in"><a href="#faq" class="button color-top-border-button color-top-border-button--yellow">FAQ</a></p>
                <p class="header-button animate-pop-in"><a href="/donate" class="button color-top-border-button color-top-border-button--dark-blue">Donate</a></p>
            </div>
        </section>
    </header>
    <div>
        <div class="featured-page-image hiding-header" style="height: auto;">
            <img src="https://americanpromise.net/wp-content/uploads/2020/10/faces_collage_graphic_wnn5ao.png">
        </div>
    </div>
    <?php
}

/**
 * 28th Amendment What Section
 *
 * @since 1.0.11
 *
 * @return void
 */
function what_is_the_28th_section(){
    ?>
    <div class="what-section">
        <div class="anchor"><a id="what"></a></div>
        <div class="site-inner">
            <div>
                <div class="large-custom__h1">
                    <h1>What is The 28th Amendment?</h1>
                </div>
                <div class="first one-half">
                    <p>
                        The 28th Amendment is based in nationwide consensus among Americans across the nation. <a style="color:white;text-decoration: underline" href="https://americanpromise.net/wp-content/uploads/2020/09/Keep-the-Promise-America250.pdf" target="_blank"> Read our recent report Keep the Promise: America 250</a>, which outlines how and why we can work together to pass this amendment.
                    </p>
                    <p> Ready to weigh in on the proposed amendment language? <a href="https://www.surveymonkey.com/r/PL5M7SN" target="_blank" style="color:white;text-decoration: underline">Click here to take our survey and share your opinion!</a>
                    </p>
                    <!-- This section needs significantly more hyper links -->
                    <p><b>American Promise is working to organize American citizens to win the 28th Amendment to restore a democracy in which we the people—not big money, not corporations, not unions, not special interests—govern&nbsp;ourselves.</b></p>

                    <p>The 28th Amendment:
                    <ul>
                        <li>Empowers American voters to end the escalating influence of big money that dominates our elections.</li>
                        <li>Is supported by the vast majority of Americans on both sides of the aisle.</li>
                        <li>Offers lasting reform not dependent on who is elected to office.</li>
                        <li>Enables Americans to enact reasonable limits on campaign contributions and dark money political spending, reversing the 2010 Supreme Court  Citizens United decision.</li>
                    </ul>
                    </p>

                </div>
                <div class="one-half">
                    <a href="https://americanpromise.net/who-we-are/about-us/ap-advisory-council/"><img src="https://americanpromise.net/wp-content/uploads/2020/10/Kearns_Goowdin_Graphic_1_qmyngw.png"/></a>
                </div>
                <div style="text-align:center;"><a href="https://americanpromise.net/take-action/sign-up-to-learn-more/" target="_blank" ><button class="what-section-small-button" style="font-size:25px;">Sign Up for Our Newsletter</button></a></div>
            </div>
        </div>
    </div>
    <?php
}

/**
 * 28th Amendment Why Section
 *
 * @since 1.0.11
 *
 * @return void
 */
function why_the_28th_section(){
    ?>
    <div class="why-section">
        <div class="anchor"><a id="why"></a></div>
        <div class="site-inner">
            <div class="large-custom__h1">
                <h1>Why an Amendment?</h1>
            </div>
            <div class="first one-third why-card">
                <h2 class="why-card-header">There’s Historical<br/> Precedent</h2>
                <i class="fa fa-book why-card-icon" aria-hidden="true"></i>
                <br/>
                <p style="padding: 10px;">Americans have won amendments to expand political rights for women, African Americans, Americans under 18, and more. Now we are working to ensure a system that works for us—not just superwealthy&nbsp;donors.  </p>
            </div>

            <div class="one-third why-card">
                <h2 class="why-card-header">A Majority of</br> Americans Support it</h2>
                <i class="fa fa-users why-card-icon" aria-hidden="true"></i>
                <br/>
                <p style="padding: 10px;">Americans name political&nbsp;corruption the No. 1 crisis facing our nation. Three-fourths of Americans, including 88% of Democrats and 66% of Republicans, support&nbsp;an&nbsp;amendment. <br/></p>
                <br/>
            </div>

            <div class="one-third why-card">
                <h2 class="why-card-header">It’s the Foundational</br> Reform We Need</h2>
                <i class="fa fa-balance-scale why-card-icon" aria-hidden="true"></i>
                <br/>
                <p style="padding: 10px;">The 28th Amendment is a key to fixing the system that makes high-dollar donors more powerful than every other American. The amendment offers lasting, structural reform to ensure an equal voice for every&nbsp;American. </p>
            </div>

            <div style="clear:both;text-align:center;">
                <a href="https://americanpromise.net/donate" target="_blank" ><button class="why-section-small-button" style="font-size:25px;">Donate to American Promise</button></a>
            </div>
        </div>
    </div>
    <?php
}


function get_involved(){
    ?>
    <div class="how-section">
        <div class="anchor"><a id="how"></a></div>
        <div class="site-inner">
            <div class="large-custom__h1">
                <h1 style="color:black;">How Can I Join the Movement for The 28th Amendment?</h1>
            </div>


            <div class="first one-half">
                <div class="flip-card">
                    <div class="flip-card__inner">
                        <div class="flip-card__front newsletter-card">
                        </div>
                        <div class="flip-card__back">
                            <a style="font-size:30px;padding:35px;color:white;" href="https://americanpromise.net/take-action/sign-up-to-learn-more/" target="blank">Get biweekly updates on the citizen-led movement to win the 28th Amendment. <span style="text-decoration:underline;">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="one-half">
                <div class="flip-card">
                    <div class="flip-card__inner">
                        <div class="flip-card__front chapters-card"></div>
                        <div class="flip-card__back">
                            <a href="https://americanpromise.net/take-action/join-a-program/american-promise-chapters/" style="font-size:30px;padding:35px;color:white;" target="blank">Local American Promise chapters across the nation meaningfully advocate for the 28th Amendment in their communities, cities and states. Learn more or join. <span style="text-decoration:underline;">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="first one-half">
                <div class="flip-card">
                    <div class="flip-card__inner">
                        <div class="flip-card__front business-card">
                        </div>
                        <div class="flip-card__back">
                            <a style="font-size:30px;padding:35px;color:white;" href="https://americanpromise.net/bap" target="blank">Business leaders know the pay-to-play political system is bad for our economy and innovation. Sign up for the National Business Network quarterly newsletter to learn more. <span style="text-decoration:underline;">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="one-half">
                <div class="flip-card">
                    <div class="flip-card__inner">
                        <div class="flip-card__front pledge-card"></div>
                        <div class="flip-card__back">
                            <a style="font-size:30px;padding:35px;color:white;" href="https://americanpromise.net/pledge" target="blank">Use our guides and materials to ask elected officials and candidates for office to pledge to use their office to support the 28th Amendment. <span style="text-decoration:underline;">Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

/**
 * 28th Amendment FAQ
 *
 * @since 1.0.11
 *
 * @return void
 */
function the_28th_FAQ(){
    ?>
    <div class="faq-section">
        <div class="anchor"><a id="faq"></a></div>
        <div class="site-inner">
            <div class="large-custom__h1-black ">
                <h1>28th Amendment FAQ</h1>
            </div>
            <div class="faq-container">
                <h2 class="faq-q-header" style="text-decoration: none;">Is the movement for the 28th Amendment a&nbsp;partisan&nbsp;effort?&nbsp;<i class="fa fa-chevron-right faq-q-chevron" aria-hidden="true"></i></h2>
                <span class="faq-ans">No. Americans from every walk of life and on both sides of the political aisle support the movement to end big money in politics. Our nationwide chapters and advisory board include conservatives, liberals and everyone in between. <a target="_blank" href="https://americanpromise.net/who-we-are/about-us/ap-advisory-council/">Meet our advisory council.</a></span>
            </div>

            <h2 class="faq-q-header" style="text-decoration: none;">Why do you call this the 28th Amendment? Aren’t other reform groups working on&nbsp;amendments&nbsp;too?&nbsp;<i class="fa fa-chevron-right faq-q-chevron" aria-hidden="true"></i></h2>
            <span class="faq-ans">We use the 28th Amendment as a shorthand that reflects our goal to make ending money in politics the next amendment, but we support many other reform groups’ amendment efforts. If any of them passes before ours, we’ll be happy to call ours the 29th.</span>
            <h2 class="faq-q-header" style="text-decoration: none;">Is there a specific amendment the 28th Amendment&nbsp;refers&nbsp;to?&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></h2>
            <span class="faq-ans">American Promise supports most versions of an amendment to end big money in politics. Current legislation introduced in Congress at the start of the 2020 term, House Joint Resolution 2, has more than 200 co-sponsors; however, we do not exclusively support this amendment language.</span>
            <h2 class="faq-q-header" style="text-decoration: none;">Why an amendment and not&nbsp;legislation?&nbsp;<i class="fa fa-chevron-right faq-q-chevron" aria-hidden="true"></i></h2>
            <span class="faq-ans">American Promise is dedicated to staying laser focused on this one issue because we believe it is the foundational, structural issue that overshadows reform in all other realms of American public policy and governing. Laws are not enough: Because the Supreme Court has ruled that corporations are people and money is speech, laws that seek to establish spending limits in our elections are subject to legal challenges. An Amendment is the law of the land and offers permanent structural reform. This is why <a target="_blank" href="https://americanpromise.net/history-of-people-power/"> historically the American people have used the amendment process</a> to overturn bad Supreme Court decisions, such as upholding slavery and denying women’s right to vote. An amendment would provide the bedrock for systemic change to support a range of other reforms that strengthen our democracy: election funding laws, gerrymandering, anti-corruption, equal voting rights, term limits etc. </span>
            <h2 class="faq-q-header" style="text-decoration: none;">Can we pass an amendment in such a politically divided&nbsp;nation?&nbsp;<i class="fa fa-chevron-right faq-q-chevron" aria-hidden="true"></i></h2>
            <span class="faq-ans">During times of national turmoil and conflict that amendments are most often passed. While we are living in a time of political division, the American people are united in the desire to end big money in politics. <a target="_blank" href="https://www.publicconsultation.org/redblue/very-large-majorities-support-congressional-bills-to-reduce-influence-of-big-campaign-donors/">In polls, 85% of Democrats and 66% of Republicans favor an amendment</a> that would allow Congress and the states to write campaign finance laws and to distinguish between people and corporations.. Already, 20 states—more than half the 38 needed to pass an Amendment—and more than 800 cities and towns have passed resolutions formally calling for the Amendment.</span>
        </div>
    </div>
    <div class="donate-banner-container">
        <a href="/donate" target="_blank"><img src="https://americanpromise.net/wp-content/uploads/2020/10/2_yjg2lf.png" style="width:100%"/></a>
    </div>
    <?php
}

genesis();
