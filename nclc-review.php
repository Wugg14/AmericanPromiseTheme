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
            <h2><i>It’s On! <br/>Gearing up to take our movement to the next level in 2020.</i></h2>
            <p class="nclc-review__header__blurb">After a year of major successes, at the 2019 National Citizen Leadership Conference 28th Amendment advocates from across the nation come together to fuel up for our next set of strategic victories throughout 2020. Our work at the NCLC focused on four high-level goals.</p>
        </div>
    </div>
    <div class="nclc-review__section-1">
        <div class="nclc-review__container">
            <div class="first two-thirds"><h1>Cause of Our Time </h1><h2 style="color: black;">Inviting more young Americans to the movement</h2></div>
            <div class="one-third nclc-review-sub-header__text-block nclc-review-sub-header__text-block--black nclc-review-sub-header__text-block--right"><p>The rising generation of young Americans faces so many issues—among them crippling student loan debt, a broken healthcare system, and the mounting consequences of climate change. Young Americans are ready to tackle the underlying cause of these issues: big money in politics. At the NCLC, we launched the Cause of Our Time Statement of Principle, inviting young Americans to sign on to take a stand against big money in&nbsp;politics. </p></div>
           <div class="nclc-review__photos-container">
                <div class="first one-third">
                    <div class="nclc-review__small-photo-container">
                        <a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img alt="Katie Fahey" src="https://www.americanpromise.net/wp-content/uploads/2019/11/Katie-Fahey-podium-scaled-e1574092635154.jpg"/></a>
                        <span class="nclc-review__video-caption">Katie Fahey, Executive Director of The People, speaks at the conference.</span>
                    </div>
                    <div class="nclc-review__small-photo-container">
                        <a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img src="https://www.americanpromise.net/wp-content/uploads/2019/11/Doris-Kearns-Goodwin-book-signing-youth-scaled-e1574092923667.jpg"/></a>
                        <span class="nclc-review__video-caption">Presidential Historian Doris Kearns Goodwin signs copies of her book for two attendees.</span>
                    </div>
                </div>
                <div class="two-thirds">
                    <div class="nclc_review__collage-container--right">
                        <div class="nclc_review__image-container"><a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img width="100%" alt="Manu Meel" src="https://www.americanpromise.net/wp-content/uploads/2019/11/manu-portrait.png"/></a></div>
                        <div class="nclc_review__card-container">
                            <div class="nclc_review__quote-card">
                                <p class="nclc_review__quote"><span class="nclc-quote-text" style="color: white;">I think that even in our divisive political moment today, where things seem absolutely hopeless, I still believe in everyday Americans, especially young people's ability to make change. So thank you so much for investing in today, while myself and my fellow leaders continue to invest in&nbsp;tomorrow.</span><br/><br/> ―Manu Meel, Chief Executive Officer, BridgeUSA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr/>
            <div class="nclc-review__video-row">
                <div class="first one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/R-Z52hYgi_g?rel=0 " frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption">Ella McGrail speaks about how young people can become leaders in movements across the country, including&nbsp;ours! </span>
                </div>
                <div class="one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/DlA16YeUaF0?rel=0 " frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption">Manu Meel speaks about how we move forward at divisive political moments, the role youth can play, and where we can find&nbsp;hope.</span>
                </div>
            </div>
            <div class="nclc-review__button-row">
                <div class="first one-fourth"><a class="nclc-review__button nclc-review__button--white" target = "_Blank" href="https://www.americanpromise.net/cause-of-our-time-statement-of-principle-invites-young-americans-to-join-the-call-for-the-28th-amendment/">Cause of Our Time Statement of Principle</a></div>
                <div class="one-fourth"><a target = "_Blank" href="https://www.americanpromise.net/college-students-commit-to-tackle-big-money-in-our-nations-capital/" class="nclc-review__button nclc-review__button--white">College Students Commit to Tackle Big Money in Our Nation’s Capital</a></div>
                <div class="one-fourth"><a target = "_Blank" href="https://www.youtube.com/watch?v=Hj6PecNGR6s&feature=youtu.be" class="nclc-review__button nclc-review__button--white">Video: Devin Hiett</a></div>
                <div class="one-fourth"><a target = "_Blank" href="https://www.youtube.com/watch?v=IoiDJyEjF9k&feature=youtu.be" class="nclc-review__button nclc-review__button--white">Video: Wambui Gatheru Launches "Cause of Our Time"</a></div>
            </div>
        </div>
    </div>

    <div class="nclc-review__section-2">
        <div class="nclc-review__container">
            <div class="first two-thirds"><h1>Citizen Leadership </h1><h2 class="nclc_review__subheader">Furthering citizen-led action and successes across the nation</h2></div>
            <div class="one-third nclc-review-sub-header__text-block nclc-review-sub-header__text-block--right nclc-review-sub-header__text-block--white"><p>Our grassroots movement is successful when citizen leaders across the nation are empowered to win support among their fellow community members, local elected officials, and state officials. Our citizen leaders have been extremely effective in racking up local victories over the course of the past year, and we are ready to double down on these victories in&nbsp;2020. </p></div>

            <div class="nclc-review__photos-container">
                <div class="first two-thirds">
                    <div class="nclc_review__collage-container--left">
                        <div class="nclc_review__image-container"><a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img width="100%" src="https://www.americanpromise.net/wp-content/uploads/2019/11/burke-portrait.png"/></a></div>
                        <div class="nclc_review__card-container">
                            <div class="nclc_review__quote-card">
                                <p class="nclc_review__quote" style="background-color: #5b2b7c;"><span class="nclc-quote-text">Every single one of us as a citizen is called to participate in our democracy. We can't wait for one large change, one person to be impeached, one rule to be shifted, to fully participate in our democratic republic. Every single one of us is expected to engage and be active citizens whether or not there's an election day&nbsp;happening.</span><br/><br/> ―Leslie Danks Burke, Founder and President of Trailblazers PAC</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <div class="nclc-review__small-photo-container">
                        <a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img src="https://www.americanpromise.net/wp-content/uploads/2019/11/Heather-Santos-Podium.jpg"/></a>
                        <span class="nclc-review__video-caption">Citizen Leader Heather Santos delivers a testimonial at the conference.</span>
                    </div>
                    <div class="nclc-review__small-photo-container">
                        <a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img src="https://www.americanpromise.net/wp-content/uploads/2019/11/Steven-Miller-Barbara-Miller-Joan-Divor-Hats-off-citizen-leaders-scaled-e1574096383637.jpg"/></a>
                        <span class="nclc-review__video-caption">Citizen Leaders give a 'Hats Off' to the NCLC.</span>
                    </div>
                </div>
            </div>

            <hr/>
            <div class="nclc-review__video-row">
                <div class="first one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/neuknuHgv3I?rel=0 " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption">Steve Lipscomb, Founder of FixIt America, accepts his Citizen Leadership Award</span>
                </div>
                <div class="one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/lNVPLiCb_K8?rel=0 " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption">Renaldo Pearson, Director of External Affairs at RepresentUs, accepts his Citizen Leadership Award</span>
                </div>
            </div>
            <div class="nclc-review__button-row">
                <div class="first one-fourth"><a class="nclc-review__button nclc-review__button--purple" target="_blank" href="https://www.americanpromise.net/citizen-leaders-strengthen-our-democracy-across-the-nation/">Citizen Leaders Strengthen Our Democracy Across the Nation</a></div>
                <div class="one-fourth"><a target="_blank" href="https://www.americanpromise.net/citizen-leaders-share-their-inspiration/" class="nclc-review__button nclc-review__button--purple">Citizen Leaders Share Their Inspiration</a></div>
                <div class="one-fourth"><a target="_blank" href="https://www.americanpromise.net/how-our-state-by-state-strategy-will-work-to-pass-the-28th-amendment/" class="nclc-review__button nclc-review__button--purple">How Our State-by-State Strategy Will Work to Pass the 28th Amendment</a></div>
                <div class="one-fourth"><a target="_blank" href="https://www.youtube.com/watch?v=4at0vYmfclY&feature=youtu.be" class="nclc-review__button nclc-review__button--purple">Video: Corinne Dodge accepts the Citizen Leadership Award on behalf of the people of New Hampshire</a></div>
            </div>
        </div>
    </div>


    <div class="nclc-review__section-3">
        <div class="nclc-review__container">
            <div class="first two-thirds"><h1>We the People </h1><h2 class="nclc_review__subheader">Building a movement across political parties, interests, motivations, and generations</h2></div>
            <div class="one-third nclc-review-sub-header__text-block nclc-review-sub-header__text-block--white nclc-review-sub-header__text-block--right"><p>Business leaders, veterans, farmers, environmentalists—Americans of all stripes are motivated to end the domination of big money in politics. Our movement invites all Americans to the table, inclusive of all points along the political spectrum, and those from all occupations and walks of life. Learn more about the reasons all types of Americans care about this fundamental&nbsp;issue.</p></div>
            <div class="nclc-review__photos-container">
                <div class="first one-third">
                    <div class="nclc-review__small-photo-container">
                        <a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img alt="Cheryl Crawford, Executive Director of MassVOTE and Matt Cox, NC State Senate Candidate" src="https://www.americanpromise.net/wp-content/uploads/2019/11/Cheryl-Crawford-Matt-Cox.jpg"/></a>
                        <span class="nclc-review__video-caption">Cheryl Crawford, Executive Director of MassVOTE (Left) and Matt Cox, NC State Senate Candidate (Right).</span>
                    </div>
                    <div class="nclc-review__small-photo-container">
                        <a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img alt="Courtney Hight, Rod Morrison, Elizabeth Doty" src="https://www.americanpromise.net/wp-content/uploads/2019/11/Courtney-Hight-Rod-Morrison-Elizabeth-Doty-scaled-e1574100106801.jpg"/></a>
                        <span class="nclc-review__video-caption">Courtney Hight, Director, Democracy Program of the Sierra Club (left), Rod Morrison, Wyoming Promise (center), Elizabeth Doty, Founder of Leadership Momentum and National Program Coordinator of Business for American Promise (right)</span>
                    </div>
                </div>
                <div class="two-thirds">
                    <div class="nclc_review__collage-container--right">
                        <div class="nclc_review__image-container"><a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img width="100%" src="https://www.americanpromise.net/wp-content/uploads/2019/11/Ellen-Read-Portrait.png"/></a></div>
                        <div class="nclc_review__card-container">
                            <div class="nclc_review__quote-card">
                                <p class="nclc_review__quote"><span class="nclc-quote-text" style="color: white;">It doesn't matter what issue is your issue. Whether it is climate and healthcare, or government spending, and industrial subsidies that end up raising taxes on everyone. There will be no progress on any issue, no real common sense progress that reflects the will of the people, until we have a government that actually represents&nbsp;people.</span><br/><br/> ―Ellen Read, New Hampshire State Representative</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr/>
            <div class="nclc-review__video-row">
                <div class="first one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/hBIml7HOwB0?rel=0 " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption">Katie Fahey (The People), Leslie Danks Burke (Trailblazers PAC), Sangita Sigdyal (FairVote), and Scott Greytak (RepresentUs) discuss the reforms they are working on as the maintenance needed for our representative democracy that will help build the whole house on top of the Constitutional Amendment foundation.</span>
                </div>
                <div class="one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/TmTcR1ttKNQ?rel=0 " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption">Fmr. State Senator Jim Ruben (R - New Hampshire) shares why conservatives will get behind the 28th Amendment.</span>
                </div>
            </div>
            <div class="nclc-review__button-row">
                <div class="first one-fourth"><a target="_blank" href="https://www.americanpromise.net/how-business-for-american-promise-will-create-a-level-economic-playing-field-and-encourage-innovation/" class="nclc-review__button nclc-review__button--white">How Business for American Promise Will Create a Level Economic Playing Field and Encourage Innovation</a></div>
                <div class="one-fourth"><a href="https://www.americanpromise.net/building-a-cross-partisan-movement-in-a-time-of-division/" target="_blank" class="nclc-review__button nclc-review__button--white">Building a Cross-Partisan Movement in a Time of Division</a></div>
                <div class="one-fourth"><a href="https://www.youtube.com/watch?v=4o8e7EnMgws&feature=youtu.be" target="_blank" class="nclc-review__button nclc-review__button--white">Video: Award for Cross-Partisan Leadership in Maine</a></div>
                <div class="one-fourth"><a target="_blank" class="nclc-review__button nclc-review__button--white">Video: Take Back Our Republic Award for Cross-Partisan Excellence</a></div>
            </div>
        </div>
    </div>

    <div class="nclc-review__section-4">
        <div class="nclc-review__container">
            <div class="first two-thirds"><h1>Building Congressional Support </h1><h2 class="nclc_review__subheader">Empowering elected officials to take the lead on this cross-partisan issue in Congress</h2></div>
            <div class="one-third nclc-review-sub-header__text-block nclc-review-sub-header__text-block--right nclc-review-sub-header__text-block--white"><p>Building congressional support around the 28th Amendment is a key component of our ratification strategy. Our work to build support in Washington has seen an array of key successes over the past year, and we aim to grow this impact in 2020, with a particular focus on growing collaboration across the political&nbsp;aisle.</p></div>
            <div class="nclc-review__photos-container">
                <div class="first two-thirds">
                    <div class="nclc_review__collage-container--left">
                        <div class="nclc_review__image-container"><a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img width="100%" src="https://www.americanpromise.net/wp-content/uploads/2019/11/curran-portrait.png"/></a></div>
                        <div class="nclc_review__card-container">
                            <div class="nclc_review__quote-card">
                                <p class="nclc_review__quote"><span class="nclc-quote-text" style="color: white;">We are the people we've been waiting for. Every single one of you that is going to be engaged in coalition building, gathering signatures and putting things on ballots in your own states and making sure that your state legislatures are stepping up and taking this pledge, and then taking that fight to Washington DC. That's enormously important&nbsp;work.</span><br/><br/> ―Sean Curran, Principal, Waterville Consulting</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="one-third">
                    <div class="nclc-review__small-photo-container">
                        <a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img src="https://www.americanpromise.net/wp-content/uploads/2019/11/TX-Rep.-Van-Taylor-David-Stringfellow-e1574105229579.jpg"/></a>
                        <span class="nclc-review__video-caption">Citizen Leader David Stringfellow meets with Congressman Van Taylor (R - Texas).</span>
                    </div>
                    <div class="nclc-review__small-photo-container">
                        <a target="_blank" href="https://www.flickr.com/photos/185173265@N08/sets/72157711782759566/"><img src="https://www.americanpromise.net/wp-content/uploads/2019/11/MG_8407-2.jpg"/></a>
                        <span class="nclc-review__video-caption">Citizen leaders gather at the Capitol for Lobby Day.</span>
                    </div>
                </div>
            </div>

            <hr/>
            <div class="nclc-review__video-row">
                <div class="first one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/SPHnWtQyWNY?rel=0 " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption">Citizens from all over the country joined together to meet with their members of Congress to ask them to support a 28th Amendment to get money out of politics. First stop: delivering the message of our time from the people of New Hampshire to the New Hampshire delegation in Congress.</span>
                </div>
                <div class="one-half video-spacer">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/vZlP-zTZPeo?rel=0 " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <span class="nclc-review__video-caption">Congressman Jamie Raskin (D - Maryland) speaking at the conference.</span>
                </div>
            </div>
            <div class="nclc-review__button-row">
                <div class="first one-fourth"><a target="_blank" href="https://www.americanpromise.net/a-citizen-leaders-experience-at-lobby-day/" class="nclc-review__button nclc-review__button--white">A Citizen Leader’s Experience at Lobby Day</a></div>
                <div class="one-fourth"><a target="_blank" href="https://www.youtube.com/watch?v=WNhYIb8HwfM&feature=youtu.be" class="nclc-review__button nclc-review__button--white">Video: Sean Curran</a></div>
                <div class="one-fourth"><a target="_blank" href="https://www.americanpromise.net/the-accidental-activist/" class="nclc-review__button nclc-review__button--white">The Accidental Activist</a></div>
                <div class="one-fourth"><a target="_blank" href="https://www.youtube.com/watch?v=xN1ttS2qyFI&feature=youtu.be" class="nclc-review__button nclc-review__button--white">Video: Kevin Johnson, Executive Director of Election Reformers Network</a></div>
            </div>
        </div>
    </div>
<?php
};

genesis();
