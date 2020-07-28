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
}

/**
 * 28th Amendment Hero Nav
 *
 * @since 1.0.11
 *
 * @return void
 */
function hero_subnav(){
    ?>
    <header class="full-size-landing-hero">
        <section class="header-content">
            <h1 class="header-title animate-pop-in">The 28th Amendment</h1>
            <h3 class="header-subtitle animate-pop-in">Imagine a Government Run by People, Not&nbsp;Money</h3>

            <div class="hero-anchor-links">
                <p class="header-button animate-pop-in"><a href="#what" class="button">What is the 28th&nbsp;Amendment?</a></p>
                <p class="header-button animate-pop-in"><a href="#why" class="button">Why an&nbsp;Amendment?</a></p>
                <p class="header-button animate-pop-in"><a href="#how" class="button">Get&nbsp;Involved</a></p>
                <p class="header-button animate-pop-in"><a href="#faq" class="button">FAQ</a></p>
                <p class="header-button animate-pop-in"><a href="/donate" target="_blank" class="button">Donate</a></p>
            </div>
            <a href="#what"><i class="fa fa-angle-down hero-arrow shake-icon" aria-hidden="true"></i></a>
        </section>
    </header>
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
    <div class="anchor"><a id="what"></a></div>
    <div class="what-section">
        <div class="site-inner">
            <div>
                <div class="large-custom__h1">
                    <h1>What is The 28th&nbsp;Amendment?</h1>
                </div>
                <div class="first one-half">
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
                    <a href="https://americanpromise.net/who-we-are/about-us/ap-advisory-council/"><img src="https://res.cloudinary.com/dfzj6lgdn/image/upload/v1592489550/DKG_no_background_image_ltmm7c_f8qihk.jpg"/></a>
                </div>
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
    <div class="anchor"><a id="why"></a></div>
    <div class="why-section">
        <div class="site-inner">
            <div class="large-custom__h1">
                <h1>Why an Amendment?</h1>
            </div>
            <div class="first one-third why-card">
                <h2 class="why-card-header">There’s Historical Precedent</h2>
                <i class="fa fa-book why-card-icon" aria-hidden="true"></i>
                <br/>
                <span>Throughout U.S. history, citizens have advocated for constitutional amendments to expand political rights—such as voting rights for women, African Americans, and Americans under the age of 18. Now, citizens across the country are coming together to demand that politicians work for their constituents—we the people—rather than big-money&nbsp;donors. </span>
                <br/>
                <a href="https://americanpromise.net/history-of-people-power/" target="_blank"><button class="why-section-small-button">Read More</button></a>
            </div>

            <div class="one-third why-card">
                <h2 class="why-card-header">Americans Support it</h2>
                <i class="fa fa-users why-card-icon" aria-hidden="true"></i>
                <br/>
                <span>In a bipartisan survey, Americans name political corruption the No. 1 issue facing our nation, and according to a 2018 University of Maryland study, three-fourths of Americans, including 88% of Democrats and 66% of Republicans, favor a constitutional amendment to address the issue. Americans know fixing our broken political system is the most important task we&nbsp;face.
 </span>
                <br/>
                <a href="https://americanpromise.net/blog/2019/11/15/building-a-cross-partisan-movement-in-a-time-of-division/" target="_blank"><button class="why-section-small-button">Read More</button></a>
            </div>

            <div class="one-third why-card">
                <h2 class="why-card-header">It’s the Foundational Reform We Need</h2>
                <i class="fa fa-balance-scale why-card-icon" aria-hidden="true"></i>
                <br/>
                <span>The 28th Amendment is a lasting, systemic reform driven by the American people. It will create a solid legal foundation for citizens and Congress to set common-sense limits on political spending and restore the voice of American citizens so politicians act on their beliefs rather than the preferences of high-dollar&nbsp;donors. </span>
                <br/>
                <a href="https://americanpromise.net/blog/2019/08/21/7-critical-democracy-reforms-which-are-most-important-to-you/" target="_blank"><button class="why-section-small-button">Read More</button></a>
            </div>
        </div>
    </div>
<?php
}


function get_involved(){
    ?>
    <div class="anchor"><a id="how"></a></div>
    <div class="how-section">
        <div class="site-inner">
            <div class="large-custom__h1">
                <h1>How Can I Join the Movement for The 28th&nbsp;Amendment?</h1>
            </div>

            <a class="how-bullet" href="https://americanpromise.net/take-action/sign-up-to-learn-more/" target="_blank">1. Subscribe to Our Newsletter:</a> Get biweekly updates on the citizen-led movement to win the&nbsp;28th&nbsp;Amendment.</br></br>

            <a class="how-bullet" href="https://americanpromise.net/take-action/join-a-program/american-promise-chapters/" target="_blank">2. American Promise Chapters:</a> Local American Promise chapters across the nation meaningfully advocate for the 28th Amendment in their communities, cities and states. Learn&nbsp;more&nbsp;or&nbsp;join. </br></br>

            <a class="how-bullet" href="https://americanpromise.net/take-action/join-a-program/business-for-american-promise/" target="_blank">3. National Business Network: </a>Business leaders know the pay-to-play political system is bad for our economy and innovation. Sign up for the National Business Network quarterly newsletter to learn more.</br></br>

            <a class="how-bullet" href="https://americanpromise.net/pledge" target="_blank">4. Candidate Pledge Campaign:</a> Use our guides and materials to ask elected officials and candidates for office to pledge to use their office to support the&nbsp;28th&nbsp;Amendment.</br>
            <a href="https://americanpromise.net/blog/2018/08/07/bill_moyers_speech_at_the_national_citizen_leadership_conference/" target="_blank">
                <img src="https://americanpromise.net/wp-content/uploads/2020/06/moyers-banner_gosngh.png"/>
            </a>
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
    <div class="anchor"><a id="faq"></a></div>
    <div class="faq-section">
        <div class="site-inner">
            <div class="large-custom__h1-black ">
                <h1>28th Amendment FAQ</h1>
            </div>
            <h2 class="faq-q-header">Is the movement for the 28th Amendment a partisan&nbsp;effort?&nbsp;<i class="fa fa-chevron-right faq-q-chevron" aria-hidden="true"></i></h2>
            <span class="faq-ans">No. Americans from every walk of life and on both sides of the political aisle support the movement to end big money in politics. Our nationwide chapters and advisory board include conservatives, liberals and everyone in between. <a target="_blank" href="https://americanpromise.net/who-we-are/about-us/ap-advisory-council/">Meet our advisory&nbsp;council.</a></span>
            <h2 class="faq-q-header">Why do you call this the 28th Amendment? Aren’t other reform groups working on amendments too?&nbsp;<i class="fa fa-chevron-right faq-q-chevron" aria-hidden="true"></i></h2>
            <span class="faq-ans">We use the 28th Amendment as a shorthand that reflects our goal to make ending money in politics the next amendment, but we support many other reform groups’ amendment efforts. If any of them passes before ours, we’ll be happy to call ours&nbsp;the&nbsp;29th.</span>
            <h2 class="faq-q-header">Is there a specific amendment the 28th Amendment refers to?&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></h2>
            <span class="faq-ans">American Promise supports most versions of an amendment to end big money in politics. Current legislation introduced in Congress at the start of the 2020 term, House Joint Resolution 2, has more than 200 co-sponsors; however, we do not exclusively support this&nbsp;amendment&nbsp;language.</span>
            <h2 class="faq-q-header">Why an amendment and not legislation?&nbsp;<i class="fa fa-chevron-right faq-q-chevron" aria-hidden="true"></i></h2>
            <span class="faq-ans">American Promise is dedicated to staying laser focused on this one issue because we believe it is the foundational, structural issue that overshadows reform in all other realms of American public policy and governing. Laws are not enough: Because the Supreme Court has ruled that corporations are people and money is speech, laws that seek to establish spending limits in our elections are subject to legal challenges. An Amendment is the law of the land and offers permanent structural reform. This is why <a target="_blank" href="https://americanpromise.net/history-of-people-power/"> historically the American people have used the amendment process</a> to overturn bad Supreme Court decisions, such as upholding slavery and denying women’s right to vote. An amendment would provide the bedrock for systemic change to support a range of other reforms that strengthen our democracy: election funding laws, gerrymandering, anti-corruption, equal voting rights, term limits&nbsp;etc.</span>
            <h2 class="faq-q-header">Can we pass an amendment in such a politically divided nation?&nbsp;<i class="fa fa-chevron-right faq-q-chevron" aria-hidden="true"></i></h2>
            <span class="faq-ans">During times of national turmoil and conflict that amendments are most often passed. While we are living in a time of political division, the American people are united in the desire to end big money in politics. <a target="_blank" href="https://www.publicconsultation.org/redblue/very-large-majorities-support-congressional-bills-to-reduce-influence-of-big-campaign-donors/">In polls, 85% of Democrats and 66% of Republicans favor an amendment</a> that would allow Congress and the states to write campaign finance laws and to distinguish between people and corporations.. Already, 20 states—more than half the 38 needed to pass an Amendment—and more than 800 cities and towns have passed resolutions formally calling for&nbsp;the&nbsp;Amendment.</span>
            <div style="text-align: center;margin:25px;"><a href="/donate" target="_blank"><button>Donate</button></a></div>
        </div>
    </div>
    <?php
}

genesis();