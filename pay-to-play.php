<?php

/**
* Template Name: Pay to Play
* Description: Custom page template for Pay to Play page. Built with Masonry.js
*/

namespace AmericanPromise\AmericanPromiseTheme;

// Adds the Council Cards after the entry
add_action( 'genesis_after_entry' , __NAMESPACE__ . '\custom_business_items' );


/**
 * Custom Business Items
 *
 * @since 1.0.0
 *
 * @return void
 */

 function custom_business_items(){
   ?>
   <div class="first one-half">
     <div class="content-card" style="width: 100%;">
       <div class="content-card__title">
         <h3 style="margin-bottom:0px;">The Problem</h3>
       </div>
       <img class="alignnone wp-image-1744 size-full" src="https://www.americanpromise.net/wp-content/uploads/2019/03/CartoonBAP.png" alt="" />
       <p>In America today, free enterprise and the open exchange of ideas are too often replaced by ‘pay-to-play,’ where firms and special interests compete for favors based on political spending.</p>
    </div>
   </div>

<div class="one-half">
  <div class="content-card" style="width: 100%;">
    <div class="content-card__title">
      <h3 style="margin-bottom:0px;">The Costs</h3>
    </div>
    <img class="size-full wp-image-1862" src="https://www.americanpromise.net/wp-content/uploads/2019/03/MiltonFriedman.png" alt="" />
    <p style="margin-bottom: 0px;">
      In the end, pay-to-play means everyone loses.
      <ul id="bullets">
 	      <li>Our economy suffers when cronyism undermines honest competition and the real drivers of growth.</li>
 	      <li>Large companies confront reputational risk if their government affairs conflict with their stated values.</li>
 	      <li>Innovators and investors face increased volatility and regulatory complexity.</li>
 	      <li>Small business can’t get a seat at the table.</li>
 	      <li>Pay-to-play politics corrupts representative democracy itself, threatening the integrity of our government, enabling influence by foreign actors, and fueling public cynicism and distrust.</li>
      </ul>
    </p>
  </div>
</div>

<div class="first one-half">
  <div class="content-card" style="width: 100%;">
    <div class="content-card__title">
      <h3 style="margin-bottom:0px;">The Root Cause</h3>
    </div>
    <img class="size-full wp-image-1862" src="https://www.americanpromise.net/wp-content/uploads/2019/03/graph-1.png" alt="" />
    <p>
      In the 1970s, an activist Supreme Court began  dismantling the century-old campaign finance framework—assuming this would help business. Since then, spending and contributions have  skyrocketed, with more than 76% contributed by 0.1% of the population.
    </p>
  </div>
</div>

<div class="one-half">
  <div class="content-card" style="width: 100%;">
    <div class="content-card__title">
      <h3 style="margin-bottom:0px;">The Solution</h3>
    </div>
    <img class="size-full wp-image-1862" src="https://www.americanpromise.net/wp-content/uploads/2019/03/TheSolution-1.png" alt="" />
    <p>
      In the current pay-to-play environment, refusing to engage can amount to ‘unilateral disarmament’ for a single business. Together, however, concerned business people can be clear: We want rules that foster honest competition, in the marketplace for goods and services, and in the marketplace of ideas. We support a Constitutional amendment to  allow limits on political spending, as one of several critical reforms needed to secure our republic.
    </p>
  </div>
</div>
<div class="first one-half">
  <div class="content-card" style="width: 100%;">
    <div class="content-card__title">
      <h3 style="margin-bottom:0px;">The Role of Business</h3>
    </div>
    <img class="size-full wp-image-1862" src="https://www.americanpromise.net/wp-content/uploads/2019/04/HBSQuote.png" alt="" />
    <p>
      Because legislators often assume the current environment benefits business, executives are uniquely positioned to get the attention of Congress and set the record straight.
    </p>
  </div>
</div>
<hr />
<div style="clear:both;margin: 25px; text-align: center;"><a href="https://drive.google.com/open?id=1W-Kq9uU3H361uw_fXlKotL3Nn92Y0wim"><button style="margin-right: 5px; background-color: #474747; color: white;">Download Complete Document</button></a><a href="https://drive.google.com/drive/folders/14ZvP7q-8MDQs695vRBpH1D-y9-tb0f3O?usp=sharing"><button style="margin-right: 5px; background-color: #474747; color: white;">Resource Library</button></a><a href="https://www.americanpromise.net/take-action/join-a-program/business-for-american-promise/bap-join-us/"><button style="background-color: #474747; color: white;">Take Action</button></a></div>
   <?php
 }

genesis();
