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
        <p></p>
        <p>Throughout our nation’s history, citizen leaders have coalesced around reform movements that expand our fundamental rights to broader coalitions of Americans and improve our democratic self-governance—often through the amendment process. Through the passage of amendments, Americans have abolished slavery, expanded access to citizenship, granted voting rights regardless of race or gender, and more.</p>
        <p>Now, it is time once again to pass a constitutional amendment to empower the American people — this time by ending the domination of big money in our political system. Drawing inspiration from generations of reformers before us helps guide and strengthen our movement. Here you will find a historical breakdown of moments when Americans have used our ultimate power to improve our nation, as well as articles that contextualize our fight for an amendment in the broader scope of history.</p>
    </div>

    <div style="background-color:#2f5179;">
        <div class="site-inner" style="padding-top: 30px;">
            <iframe src="https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=11z42ekVgVLrKDAkwFezdzq7HXt6yLZVuBpmIrb7F2Fg&font=Default&lang=en&initial_zoom=2&height=650" width="100%" height="650" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        </div>
    </div>

    <div class="site-inner">
        <div class="internal-custom__h1">
            <h1>More Incredible Stories of People Power:</h1>
        </div>

        <div class="first one-half">
            <div class="index-page__card slide-top">
                <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2019/02/AP_FB_Quote_BillMoyers-768x644.jpg" /></div>
                <header class="index-page__card__header">
                    <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/blog/2019/01/22/a_history_of_people_power_six_times_so_far_the_american_people_have_overruled_scotus_to_secure_the_rights_of_americans/" target="_blank" rel="noopener noreferrer">A History of People Power: Six times (so far) the American people have overruled SCOTUS to secure the rights of Americans</a></h1>
                </header>
                <div class="index-page__blog-posts">The United States of America—the greatest experiment in democracy ever attempted on Earth—gives political power to three equal branches of government. But there is another great power codified into this nation. It’s the ultimate power of the people to define and determine the framework of our own country: the amendment process, owned by the citizens of the United States. <a class="nu gray" href="https://www.americanpromise.net/blog/2019/01/22/a_history_of_people_power_six_times_so_far_the_american_people_have_overruled_scotus_to_secure_the_rights_of_americans/">Read more</a>

                </div>
            </div>
        </div>

        <div class="one-half">
            <div class="index-page__card slide-top">
                <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2020/01/MLK-quote-768x768.png" /></div>
                <header class="index-page__card__header">
                    <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/blog/2020/01/15/honoring-the-legacy-of-martin-luther-king-jr-as-a-new-generation-of-reformers-takes-action/" target="_blank" rel="noopener noreferrer">Honoring the Legacy of Martin Luther King Jr. as a New Generation of Reformers Takes Action</a></h1>
                </header>
                <div class="index-page__blog-posts">For the majority of today’s Americans, many of the fundamental rights we hold most dear—the right to freedom, liberty, to vote, to political participation—were not granted in the original text of the Constitution. Every generation of Americans, however, has organized and stood up to demand revisions to our founding documents to expand these fundamental rights. No person exemplified this spirit of fundamental change through movement-building more than Dr. Martin Luther King Jr. <a class="nu gray" href="https://www.americanpromise.net/blog/2020/01/15/honoring-the-legacy-of-martin-luther-king-jr-as-a-new-generation-of-reformers-takes-action/">Read more</a></div>
            </div>
        </div>

        <div class="first one-half">
            <div class="index-page__card slide-top">
                <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2019/12/Corinne-Dodge-Quote-Meme-768x644.png" /></div>
                <header class="index-page__card__header">
                    <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/blog/2019/12/16/a-year-of-huge-victories-the-many-citizen-led-successes-of-2019/" target="_blank" rel="noopener noreferrer">A Year of Huge Victories: The Many Citizen-Led Successes of 2019</a></h1>
                </header>
                <div class="index-page__blog-posts">As we gear up for the pivotal year of 2020 and the opportunities it brings, we’re proud and grateful as we look back on the many important victories American Promise citizen leaders have achieved in 2019. It’s through the grassroots work of our citizen leaders that the movement for the 28th Amendment will succeed—and if 2019 is any indication, we are on the path to achieve this important systemic change for our country by 2026. <a class="nu gray" href="https://www.americanpromise.net/blog/2019/12/16/a-year-of-huge-victories-the-many-citizen-led-successes-of-2019/">Read more</a>

                </div>
            </div>
        </div>

        <div class="one-half">
            <div class="index-page__card slide-top">
                <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://assets.nationbuilder.com/americanpromise/pages/2297/attachments/original/1551909979/AP_Sufferagette_Ida.jpg?1551909979" /></div>
                <header class="index-page__card__header">
                    <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/blog/2019/03/06/citizen_leader_spotlight_women_leaders_of_the_suffragist_movement/" target="_blank" rel="noopener noreferrer">Citizen Leader Spotlight: Women Leaders of the Suffragist Movement</a></h1>
                </header>
                <div class="index-page__blog-posts">As we celebrate Women’s History Month and look back on the efforts it took to pass the 19th Amendment and guarantee women’s right to vote—a goal that took nearly 100 years to achieve—we are humbled by the struggles for equality so many Americans have overcome over the centuries. As the familiar phrase tells us, freedom isn’t free. The promise of a “more perfect union” is one Americans must continue to reach toward, and fight for, today and into the future.  <a class="nu gray" href="https://www.americanpromise.net/blog/2019/03/06/citizen_leader_spotlight_women_leaders_of_the_suffragist_movement/">Read more</a></div>
            </div>
        </div>

        <div class="first one-half">
            <div class="index-page__card slide-top">
                <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2019/02/bhm15thamendmentcelebration-768x626.jpg" /></div>
                <header class="index-page__card__header">
                    <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/blog/2019/02/13/the_amendment_process_and_the_african_american_fight_for_representation_and_equality/" target="_blank" rel="noopener noreferrer">The Amendment Process and the African American Fight for Representation and Equality</a></h1>
                </header>
                <div class="index-page__blog-posts">Black History Month is a time our nation honors the integral role African Americans have played in the history of our nation. African Americans’ ongoing fight toward equality is rightfully counted among the most extraordinary struggles and triumphs in the history of the world. Despite horrific cruelty and impossible odds, African Americans over the centuries have sacrificed their lives, freedom and safety to demand their rights to liberty and dignity. <a class="nu gray" href="https://www.americanpromise.net/blog/2019/02/13/the_amendment_process_and_the_african_american_fight_for_representation_and_equality/">Read more</a>

                </div>
            </div>
        </div>

        <div class="one-half">
            <div class="index-page__card slide-top">
                <div class="index-page__card__img__container"><img class="index-page__card__img" src="https://www.americanpromise.net/wp-content/uploads/2020/01/moyers-video.png" /></div>
                <header class="index-page__card__header">
                    <h1 style="padding: 10px 10px 0px 10px;"><a style="color: black; text-decoration: none;" href="https://www.americanpromise.net/blog/2018/08/07/bill_moyers_speech_at_the_national_citizen_leadership_conference/" target="_blank" rel="noopener noreferrer">Bill Moyers: “You are Fighting for the Third Emancipation in American History”</a></h1>
                </header>
                <div class="index-page__blog-posts">Watch as Bill Moyers, award-winning journalist, best-selling author and former White House Press Secretary under President Lyndon B. Johnson, shares a passionate, thought-provoking and humorous speech advocating for the 28th Amendment to get big money out of politics. In his speech from the 2018 National Citizen Leadership Conference, Moyers uses anecdotes, historical examples and figures to make the case that getting big money out of politics will be the third emancipation in American history. <a class="nu gray" href="https://www.americanpromise.net/blog/2018/08/07/bill_moyers_speech_at_the_national_citizen_leadership_conference/">Read more</a></div>
            </div>
        </div>
    </div>




<?php
}

genesis();
