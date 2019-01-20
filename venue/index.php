<?php include '../info.inc' ?><!doctype html>
<html lang="en">
	<head>
		<title>#PerfMatters :: Venue details</title>
		<meta name="viewport" content="width=device-width">

		<meta name="twitter:image" content="https://perfmattersconf.com/photos/theatre_02.png"/>
		<meta name="twitter:url" content="https://www.perfmattersconf.com/venue" />
		<meta property="og:title" content="#PerfMatters Conference :: details and directions" />
		<meta property="og:type" content="article" />
		<meta property="og:image" content="https://perfmattersconf.com/photos/theatre_02.png" />
		<meta name="author" content="Estelle Weyl" />
		<meta property="og:url" content="https://www.perfmattersconf.com/venue/" />
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@perfmattersconf">
		<meta name="twitter:title" content="#PerfMatters Conference <? echo $year ?> :: Event details">
		<meta property="og:description" content="Accessibility and inclusion, including venue, hotels, and location information, for our two-day community Web Performance conference happening <? echo $date ?> in Redwood City, CA." />
		<link rel="stylesheet" href="../css/style.css"/>
		<style>
			@media screen and (min-width: 55em) {
				section > * {
				 width: 54em;
				}
				.subnav {display: flex;}
			}
			section:not([id]):not([class]) {height: 100px;}
			#hotels a { color: #d91962;}
		</style>
	</head>

	<body id="home">
		<aside>
			<div class="container-large">
		    <?php echo $tagline ?>
		  </div>
		</aside>

		<header>
			<hgroup class="container-large">
				<?php echo $logo ?>

				<?php echo $nav ?>

				<a href="/" class="circle">
					<h1>#PerfMatters</h1>
					<h2>Redwood City, CA <br/>
					<?php echo $date ?></h2>
				</a>

				<div>
					<h1>Conference Location</h1>
					<p>Cañada College Theater<br/>
					4200 Farm Hill Blvd<br/>
					Redwood City, CA 94061</p>
					<ul class="subnav">
						<li><a href="#venue">Venue</a></li>
						<li><a href="#hotels">Hotels</a></li>
						<li><a href="#directions">Directions</a></li>
						<li><a href="#accessibility">Accessibility</a></li>
					</ul>
				</div>
			</hgroup>
		</header>

		<main>
			<section id="venue">
				<div class="container-small">
					<h2>Venue</h2>

					<p>The #PerfMatters Conference will take place <? echo $date ?>, in the Cañada College Theater.</p>

					<p><img src="../photos/theatre_02.jpg" alt="modern theater with 516 seats" style="max-width: 90%;"></p>

					<p>The theatre is ADA compliant with handicap parking spots in front of the theatre. </p>

					<p><img src="../photos/grove_01.jpg" alt="people sitting on a booth bench with people milling aroud in the background eating food" style="max-width: 90%;"></p>

					<p>Coffee, snacks, lunch and the after party will be held in The Grove. The Grove, a 4,537-square-feet open space lounge, has a beautiful view, and is also ADA compliant.</p>
				</div>
			</section>

			<section></section>

			<section id="hotels">
				<div class="container-small"><!--
					<h2>Hotels</h2>

					<h3>Marriott hotels is offering #PerfMatters a special group rate: </h3>

					<p>To receive the group room rate, sign up at the links below. If you want to book the even lower rates for Saturday and Sunday night, call the hotels directly and mention that you are registering as part of the #PerfMatters Conference room block. Rates will be honored until March 8, 2019, or until the hotel sells out, whichever comes first.</p>

					<p>
						<strong>Courtyard by Marriott Redwood City</strong><br>
						600 Bair Island Rd, <br>
						Redwood City, CA 94063 <br>
						$264 per night / $139 weekend night
					</p>

					<p>This new hotel (less than a year) is closer to downtown Redwood City, which actually has a semblance of a night life.</p>

					<ul>
						<li><a href="http://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Perfmatters%5ESFORD%60PMCPMCA%7CPMCPMCB%60264%60USD%60false%605%603/26/18%603/29/18%603/8/18&app=resvlink&stop_mobi=yes" target="_blank">Courtyard Redwood City online registration</a></li>

						<li>Call the hotel, especially if you want to include a weekend: 1+(650) 216-9435</li>
					</ul>

					<p>
						<strong>SpringHill Suites by Marriott Belmont Redwood Shores</strong><br>
						1401 Shoreway Rd, <br>
						Belmont, CA 94002<br>
						$249  per night / $119 weekend night
					</p>

					<p> This brand new hotel (less than 2 months old) is less accessible to restaurants and any semblance of activity, which may be a good thing for some.</p>

					<ul>
						<li><a href="http://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Perfmatters.com%20Conference%5Esfobm%60pmcpmca%7Cpmcpmcb%60249%60USD%60false%606%603/26/18%603/29/18%602/26/18&app=resvlink&stop_mobi=yes" target="_blank">SpringHill Suites Belmont Redwood Shores Online Registration</a><a href="http://www.marriott.com/meeting-event-hotels/group-corporate-travel/groupCorp.mi?resLinkData=Perfmatters.com%20Conference%5Esford%60pmcpmca%7Cpmcpmcb%60264%60USD%60false%604%603/26/18%603/29/18%602/26/18&app=resvlink&stop_mobi=yes" target="_blank"></a></li>

						<li>Call the hotel, especially if you want to include a weekend: 1+(650) 481-0185</li>
					</ul>

					<p>Both hotels are offering our group:</p>

					<ul>
						<li>complimentary breakfast</li>
					  <li>complimentary wifi</li>
					  <li>complimentary parking</li>
					</ul>-->

					<h2>Room Share</h2>

					<p>Looking to save money by sharing a room? Looking to help someone out who doesn't have the budget for a bay area hotel room? Please <a href="https://join.slack.com/t/perfmattersconf/shared_invite/enQtMzE1NDcxNTI0NDk2LWM1NDFmODhlYmJlNzkwMWQ5NWUwNTJkZmE4Yjg4MDkyNDgwZWEyNzdiM2ZhNzE3M2RlNjM0OWZhODBkMzFlNGI">join the #PerfMatters Slack channel</a> and find a roommate. </p><p>If you do have a hotel room, consider offering up the second bed in your hotel room to someone who doesn't have corporate sponsorship.</p>

					<h2>Note about Pacific Euro Hotel</h2>

					<p>The Pacific Euro Hotel is a 1-star Hotel at 868 Main St, Redwood City, CA: If you want to stay at the most inexpensive place around, this is it. It's a dumpy hotel with parking that is metered from 10:00am to 6:00pm. I think it has shared bathrooms and the internet is not secure, but the location and price are great. The hotel is located downtown, near all the restaurants and coffee shops. There are a few homeless people on that block, but it's a safe city.  We can not recommend this place at all. However, if you don't have corporate sponsorship for your hotel stay, it is the only place on the Peninsula that is under $100. I think it's about $69/night with shared bathroom, $89/night with your own bathroom. </p>
				</div>
			</section>

			<section id="directions">
				<div class="container-small">
					<h2>Getting here</h2>

					<p>Cañada College is a community college located half way between San Francisco and Silicon Valley.  The campus is at 4200 Farm Hill Boulevard in an unincorporated area of San Mateo County, California, just off Highway 280.</p>

					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12670.165899946745!2d-122.2650223!3d37.4479354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x436a6bd31c932d38!2sCa%C3%B1ada+College!5e0!3m2!1sen!2sus!4v1502402031392" width="600" height="450" frameborder="0" style="border:0; margin-bottom: 1.5rem; max-width: 100%" allowfullscreen></iframe>

					<h3>Parking: No permit needed, but park in a student lot. </h3>

					<p>It is spring break at Canada College, so they are not enforcing student permits, but they are still enforcing all other permits and parking rules. </p>

					<p>Please park in a student lot, and definitely not in any parking lot reading "staff only".  Parking lot #6 seems to make the most sense.If you're coming by car, there is ample parking. Park your car in lot #6.</p>

			    <h3>By Car: 280 to Exit #27 at Farm Hill Blvd </h3>

					<p>From Menlo Park, Palo Alto, Fremont or Union City:</p>

					<ol>
						<li>From the east bay, take the Dumbarton Bridge (84 West).</li>
						<li>Continue onto Marsh Road, staying on 84 West.</li>
						<li>Take 101 north, staying on 84 West, to exit 408, Woodside Road.</li>
						<li>Take Woodside Road / 84-West all the way to 280.</li>
						<li>Head North on 280 toward San Francisco until the next exit, and follow the directions below:</li>
					</ol>

					<p>From the south or north bay,</p>

					<ol>
						<li>Take 280 to exit 27.</li>
						<li>Head east on Farm Hill Blvd.</li>
						<li>At the first light, about 0.8 miles, take a left onto The Loop Road to enter the campus. </li>
						<li>Note: If you have a handicap parking permit, stay left at the fork in the road continuing on The Loop Road, and park in lot #4. </li>
						<li>All others: Head left onto Campus Circle at the fork.</li>
						<li>Park in parking lot #6, which is the first lot on the left. See parking details above. </li>
					</ol>

					<p>From the east bay, Hayward or farther north, or the coast, follow the directions above, taking 92 to get to 280.</p>

					<h3>By Public Transportation: Bus #274 from RWC CalTrain</h3>

					<p>If you're coming by public transportation, you'll want to catch the bus from the Redwood City CalTrain station.</p>

					<p>Catch bus #274 from the Redwood City Transit station, just opposite the Redwood City CalTrain station. The bus leaves every half hour at 14m and 43m past the hour.</p>

					<p>If you see a bunch of people waiting, ask if they're heading to Canada College and share a Lyft (not an Uber).</p>

					<h3>By Plane: SFO, SJC, and OAK are all A.O.K.</h3>

					<p>While SFO / San Francisco will have the best direct options, realize the conference is half way between SFO /San Francisco and SJC / Norman Y. Mineta San Jose International Airport.</p>

					<p> A little less convenient, but still completely doable, and just and extra 8 miles further, is OAK / Oakland International Airport, in Oakland, CA.</p>
				</div>
			</section>

			<section id="accessibility">
				<div class="container-small">
					<h2>Accessibility and Inclusion</h2>

					<h3>We aim to have a welcoming and inclusive event</h3>

					<p>In order to have an inclusive event with a welcoming atmosphere, we hope to remove all accessibility barriers that may hinder anyone from attending this event. If there are any issues that you feel may prevent you from attending and fully enjoying this event, we will do our best to accommodate, but we need to know ahead of time as best we can what those issues may be. <a href="mailto:support@perfmattersconf.com?subject=conference&20accessibility">Please get in touch</a> and let us know what we can do to help.</p>

					<ul>
						<li><strong>Venue Access: </strong>The conference is a one track in an ADA compliant, yet not fully accessible, theatre. There is a ramp to get to the theatre, and a lift to get up the five steps from the entrance to the theatre foyer. Stepless access within the main theater includes the last row, the first two rows, and the stage.<br>
	  				The dining / drinks / party / expo area is in "The Grove", located about 80 meters from the theatre, with about 25 steps. There is elevator access. The 80 meters are outside. We tend to have amazing weather in California; there is a small chance of rain, but no chance of freezing or hot temperatures</li>

	  				<li><strong>Parking: </strong>There is accessible parking directly between the theatre and The Grove. There is also accessible parking in parking lot 6 near both venues. If you have an accessibility parking placard and are able to walk a flight of stairs, please use the parking in lot 6, leaving the five spots between the two venues for those unable to otherwise access the venue.</li>

						<li><strong>Accessibility Assistance: </strong>If you need assistance, such as a Sign language interpreter, a complimentary ticket will be provided. Personal Care Attendants can attend any session, meal, or function with the registered participant they are assisting at no charge. They do need to register though, so let us know. If you aren't local, please contact us. We'll try to find an interpreter or other form of Personal Care Attendant you may need for the event.</li>

						<li><strong>Quiet Area: </strong>While there is no specifically identified quiet area for introverts or others needing to decompress, the event takes place on a college campus during spring break. It is full of little nooks and crannies for anyone needing to step away.</li>

						<li><strong>Mother's room:</strong> While the campus has no mother's room available for the conference to rent, we have created a  space within the building housing the theater with a lounge chair and some privacy. Just ask any conference staff to direct you.</li>

						<li><strong>Restrooms: </strong>There is a multi-stall restroom with urinals, a multi-stall restroom without urinals, and 5 single stall restrooms. </li>

						<li><strong>Diversity Tickets:</strong> There is a <a href="../diversity/index.php">diversity program</a> to bring more people from typically under represented people in tech into the web performance family.</li>

						<li><strong>Food &amp; Allergies:</strong> There are meat and vegetarian options. Please let us know when you register if you are vegan, celiac, or have other dietary requirements needing our attention.</li>

						<li><strong>Housing assistance:</strong> There is a slack for the event, including a slack channel dedicating to "housing". <a href="https://join.slack.com/t/perfmattersconf/shared_invite/enQtMzE1NDcxNTI0NDk2LWM1NDFmODhlYmJlNzkwMWQ5NWUwNTJkZmE4Yjg4MDkyNDgwZWEyNzdiM2ZhNzE3M2RlNjM0OWZhODBkMzFlNGI">Join the #PerfMatters Slack channel</a>. If you are willing to share your company (or personally) paid hotel room with someone who can't afford it, or live near the venue and willing to host an out of town guest, we encourage you to post your availability in that chat room so people who need assistance can privately DM you to take you up on your generosity.</li>
					</ul>

					<p>In case you haven't figured it out, we want to ensure anyone who wants to attend this event can attend this event.<sup>*</sup></p>
				</div>
			</section>

			<section id="reg">
				<div class="container-small">
					<?php echo $reg ?>
				</div>
			</section>
		</main>

		<footer>
			<div class="container-large">
				<?php echo $nav ?>

				<?php echo $footer ?>
			</div>
		</footer>

		<small>* In terms of diversity scholarships, priority will be given to those attending five or few events a year or have otherwise demonstrated an interest in the topic of web performance. This is not an open invitation to the local conference hopper contingent.</small>
	</body>
</html>
