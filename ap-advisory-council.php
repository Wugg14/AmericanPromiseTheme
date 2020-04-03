<?php

/**
* Template Name: AP Advisory Council
* Description: Custom page template for AP Adivosry Council. Built with Masonry.js
*/

namespace AmericanPromise\AmericanPromiseTheme;

// Adds the Council Cards after the entry
add_action( 'genesis_after_entry' , __NAMESPACE__ . '\custom_advisory_cards' );


/**
 * Custom Advisory Cards
 *
 * @since 1.0.0
 *
 * @return void
 */

function custom_advisory_cards(){
	?>
	<div class="grid" style="margin:0 auto;">
		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>It is time to accept the historical gravity of our situation. It is time for Americans of all political viewpoints to come together to win the 28th Amendment — and to renew U.S. democracy again.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/DorisKearnsGoodwin.jpeg')); ?>" alt="Kearns Goodwin"/>
					<h5>Doris Kearns Goodwin <span> Presidential Historian, Pulitzer Prize-winning Author</span><span>Concord, MA</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>I applaud American Promise for bringing together people of good conscience from all political spectrums to stand up and say that, what we care about as everyday people is in peril if we don’t get concentrated money out of American politics. We can regain power in a representative democracy through The Constitution. I believe that we can do this, because - in our history - every time change has come it is from the grassroots not the grass tops. Down with Citizens United and up with the 28th Amendment!</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/NinaTurner.jpg')); ?>')); ?>" alt="Turner"/>
					<h5>Nina Turner<span>Former Ohio State Senator, Professor of History</span><span>Cleveland, OH</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>We need to repair the Constitutional foundation for election spending reform so that all Americans may participate in self-government as equal citizens. When a few individuals and extremely well-funded organizations ‘own the microphone,’ the average citizen’s voice is drowned out. I hope all Americans can come together with American Promise to help in the urgent, cross-partisan work to bring about fundamental change.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/snowe.jpg')); ?>" alt="Snowe"/>
						<h5>Olympia Snowe<span>Former Senator, (R-Maine)</span><span>Lewiston, ME</span></h5>
				</div>
			</figure>
		</div>

        <div class="grid-item">
            <figure class="testimonial-card">
                <blockquote>I have a lot of hope because I believe in the power of people. I am not speculating; the needle of progress moves forward when leaders, citizens, and activists combine conviction with empathy to drive unified change in our democracy. Even in our divisive political moment, everyday people have the ability to make change because the American spirit is defined by overcoming challenges in the face of overwhelming odds. </blockquote>
                <div class="council-member">
                    <img src="<?php echo esc_url(site_url('/wp-content/uploads/2020/04/Manu-Meel.jpg')); ?>" alt="Meel"/>
                    <h5>Manu Meel<span>CEO, BridgeUSA</span><span>San Francisco, CA</span></h5>
                </div>
            </figure>
        </div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>The effort to find common ground on a way to achieve a democracy representative of all of us is the most important project in American politics today. Everything depends on its success. And its success depends upon its being pursued as American Promise has done — with all sides, working together.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/lessig.jpg')); ?>" alt="Lessig"/>
					<h5>Lawrence Lessig<span>Professor of Law, Harvard Law School, Author, Democracy Reform Leader</span><span>Cambridge, MA</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>The roar of special interest money has been getting louder for decades, and it's now drowning out the free speech of individual citizens. I'm honored to be working with Jeff and the rest of the American Promise Advisory Council toward a constitutional amendment that will help restore government 'by the people' and giving voters a chance to secure our Constitutional values.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/pudner.jpg')); ?>" alt="Pudner"/>
					<h5>John Pudner<span>Executive Director, Take Back Our Republic</span><span>Auburn, AL</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>Democracy is the triple-deluxe droolworthy idea that the people can govern and be governed in turn, that We the People are the author and the subject of the law. But that idea is under threat from millionaires, billionaires, and big corporations who use their money to buy access and influence in Washington. But we can fight back. That’s why I’m literally stamping money out of politics and teaming up with American Promise to win a 28th Amendment to restore our democracy.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/cohen.jpg')); ?>" alt="Cohen"/>
					<h5>Ben Cohen<span>Co-founder of Ben & Jerry's Ice Cream and Head Stamper at www.StampStampede.org</span><span>Burlington, VT</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>We need to strengthen our democracy if we want good jobs with good wages, energy sources that are renewable and affordable, and strong, resilient communities. That means we need to win the 28th Amendment to overturn Citizens United and restore equal citizenship and liberty for all.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/Baird.jpeg')); ?>" alt="Baird"/>
					<h5>Donnel Baird<span>Entrepreneur, Founder BlocPower</span><span>New York, NY</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>Plainly put, I don't see how any other major issues that I care deeply about can be solved in a long term way, any crisis safely averted, any sea change toward the betterment of life in the United States of America until we have the 28th Amendment. This Constitutional amendment renews the very essence of what this democracy was founded on and for: equality under the law and the potential to prosper and live with some assurance that you are represented in your government.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/winger.jpg')); ?>" alt="Winger"/>
					<h5>Debra Winger<span>3-Time Oscar Nominated Actress, Executive Producer of the Academy Award-nominated Gasland</span><span>Catskill Mountains, NY</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>Throughout American history, it has been the vigilance of the people denied their rights that our country has kept our democratic values. This fight is no different and it involves the rights of every citizen. The current Supreme Court has hurled our nation straight into a plutocracy—a government ruled by the wealthy—and as history has shown us, it’s up to 'We the People' to stamp big money out of politics.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/wicks.jpeg')); ?>" alt="Wicks"/>
					<h5>Judy Wicks<span>Entrepreneur, Author</span><span>Philadelphia, PA</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>The process of making our nation’s Democracy more representative has been a long and sometimes bloody struggle. Unfortunately many of the most important Constitutional Amendments came only after many long years of turmoil and strife. We the People have unfortunately found ourselves in such a predicament again as a nation. The two pronged attack of the US Supreme Court--rolling back voting rights and increasing the influence of big corporate money in our Democracy--has made this effort to pass a 28th Amendment a moral imperative. I look forward to engaging my fellow America’s Promise Advisory Board members and allies in developing the most constructive and inclusive strategies for advancing this effort forward.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/moore.jpg')); ?>" alt="Moore"/>
					<h5>Greg Moore<span>Executive Director, NAACP National Voter Fund</span><span>Washington, DC</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>Citizens United has genetically altered our democratic DNA, pushing American politics in an oligarchic, corporatist direction. The Constitution begins 'We the people' not 'We the corporations.'</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/leach.jpeg')); ?>" alt="Leach"/>
					<h5>Jim Leach<span>Fmr. Congressman (R-Iowa); fmr. Chair of the National Endowment For the Humanities</span><span>Iowa City, IA</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>The original framers were highly distrustful of the power of corporations. I suspect that the framers would be appalled at Citizens United. We the People—each of us—are only the most recent generation of Americans who have been called upon to defend the framers’ vision of a Constitutional government Of the People, By the People, and For the People. That responsibility is now ours.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/nelson.jpeg')); ?>" alt="Nelson"/>
					<h5>James Nelson<span>Justice, Montana Supreme Court (Ret).</span><span>Helena, MT</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>It did not take 20 years in private industry for me to learn that corporations are not people. This is not to say that people are good and corporations are bad; they are just different. We, the people of Massachusetts, are ready for Congress to propose, and send to the states for ratification, an amendment to the U.S. Constitution that will negate Citizens United and restore the democratic process for all Americans.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/patsky.jpeg')); ?>" alt="Patsky"/>
					<h5>Matt Patsky<span>CEO, Trillium Asset Management</span><span>Boston, MA</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>Where in the Constitution does it say that money is speech? The new 'right' of the few to spend unlimited money in our elections imperils our democracy and all of our rights as equal citizens. Americans must come together to win the 28th Amendment to overturn Citizens United and renew the promise of America.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/dukakis.jpg')); ?>" alt="Dukakis"/>
					<h5>Mike Dukakis<span>Fmr. Governor of Massachusetts; Democratic Nominee for President</span><span>Boston, MA</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>I am excited to join the dynamic team of democracy warriors American Promise has assembled. Agents of change coming together from across all aisles, fighting to get money out of politics and restore the power back to the people. We must win the 28th Amendment.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/crawford.jpg')); ?>" alt="Crawford"/>
					<h5>Cheryl Crawford<span>Executive Director, MassVOTE; 1st Vice President at NAACP Boston Branch</span><span>Boston, MA</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>People across the nation, regardless of their political affiliation, are making clear that corporations or unions should not be able to spend internal funds to influence elections. I urge you to support the call for a 28th Amendment to the Constitution that restores that fundamental promise of our Republic: government of, by, and for the people.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/simpson.jpeg')); ?>" alt="Simpson"/>
					<h5>Alan Simpson<span>Former Senator, (R-Wyoming)</span><span>Cody, WY</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>We are entering the most important era of reform in decades. Americans are far ahead of our leaders in embracing the need for change right now. Building support for the 28th Amendment through American Promise is giving regular people a focused and real vehicle to reduce the influence of the corporate and union money that is driving so much of our political system.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/byrd.png')); ?>" alt="Byrd"/>
					<h5>Kahlil Byrd<span>CEO, Invest America Fund; entrepreneur; leader of cross-partisan initiatives such as Americans Elect</span><span>New York, NY</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>The time for hand wringing and anxious complaints is long past. Just as the prophets cried out, it is time for us to support campaign finance overhaul. To that end, ministers, rabbis and nuns, priests, imams, and theologians across the U.S. are joining forces, calling out the dangers of unchecked money in our elections and advocating for large-scale reform.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/henderson.jpg')); ?>" alt="Henderson"/>
					<h5>Rev. Dr. Katharine Henderson<span>President, Auburn Theological Seminary</span><span>New York, NY</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>I'm honored to formally join an organization that we have already successfully worked with in multiple states to move the 28th Amendment forward. American Promise is helping build a coalition that can actually get something done.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/lipscomb.jpg')); ?>" alt="Lipscomb"/>
					<h5>Steve Lipscomb<span>Managing Director, FixItAmerica.org</span><span>Santa Fe, NM</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>Our country is still waging its long war against inequality in terms of race, gender, sexual orientation, faith, and financial status. Milestones of our progress on these struggles can be seen in the amendments we've made over time to our Constitution. At this moment in history, I think the best step we can take towards a more perfect union is creating an amendment that will put a stop to the corrupting influence of money in politics. Once the money in your wallet no longer has an effect on how well your government represents you, we will have taken another great step towards equality.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/McGrail.jpeg')); ?>" alt="McGrail"/>
					<h5>Ella McGrail<span>College Student</span><span>Portsmouth, NH</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>American Promise is about our equal rights and our equal responsibilities. As citizens, we should be expected to do more than pay taxes and obey the law. All Americans should be given the opportunity to serve so that we learn to move past personal differences to achieve a higher common goal. I’m glad to join Americans who are answering the call to work together to defend democracy against the corruption of concentrated money and power.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/goodwin.jpeg')); ?>" alt="Goodwin"/>
					<h5>Joe Kearns Goodwin<span>US Army Veteran (Iraq, Afghanistan); Businessperson; Executive Director, National Service Now</span><span>Boston, MA</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>If Americans are determined to keep our republic, we have a lot of work to do. We need to join and support the broad-based, non-partisan movement for a constitutional amendment to correct the Supreme Court’s disastrous mistake in Citizens United, and to enable sweeping campaign finance and lobbying reform.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/monk.jpg')); ?>" alt="Monks"/>
					<h5>Bob Monks<span>Executive, Author</span><span>Cape Elizabeth, ME</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>It is always people, of course. And those who have garnered wealth often end up controlling outdated resources - and are fearful of the loss of power the recognition of that obsolescence implies. Using that wealth to maintain power often builds oligarchies that inhibit growth and deny the future. Worse, those oligarchies deny the basis of the Great Experiment, American Democracy: the faith in and trust of the voice of each individual. Our democracy is at stake: its loss will be the result of good people doing nothing. What consolation in knowing that there is the 28th Amendment - and American Promise forwarding the process towards its adoption!</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/doty.jpg')); ?>" alt="Doty"/>
					<h5>Jack Doty<span>Partner</span><span>San Francisco, CA</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>The Supreme Court’s creation of First Amendment speech rights for commercial entities imperils public health, safety, and welfare; the reliability of commercial and consumer information; the stability of financial markets; and environmental stability. The 28th Amendment will help shift the balance of power between capital and the people and the people’s ability to legislate for the common good.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/piety.jpg')); ?>" alt="Piety"/>
					<h5>Tamara Piety<span>Professor of Law</span><span>Tulsa, OK</span></h5>
				</div>
			</figure>
		</div>

		<div class="grid-item">
			<figure class="testimonial-card">
				<blockquote>The 28th Amendment will reduce pressure on companies to spend money on elections and politics, and allow business leaders to remain focused on growing the economy. They can return to making good products, providing good services, and generating returns for shareholders, and they will have less need to divert resources and dilute strategies in a mutually destructive effort to win a large slice of a fixed governmentally-provided pie. In short, the amendments will be good not only for individual voters, but for America’s best companies as well.</blockquote>
				<div class="council-member">
					<img src="<?php echo esc_url(site_url('/wp-content/uploads/2018/12/coates.jpg')); ?>" alt="Coates"/>
					<h5>John Coates<span>Professor</span><span>Cambridge, MA</span></h5>
				</div>
			</figure>
		</div>


    <div class="grid-item">
        <figure class="testimonial-card">
            <blockquote>American Promise has taken on the audacious goal of getting big money out of politics through ratification of a constitutional amendment. This may seem impossible to some, however we know that great democratic reforms are borne out of moments of national crisis. These moments make what appears to be impossible become inevitable. I am honored to join democracy reformers and citizen leaders from across the aisle to restore our core American values.</blockquote>
            <div class="council-member">
                <img src="https://www.americanpromise.net/wp-content/uploads/2019/12/Pic-for-American-Promise_Yael-Bromberg1.jpg" alt="Bromberg"/>
                <h5>Yael Bromberg<span>Yael Bromberg, Esq. Bromberg Law LLC; Former Georgetown University Law Center</span><span>New York, NY</span></h5>
            </div>
        </figure>
    </div>

        <div class="grid-item">
            <figure class="testimonial-card">
                <blockquote>Imagine and think about what our country could look like if our elected officials were actually working to execute the will of the people to advance people's interests instead of money interest and financial interests...What would our country look like if elected officials could spend all their time representing us and studying issues and developing relationships and advancing sound policy instead of sort of being fundraisers who govern on the side a little bit when they get around to it.</blockquote>
                <div class="council-member">
                    <img src="https://www.americanpromise.net/wp-content/uploads/2019/12/greg-berhman.png" alt="Behrman"/>
                    <h5>Greg Behrman<span>Founder & CEO, <strong>NationSwell</strong>; Strategic Advisor, Gen. David Petraeus and Gen. John Allen; fmr. Policy Staff, U.S. State Dept.</span><span>New York, NY</span></h5>
                </div>
            </figure>
        </div>

        <div class="grid-item">
            <figure class="testimonial-card">
                <blockquote>Many people recognize that unlimited political spending is a key driver of the growing distrust in our society and lack of faith in our civic institutions — yet they may not be aware that it is also bad for business. A pay-to-play political system pushes businesses into short-termism and an ‘arms race’ of political spending just to maintain their positions — rather than focusing on real value-creation in the marketplace. This is why it is so important for business leaders to add their voices to those of millions of other Americans calling for a 28th amendment to limit political spending.</blockquote>
                <div class="council-member">
                    <img src="https://americanpromise.net/wp-content/uploads/2019/02/EDoty-150x150.png" alt="Doty"/>
                    <h5>Elizabeth Doty<span>Founder, Leadership Momentum</span><span>San Francisco, CA</span></h5>
                </div>
            </figure>
        </div>


    </div>
	<?php
}

genesis();
