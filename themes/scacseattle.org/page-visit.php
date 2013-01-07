<?php
/*
Template Name: Page - Visit
*/

/******* This page does nto use #primary ***********/

get_header(); ?>

    <div id="page-visit" class="content-area">
      <div id="content" class="page site-content clearfix" role="main">
        
        <!-- Place holder img !-->
		<h1>Contact &amp; Directions</h1>
		<div class="col-two-thirds">

      <div class="map-directions">
        <form action="http://maps.google.com/maps" method="get" target="_blank">
          <label for="saddr"></label>
          <input type="text" name="saddr" value="From" id="startAddr" />
          <input type="text" name="daddr" value="2803 S. Orcas St., 98108" id="destAddr" />
          <input type="submit" value="Get directions" />
        </form>
      </div>

			<iframe width="720" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2803+Orcas+St.+Seattle,+WA,+98108&amp;aq=&amp;sll=47.613028,-122.342064&amp;sspn=0.281899,0.617294&amp;ie=UTF8&amp;hq=&amp;hnear=2803+S+Orcas+St,+Seattle,+Washington+98108&amp;t=m&amp;ll=47.55475,-122.302637&amp;spn=0.027804,0.054932&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=2803+Orcas+St.+Seattle,+WA,+98108&amp;aq=&amp;sll=47.613028,-122.342064&amp;sspn=0.281899,0.617294&amp;ie=UTF8&amp;hq=&amp;hnear=2803+S+Orcas+St,+Seattle,+Washington+98108&amp;t=m&amp;ll=47.55475,-122.302637&amp;spn=0.027804,0.054932&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>

		</div>
		<div class="col-one-third">
      <p>
        <b>Service Times</b>
        <br />
        8:30am - Cantonese Service 1<br />
        10:00am - English Service<br />
        11:30am - Cantonese Service 2
      </p>
			<p>
        <b>Address</b><br />
        Seattle Chinese Alliance Church<br />
				2803 S. Orcas St.<br />
				Seattle, WA 98108
			</p>
			<p>
				<b>Contact Us</b><br />
				Main building<br />
				(206) 725-0771 ext. 10<br />
				<a href="mailto:pollywong@scacseattle.org" class="email-link">Polly Wong</a>
			</p>
			<p>
				(206) 725-0771 ext. 11<br />
				<a href="mailto:bettywong@scacseattle.org" class="email-link">Betty Wong</a>
			</p>
		</div>
		<div class="clear"></div>

      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php get_footer(); ?>
