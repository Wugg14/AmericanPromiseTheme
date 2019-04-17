<?php

/**
* Template Name: BAP Page
* Description: Custom page template for Business for American Promise. Built with Masonry.js
*/

namespace AmericanPromise\AmericanPromiseTheme;

// Adds the Council Cards after the entry
add_action( 'genesis_after_entry' , __NAMESPACE__ . '\custom_business_cards' );


/**
 * Custom Business Cards
 *
 * @since 1.0.0
 *
 * @return void
 */

function custom_business_cards(){
	?>
<div class="internal-custom__h1">
	<h1>Business Leaders from Across the Political Spectrum Endorse the Statement of Principle</h1>
</div>
<div class="grid" style="margin:0 auto;">
<div class="grid-item">
	<figure class="testimonial-card">
		<blockquote>My life has been about taking the long view. Today’s political rules of the game make it impossible for our government or business to take the long view. We need a 28th Amendment to give the future a voice.</blockquote>
		<div class="council-member">
			<img src="https://www.americanpromise.net/wp-content/uploads/2019/03/PSchwartz360x360.jpg" alt="Peter Schwartz" />
			<h5>Peter Schwartz <span>Futurist and author of The Art of the Long View</span></h5>
		</div>
	</figure>
</div>

<div class="grid-item">
	<figure class="testimonial-card">
		<blockquote>The 28th amendment is the best present solution to a profoundly difficult problem. The evidence is compelling—money has infiltrated politics at an unprecedented level and is impacting policy. Whether it’s gun control, health care, environmental protection...whatever may be in the interest of the larger good, is no longer representative of the people but special interests who literally buy influence at the highest levels. It shouldn’t be about picking sides and throwing money at it to influence outcomes—regardless of which side you’re on. The 28th amendment won’t solve everything, but it’s a pivotal first step to thwart political corruption and regain our democracy.</blockquote>
		<div class="council-member">
			<img src="https://www.americanpromise.net/wp-content/uploads/2019/03/Jane-Greenthal-Image.jpg" alt="Jane Greenthal" />
			<h5>Jane Greenthal <span>Regional Consulting Strategy Director, Gensler, and Harvard MBA (1991), with over 25 years in strategic planning, marketing, business development and executive leadership.</span></h5>
		</div>
	</figure>
</div>

<div class="grid-item">
	<figure class="testimonial-card">
		<blockquote>Healthy capital markets depend on transparency and fairness. The significant corporate dollars now flowing into our political campaigns is eroding both transparency and fairness and is incongruent with the U.S. maintaining its leadership role in the global economy. We urgently need to overturn Citizens United before its damage becomes irreversible.</blockquote>
		<div class="council-member">
			<img src="http://www.americanpromise.net//wp-content/uploads/2018/12/patsky.jpeg" alt="Matt Patsky" />
			<h5>Matt Patsky <span>CEO, Trillium Asset Management</span></h5>
		</div>
	</figure>
</div>

<div class="grid-item">
	<figure class="testimonial-card">
		<blockquote>Increasingly, politicians have become more concerned with raising funds than with following the wishes of the citizens who elected them. That robs the American people and puts tremendous power in the hands of a small number of businesses and individuals, fundamentally corrupting our democracy. And, <strong>for businesses, it has become a pay-to-play game, where a business is forced (is extorted, some have said) to contribute as much – or more – than its competitors to gain influence in the halls of power. This distortion of the competitive balance is toxic to our economy. The American Promise Statement of Principle is simply a declaration of the wish that we return to core American values and the bedrock of democracy, and the 28th Amendment is fundamental to beginning that process.</strong></blockquote>
		<div class="council-member">
			<img src="https://www.americanpromise.net/wp-content/uploads/2019/03/Roy-Shapiro-Image.jpg" alt="Roy D. Shapiro" />
			<h5>Roy D. Shapiro <span>Philip Caldwell Professor of Business Administration at the Harvard University Graduate School of Business Administration, Emeritus</span></h5>
		</div>
	</figure>
</div>

<div class="grid-item">
	<figure class="testimonial-card">
		<blockquote>The concentration of wealth and political spending by corporate America and special interest has changed the face of our democracy. It creates politicians beholden to cash, rather than their constituents. Supporting the 28th amendment is a step at bringing our democracy back to the people.</blockquote>
		<div class="council-member">
			<img src="https://www.americanpromise.net/wp-content/uploads/2019/03/Mark-Gainey.jpg" alt="Mark Gainey" />
				<h5>Mark Gainey <span>Entrepreneur & Executive, Silicon Valley</span></h5>
			</div>
		</figure>
</div>

<div class="grid-item">
	<figure class="testimonial-card">
		<blockquote>I believe in pure democracy, not a country run by bought politicians and well-funded, but faux ideologies. In particular, I do not believe in civilian access to auto-/semi-auto weapons or high-capacity magazines. I believe children and students should have the right to education without the legitimate fear of mass shootings. I do believe in the second Amendment and the right to bear arms. I have personally lived in rural areas such as Sitka, Alaska, where local populations depend on fish and game to feed their families. However, I am passionate about gun control and I believe America needs to unshackle herself from pay-to-play politicians who are corrupting representative democracy.</blockquote>
		<div class="council-member">
			<img src="https://www.americanpromise.net/wp-content/uploads/2019/03/Zoe-Barry.jpg" alt="Zoe Barry" />
			<h5>Zoe Barry <span>Founder and CEO of ZappRx</span></h5>
		</div>
	</figure>
</div>

<div class="grid-item">
	<figure class="testimonial-card">
		<blockquote>Money in politics is allowing the minority to suppress the majority. Money is now taking priority over the republic. We need to even that playing field.</blockquote>
		<div class="council-member">
			<img src="https://www.americanpromise.net/wp-content/uploads/2019/03/Tom-Van-Dyck.jpg" alt="Tom Van Dyck" />
			<h5>Tom Van Dyck <span>Senior Vice President – Financial Advisor, RBC Wealth Management</span></h5>
		</div>
	</figure>
</div>
</div>
<a href="https://www.americanpromise.net/bap-signers-of-the-statement-of-principle/">See All Signatories of the Statement of Principle</a>
  <?php
};

genesis();
