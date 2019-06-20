<?php

/**
* Template Name: BAP FAQ
* Description: Custom page template for BAP FAQ
*/
namespace AmericanPromise\AmericanPromiseTheme;

remove_action( "genesis_loop", "genesis_do_loop" );
// add a custom loop
add_action( "genesis_loop" , __NAMESPACE__ . '\bap_FAQ' );

function bap_FAQ(){
?>
<div class="anchor">
<a name="top"></a>
</div>
<div>
  <h1>Contents:</h1>
  <a href="#problem"><h3>The Problem</h3></a>
  <div style="margin-left: 25px;">
    <a href="#problem">Why is pay-to-play politics bad for business and society?</a>
  </div>
  <a href="#costs"><h3>The Costs</h3></a>
  <div style="margin-left: 25px;">
    <a href="#costs">How does pay-to-play politics affect me and my business?</a>
  </div>
  <a href="#root"><h3>The Root Cause</h3></a>
  <div style="margin-left: 25px;">
    <a href="#root">How has pay-to-play politics gotten so bad?</a>
  </div>
  <a href="#solution"><h3>The Solution</h3></a>
  <div style="margin-left: 25px;">
    <a href="#pay-to-play">What is the solution to pay-to-play politics?</a>
    <br />
    <a href="#need">Why do we need an amendment?</a>
    <br />
    <a href="#say">What does the 28th Amendment say?</a>
    <br />
    <a href="#lead">Who is leading the effort for the 28th Amendment?</a>
    <br />
    <a href="#who">Who is American Promise?</a>
    <br />
    <a href="#affiliation">What is American Promise's political affiliation?</a>
    <br />
    <a href="#funded">How is American Promise funded?</a>
    <br />
    <a href="#process">What’s the process for a passing a Constitutional Amendment?</a>
    <br />
    <a href="#consensus">How do we get the consensus—the super-majority—needed for the 28th Amendment when the country is so divided?</a>
  </div>
  <br/>
  <h3><a href="#unique">The Unique Role of Business</a></h3>
    <div style="margin-left: 25px;">
      <a href="#involved">Why should business get involved?</a>
      <br />
      <a href="#BAP">What is Business for American Promise (BAP)?</a>
      <br />
      <a href="#good">Is the 28th Amendment good for business?</a>
    </div>
    <br/>
  <h3><a href="#action">Moving to Action</a></h3>
    <div style="margin-left: 25px;">
      <a href="#strategy">What is American Promise’s strategy for 2019?</a>
      <br />
      <a href="#bap-strategy">What is Business for American Promise’s strategy for 2019?</a>
      <br />
      <a href="#effective">How can I help most effectively?</a>
      <br />
      <a href="#types">What types/sizes of businesses does Business for American Promise focus on?</a>
      <br />
      <a href="#endorse">Can my business or professional association endorse BAP’s efforts?</a>
      <br />
      <a href="#personally">What if I’m personally interested but don’t want to, or can’t, get my business involved?</a>
      <br />
      <a href="#pressing">I am working on other pressing issues. What makes the 28th Amendment so important?</a>
      <br />
      <a href="#dues">How much are BAP membership dues?</a>
      <br />
      <a href="#anonymous">Are BAP memberships anonymous?</a>
      <br />
      <a href="#questions">Still have questions?</a>
    </div>
</div>
<hr/>
<div class="anchor">
  <a name="problem"></a>
</div>
<h1><b>The Problem</b></h1>
<h2><b>Why is pay-to-play politics bad for business and society?</b></h2>
<i><p>Pay-to-play politics is a losing proposition for society because it undermines representative democracy and the integrity of our government, enables influence by foreign actors, and fuels  public cynicism and distrust. For example, elected U.S. officials now spend up to 70% of their time raising money, in races 20 times more costly than in 2000.
</p><p>
Pay-to-play is also a losing proposition for business because it forces companies to compete based on political influence rather than the value they create in the marketplace. It opens the door to “legalized extortion,”—where businesses get caught up in an arms race of political spending and gain no sustainable advantage. Refusing to play amounts to “unilateral disarmament,” but political spending creates reputational risks in a world of increasing pressure for transparency.
</p><p>
To learn more, please see <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/pay-to-play-is-a-losing-proposition-for-business-society/">Why Pay-to-Play Politics is a Losing Proposition for Business and Society.</a>
</p></i>
<a href="#top">Return to Top</a>

<hr />
<div class="anchor">
  <a name="costs"></a>
</div>
<h1><b>The Costs</b></h1>
<h2><b>How does pay-to-play politics affect me and my business?</b></h2>
<i><p>Whatever issue concerns you most—from the tax code to federal deficits, corporate subsidies to  complex tariff exclusion processes, uncertain energy policy to skyrocketing prescription drug costs, the opioid epidemic, economic inequality or societal distrust—pay-to-play politics is almost certainly at the root of the issue.
</p><p>
The fact is, businesses and the economy suffer when cronyism and government favoritism undermine honest competition, putting those that compete based on value at a disadvantage. As a large or mid-size company, you likely face growing pressure from shareholders, watchdog groups, NGOs, customers, and employees to disclose your political spending, and then put your brand and reputation at risk if your government affairs efforts do not align with your stated values. As an entrepreneur or investor, you may struggle to invest at the level you want to, amidst the increased uncertainty and volatility created when regulations and rules are changed as political favors. And finally, as a citizen, you may be troubled by the ways that pay-to-play politics corrupts representative democracy itself, enabling influence by foreign actors, and fueling public cynicism and distrust.
</p><p>
To learn more, please see <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/pay-to-play-is-a-losing-proposition-for-business-society/">Why Pay-to-Play Politics is a Losing Proposition for Business and Society.</a>
</p></i>
<a href="#top">Return to Top</a>

<hr />
<div class="anchor">
  <a name="root"></a>
</div>
<h1><b>The Root Cause</b></h1>
<h2><b>How has pay-to-play politics gotten so bad?</b></h2>
<i><p>In the 1970s, an activist Supreme Court began dismantling the century-old U.S. campaign finance framework. A series of decisions has authorized PACs and Super PACs and enabled corporations, unions, special interest groups, and individuals to spend unlimited amounts on political campaigns. Since then, spending and contributions have skyrocketed, with more than 76% contributed by 0.1% of the population. Much of this money flows through non-disclosing non-profits.
</p><p>
Ironically, these changes were originally intended to benefit business, but with severe unintended consequences for business and the economy. For example, businesses now face repeated and escalating requests for contributions that can feel like “legalized extortion” and an arms race of political spending. Thus, according to former Sen. Alan Simpson (R-WY), “Money’s dominance over politics…is a growing crisis that prevents us from tackling anything else.”
</p><p>
To learn more, please see <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/pay-to-play-is-a-losing-proposition-for-business-society/">Why Pay-to-Play Politics is a Losing Proposition for Business and Society.</a>
</p></i>
<a href="#top">Return to Top</a>

<hr />
<div class="anchor">
  <a name="solution"></a>
</div>
<h1><b>The Solution</b></h1>
<div class="anchor">
  <a name="pay-to-play"></a>
</div>
<h2>What is the solution to pay-to-play politics?</h2>
<i><p>
The current dysfunction of our political system is not self-correcting; systemic change is required to restore the health of our civic institutions and the integrity of our government.
</p><p>
Amazingly, 75% of Americans agree on the solution to pay-to-play politics; they are convinced that we need a 28th Constitutional Amendment to end unlimited political spending, distinguish between legal entities and natural persons, and affirm our national interest in political equality. Thus far, twenty states have passed resolutions calling for the 28th Amendment as one of several critical reforms needed to secure our republic.
</p><p>
To learn more, please see <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/pay-to-play-is-a-losing-proposition-for-business-society/">Why Pay-to-Play Politics is a Losing Proposition for Business and Society.</a>
</p></i>
<div class="anchor">
  <a name="need"></a>
</div>
<h2>Why do we need an amendment?</h2>
<i><p>
  We need a constitutional amendment because we have a constitutional problem. A series of narrow decisions over the past 40 years has locked the Supreme Court into a doctrine that effectively denies the principle of political equality.
  </p><p>
  While individual reforms—such as disclosure, ranked-choice voting, and open primaries—are crucial, until we clarify the foundational principle of political equality through the 28th Amendment, our system of representative government will continue to be at risk. The 28th Amendment provides that foundation, by establishing the government’s compelling interest in political equality, authorizing our Congress and the states to set common sense limits on political spending and distinguish between legal entities and natural persons. Without an amendment, Congress and the states are prohibited from setting limits on outside political spending and other reforms are at risk of being swept away by a change in the political winds.
  </p><p>
  to learn more, please see <a href="https://www.americanpromise.net/who-we-are/faq/">the American Promise FAQ</a>
</p></i>
<div class="anchor">
  <a name="say"></a>
</div>
<h2>What does the 28th Amendment say?</h2>
<i><p>
  To begin, it is essential to know what the 28th Amendment will do: 1) secure fair, free elections; 2) protect the rights of all Americans to equal participation and representation; and 3) return to original liberties for people rather than new privileges claimed for the legal entities such as corporations, unions, and special interest groups.
  </p><p>
  As for what the 28th Amendment will say, American Promise’s <a href="https://www.americanpromise.net/take-action/join-a-program/writing-the-28th-amendment/">Writing the 28th Amendment program</a> is bringing together citizens, legal scholars, judges, lawyers, representatives, and issues advocates to discuss, debate, deliberate, and decide on the language that will be proposed and ratified. In the process, our goal is to re-enliven American’s faith in our civic processes and experience of being active participants in government of, by and for the people.
  </p><p>
  The strongest consensus language to-date is reflected in the bi-partisan Democracy for All Amendment (HJ Res 2) introduced into the U.S. House of Representatives in January 2019 by Rep. John Katko (R-NY) and Rep. Ted Deutch (D-FL).
  </p><p>
  To learn more, please see <a href="https://www.americanpromise.net/take-action/join-a-program/writing-the-28th-amendment/">the Writing the 28th Amendment</a> and <a href="https://www.congress.gov/bill/116th-congress/house-joint-resolution/2/text">Democracy for All Amendment.</a>
</p></i>

<div class="anchor">
  <a name="lead"></a>
</div>

<h2>Who is leading the effort for the 28th Amendment?</h2>
<i><p>
  Hundreds of thousands of Americans across the country are working in their cities, towns, and state legislatures to advance the 28th Amendment. Twenty states and 800 cities and towns have already passed resolutions calling for the amendment, and groups of all political persuasions are working to advance this cause.
  </p><p>
  <a href="https://www.americanpromise.net/">American Promise</a> is the leading non-partisan organization working to empower, support and unite these efforts, with a <a href="https://www.americanpromise.net/2019_roadmap_to_success/">10-year strategy</a> for providing the infrastructure and focus needed to win. We are a member of the <a href="https://www.bridgealliance.us/">Bridge Alliance</a>, and regularly work with other groups across the political spectrum to advance effective structural reform that restore representative democracy.
  </p><p>
  to learn more, please see <a href="https://www.americanpromise.net/">American Promise</a>.
</p></i>

<div class="anchor">
  <a name="who"></a>
</div>

<h2>Who is American Promise?</h2>
<i><p>
  <a href="https://www.americanpromise.net/">American Promise</a> is the leading non-partisan organization working to empower, support and unite efforts to pass the 28th Amendment, with a <a href="https://www.americanpromise.net/2019_roadmap_to_success/">10-year strategy</a> for providing the infrastructure and focus needed to win.
  </p><p>
  American Promise was <a href="https://www.americanpromise.net/who-we-are/about-us/staff/">co-founded</a> in 2016 by Jeff Clements, President, and John Wass, Board Chair. Jeff is an attorney and the author of Corporations Are Not People (Berrett-Koehler, 2014). His articles and opinion pieces have appeared widely, including in US News & World Report, The Boston Globe, Salon, The Hill, Fox News, MSNBC and many others. John Wass is the CEO of Profit Isle, Inc. Earlier in his career, John was the co-founder and CEO of WaveMark and led the building of global infrastructure at Staples as the company grew from 3 to more than 1,000 stores.
  </p><p>
  Fiercely non-partisan, our <a href="https://www.americanpromise.net/who-we-are/about-us/ap-advisory-council/">Advisory Council</a> includes members as diverse as former Sen. Alan Simpson (R-WY) & former Gov. Michael Dukakis (D-MA), former Sen. Olympia Snowe (R-ME) & Our Revolution President Nina Turner, and Take Back Our Republic Executive Director John Pudner & Ben & Jerry’s Ice Cream Co-founder Ben Cohen. We are a member of the <a href="https://www.bridgealliance.us/">Bridge Alliance</a>, and regularly work with other groups across the political spectrum to advance effective structural reform that restore representative democracy.
</p></i>

<div class="anchor">
  <a name="affiliation"></a>
</div>

<h2>What is American Promise's political affiliation?</h2>
<i><p>
  We are Americans of all parties and no party. Fiercely non-partisan, our <a href="https://www.americanpromise.net/who-we-are/about-us/ap-advisory-council/">Advisory Council</a> includes members as diverse as former Sen. Alan Simpson (R-WY) & former Gov. Michael Dukakis (D-MA), former Sen. Olympia Snowe (R-ME) & Our Revolution President Nina Turner, and Take Back Our Republic Executive Director John Pudner & Ben & Jerry’s Ice Cream Co-founder Ben Cohen. We recognize that while we may disagree on many issues, Americans need to come together to authorize spending limits that protect our democratic republic.
  </p><p>
  To learn more, please see <a href="https://www.americanpromise.net/who-we-are/about-us/ap-advisory-council/">American Promise Advisory Council</a>.
</p></i>

<div class="anchor">
  <a name="funded"></a>
</div>

<h2>How is American Promise funded?</h2>
<i><p>American Promise operates as two distinct organizations with a shared mission to inspire, educate, empower, and organize Americans to win a 28th Amendment to the Constitution. American Promise was founded in 2016 by Jeff Clements and John Wass, who provided seed funding, and continue to volunteer without compensation for American Promise.<br/>
<br/>
American Promise, Inc, a non-profit organization recognized as tax-exempt under IRC section 501(c)(4) is home to our Citizen UpRising programs which offer support for all Americans who are joining us as volunteers on <a title="Take Action" href="http://www.americanpromise.net/take-action/">ballot initiative efforts, state and local 28th Amendment resolutions, the American Promise candidate pledge, citizen lobbying training and support, and more</a>. This work is made possible by our thousands of members around the country who contribute what they can to American Promise, Inc. 95% of these contributions are under $200. Our average contribution is $35. Funding in this area is pivotal to the success of securing the 28th Amendment.
<br/>
</br>
To see a list of American Promises Major Donors <a href="https://www.americanpromise.net/who-we-are/faq#donors">click here</a>
</p></i>

<div class="anchor">
  <a name="process"></a>
</div>

<h2>What’s the process for a passing a Constitutional Amendment?</h2>
<i><p>
  The Constitution provides that an amendment may be proposed either by the Congress with a two-thirds majority vote in both the House of Representatives and the Senate or by a constitutional convention called by Congress upon request by two-thirds of the state legislatures. Once an amendment is passed, it must be ratified by three-fourths of the states. Though it is reasonable to wonder if Congress and the states can manage to do this, all 27 amendments of our Constitution have passed by 2/3 of Congress and been ratified by 3/4 of the states. It’s what Americans do: <a href="https://www.youtube.com/watch?v=K6igolnTvqA&feature=youtu.be">watch this.</a>
</p></i>

<div class="anchor">
  <a name="consensus"></a>
</div>

<h2>How do we get the consensus—the super-majority—needed for the 28th Amendment when the country is so divided?</h2>
<i><p>
  Amazingly, the amendment is one issue on which American citizens agree. 75% of Americans support it, and twenty states have passed resolutions instructing their Congressional delegations to act on it.
  </p><p>
  Historically, amendments are born in times of turmoil, when everyday citizens recognize a threat to the republic’s core principles and move into action. Between 1865 and 1870, Americans passed three constitutional amendments. Between 1961 and 1971, we passed four. With the 28th Amendment, Americans are rising to the occasion once again.
</p></i>
<a href="#top">Return to Top</a>
<hr/>

<div class="anchor">
  <a name="unique"></a>
</div>

<h1><strong>The Unique Role of Business</strong></h1>
<div class="anchor">
  <a name="involved"></a>
</div>
<h2>Why should business get involved?</h2>
<i><p>
  Most business people believe in a strong economy where companies compete based on the value they create in the marketplace, rather than their level of political spending. Because legislators are likely to assume that the current environment benefits business, business leaders are in a unique position to get their attention and set the record straight: rules that foster pay-to-play threaten innovation, healthy markets, and the real drivers of economic growth. In addition, many business leaders are concerned, as citizens, about representative democracy and want to see our country working as it was intended.
  </p><p>
  To learn more, please see <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/pay-to-play-is-a-losing-proposition-for-business-society/">Why Pay-to-Play Politics is a Losing Proposition for Business and Society.</a>
</p></i>

<div class="anchor">
  <a name="BAP"></a>
</div>

<h2>What is Business for American Promise (BAP)?</h2>
<i><p>
  Business for American Promise (BAP), is a program of American Promise. Our mission is to unite business leaders in non-partisan advocacy for a 28th Amendment to end political spending, restore honest competition, and reestablish integrity in government. We are building and supporting a national network of chapters to provide educational forums and tools to help business leaders clarify where they stand and take effective action to advance reasonable reform.
  </p><p>
  To learn more, please see <a href="https://www.americanpromise.net/business">Business for American Promise</a>.
</p></i>

<div class="anchor">
  <a name="good"></a>
</div>

<h2>Is the 28th Amendment good for business?</h2>
<i><p>
  <a href="https://www.ced.org/events/perspectives-from-business-on-campaign-finance-reform">89% of business people favor limits</a> on how much money individuals, corporations, labor, and independent political organizations can spend.
  </p><p>
  The fact is, in the current pay-to-play environment, refusing declining to engage can amount to “unilateral disarmament” for a single business. Together, however, concerned business people can be clear: We want rules that foster honest competition, in the marketplace for goods and services and in the marketplace of ideas.This is why Business for American Promise members include business leaders of all size companies in every sector who share a commitment to honest competition and integrity in government. Nothing in the 28th Amendment will prevent corporations, unions or other groups from lobbying, petitioning the government or arguing their case to elected officials.
  </p><p>
  To learn more, please see <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/pay-to-play-is-a-losing-proposition-for-business-society/">Why Pay-to-Play Politics is a Losing Proposition for Business and Society.</a>
</p></i>
<a href="#top">Return to Top</a>
<hr/>

<div class="anchor">
  <a name="action"></a>
</div>

<h1><strong>Moving to Action</strong></h1>
<div class="anchor">
  <a name="strategy"></a>
</div>
<h2>What is American Promise’s strategy for 2019?</h2>
<i><p>
American Promise’s <a href="https://www.americanpromise.net/2019_roadmap_to_success/">roadmap for success</a> includes building a national network of Business for American Promise chapters in 2019. Our vision is to provide educational forums, tools, and support to help business leaders clarify where they stand and take effective action to advance reasonable reform.
</p></i>

<div class="anchor">
  <a name="bap-strategy"></a>
</div>

<h2>What is Business for American Promise’s strategy for 2019?</h2>
<i><p>
  We have set ambitious goals for 2019. Building on our two prototype chapters (San Francisco Bay Area and Boston), we have begun engaging business professionals across the country to form a National Business for American Promise Network. Our goals for 2019 include:
  </p>
  <ul>
    <li>Establish three new BAP chapters in strategic locations and support others based on local interest</li>
    <li>Provide tools and support to make it easy for business professionals to take action with a limited investment of time</li>
    <li>Support the BAP chapter network in achieving 4 critical outcomes
    <ul>
      <li>Add 400 signers to our Statement of Principle</li>
      <li>Engage 300 new members</li>
      <li>Host 10 events</li>
      <li>Write 20 op-eds or letters to the editor</li>
    </ul>
    </li>
  </ul>
<p>
To learn more, please see <a href="https://www.americanpromise.net/new-business-for-american-promise/">Business for American Promise: Take Action</a>.
</p></i>

<div class="anchor">
  <a name="effective"></a>
</div>

<h2>How can I help most effectively?</h2>
<i><p>
  Business for American Promise is designed to enable busy professionals to take effective action with a limited investment of time. If you agree this is a critical priority for our country, there are three ways to take action:
  </p>
  <ol>
    <li><a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/become-a-member-of-bap/"><strong>Join.</strong></a> Join your local BAP <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/building-a-national-network/">chapter</a>, and gain access to tools and support that enable you to take effective action with a minimum investment of time. Or, gather with a few colleagues and <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/start-a-chapter/">start a new chapter</a> in your area.</li>
    <li><a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/statement-of-principle/#believe"><strong>Sign.</strong></a> Sign our non-partisan Statement of Principle to show your support for honest competition, representative democracy and integrity in government.</li>
    <li><a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/share/"><strong>Share.</strong></a> Tap your network and help us articulate the business case for solving pay-to-play politics. Convene a salon with trusted colleagues, host an event with your business school alumni group or write a letter to the editor. By <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/share/">adding your name</a> to our local list, you will receive updates and access to BAP tools so you can have an impact with a limited investment of time. </li>
  </ol>
  <p>
  If you would rather take action in ways other than as a business professional, check out our parent organization <a href="https://www.americanpromise.net/">American Promise</a>, which offers programs tailored for grassroots citizen leaders, legal professionals, veterans, and faith groups.
  </p><p>
  To learn more, please see <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/bap-join-us/">Business for American Promise: Take Action</a>.
</p></i>

<div class="anchor">
  <a name="types"></a>
</div>

<h2>What types/sizes of businesses does Business for American Promise focus on?</h2>
<i><p>
  BAP members are diverse, from small (1-50 employees) and mid-size (50-1000) to large (1000+) companies in every sector, working in roles spanning the C-suite to academia.
</p></i>

<div class="anchor">
  <a name="endorse"></a>
</div>

<h2>Can my business or professional association endorse BAP’s efforts?</h2>
<i><p>
  Yes, we welcome organizational endorsements. Please <a href="mailto:bap@americanpromise.net">contact</a> us to discuss how supporting non-partisan, foundational reform to end the business arms race for political influence may actually reinforce your firm’s values and brand, and reduce reputational risk.
</p></i>

<div class="anchor">
  <a name="personally"></a>
</div>

<h2>What if I’m personally interested but don’t want to, or can’t, get my business involved?</h2>
<i><p>
Many business professionals share a deep concern for our country and are committed to restoring honest competition and reestablishing integrity in government but face other concerns and responsibilities when they consider endorsing reforms as an organization.
</p><p>
With that in mind, Business for American Promise invites professionals to get involved first as individuals. Signing our <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/statement-of-principle/">Statement of Principle</a> or <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/become-a-member-of-bap/">joining BAP</a> as an individual are highly effective in advancing the 28th Amendment, because business people are uniquely positioned to clarify that a pay-to-play environment damages the real drivers of American innovation, competitiveness, and long-term prosperity. You may choose to include the name of your company or not.
</p><p>
And, when and if you are ready, we would welcome an endorsement from your business.  Please <a href="mailto:bap@americanpromise.net">contact us</a> to discuss how supporting non-partisan, foundational reform to end the arms race for political influence may actually reinforce your firm’s values and brand, and reduce reputational risk.
</p></i>

<div class="anchor">
  <a name="pressing"></a>
</div>

<h2>I am working on other pressing issues. What makes the 28th Amendment so important?</h2>
<i><p>
Runaway political spending is blocking thoughtful, pragmatic action on almost every issue Americans care about many things, including our creeping tax code, ballooning deficits, regulatory complexity, escalating prescription drug use and costs, energy policy, economic inequality, and societal distrust. Indeed, according to former Sen. Alan Simpson (R-WY), “Money’s dominance over politics...is a growing crisis that prevents us from tackling anything else.”
</p><p>
The fact is, whatever issue concerns you most, as a business professional and as a citizen, incorporating the 28th Amendment into your plan of action enables you to address the root cause and increase your long-term impact.
</p></i>

<div class="anchor">
  <a name="dues"></a>
</div>

<h2>How much are BAP membership dues?</h2>
<i><p>
Annual dues for individual members in Business for American Promise range from $280 (minimum) to $2800/year.
</p><p>
Your membership dues help demonstrate that business is concerned about representative democracy, enables us to provide specialized tools and support for BAP chapters, and contributes to grassroots efforts across the nation.
</p><p>
We invite you to considering <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/become-a-member-of-bap/">Joining BAP</a> and exploring other ways to <a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/bap-join-us/">Take Action</a>.
</p></i>

<div class="anchor">
  <a name="dues"></a>
</div>

<h2>Are BAP membership dues and contributions tax-deductible?</h2>
<i><p>
BAP dues are used for 510(c)(4) purposes of non-partisan advocacy of a 28th Amendment to end unlimited political spending, foster honest competition, and reestablish integrity in government. These and any other 501(c)(4) contributions are not tax-deductible. Contributions to American Promise's 501(c)(3) support our 28 Founders Fund(s) and charitable donations are tax-deductible.
</p></i>

<div class="anchor">
  <a name="anonymous"></a>
</div>

<h2>Are BAP memberships anonymous?</h2>
<i><p>
American Promise is dedicated to principles of full transparency in disclosing the name of all donors. American Promise’s policy is to record and publish full name recognition and contribution level details of individual, foundation, and in-kind gifts on its website and in its Annual Report.
</p><p>
If a donor requests anonymity for their contribution, American Promise will accept the contribution only after discussion with the donor. If the donor still requests anonymity, it will be allowed only when approved by the Board of Directors, which will consider and weigh all relevant factors including the reasons for the request (e.g., personal safety or faith), and the amount of the contribution (the larger the contribution, the more likely American Promise will insist on full disclosure.) In the rare and unlikely instance when an anonymous contribution is approved by the Board, American Promise will disclose the amount of the contribution, the reasons given for the request for anonymity, and the reasons for the Board’s decision.
</p></i>

<div class="anchor">
  <a name="questions"></a>
</div>
<h2>Still have questions?</h2>
Call American Promise at 978-254-6275.
</p><p>
<a href="#top">Return to Top</a>
</p>
<br/>
<?php
}

genesis();
