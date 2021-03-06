<?php include '../info.inc' ?><!doctype html>
<html lang="en">
<head>
	<title>#PerfMatters: Sponsorship Opportunities</title>
  <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../css/style.css"/>
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <?php echo $font ?>
  
	<style>
	td:first-of-type {text-align: left;}
	  details[open] {
		  position: relative;
	  }
	  details p { display: none;}
      details[open] p { 
		display: block;
    	z-index: 100;
    	position: absolute;
    	top: 0.5em;
    	background: #fff;
    	border: 1px solid;
    	border-radius: 5px;
    	padding: 5px;
    	margin-left: -18%;
    	width: 120%;
		text-align:left;
		cursor:pointer;
	  }
	details p::before {
		content: "X";
		float: right;
		border-radius: 50%;
		color: white; background:black;
		height: 1.25em; width: 1.25em; margin:3px; line-height:1.25em;
		text-align: center;
		}
	table * { vertical-align: top;}
	.longtext td:last-of-type {text-align:left;}
	strong {color: #f2411a;}
	img {display: block;}
	section::after {
		content:'';
		clear: both;
		display: block;	
	}

  .lists {
    columns: 6 10em; 
    list-style-type: none;
  }
  .lists li {
    margin: 0 0 1em 0;
  }
  .lists img {display: inline-block; width: 16px; margin-right: 10px;}
  
  .claimed {display: inline-block; transform: rotate(-20deg); color: red;}
	</style>
    <script>
	
	var sponsorship = {
		
		supportsDetails : ('open' in document.createElement('details')),
		
		activateDetails : function () {
			var details = document.querySelectorAll('#' + sponsorship.detailsParentID +' details'),
        	i = 0,
        	l = details.length;
    	

      		for(i = 0; i < l; i++) {
        			details[i].addEventListener('click', function (e) {
						sponsorship.closeAllDetails();
						if (sponsorship.supportsDetails) { // if details is supported, activate paragraph closure
							if (e.target.nodeName == 'P') {
								e.target.parentNode.removeAttribute('open');
							}	
						} else { // if it's not supported, p is child of detail, so just handle the "open" attribute
							var d = e.target.parentNode;
         		 			if (d.hasAttribute('open')) {
								d.removeAttribute('open');
							} else {
								d.setAttribute('open', '');
							}
						}
        			})
      		}
		},
		
		closeAllDetails : function () {
			var details = document.querySelectorAll('#' + sponsorship.detailsParentID +' details'),
        	i = 0,
        	l = details.length;

      		for(i = 0; i < l; i++) {
				details[i].removeAttribute('open');
			}
		},
		
		init : function (id) {
    		sponsorship.detailsParentID = id;
    		sponsorship.activateDetails();  
  		}
	}
	
	window.onload = function () {
  			sponsorship.init('levels');
	}
		
	</script>
	
</head>
<body id="home">
<aside>
    <?php echo $tagline ?>
</aside>
<header>
<hgroup>
<?php echo $logo ?>
<?php echo $nav ?>
<a href="/" class="circle">
  <h1>#PerfMatters</h1>
  <h2>Redwood City, CA <br/>
  <?php echo $date ?></h2>
</a>
  <div class="headerblurb">
<h1>#PerfMatters 2019 Partner Kit</h1><p>#PerfMatters Conference is a two-day, single-track
conference devoted to front-end web performance</p>
<p>Here's how you can be a part of it.</p>
</div></hgroup></header>
<main>
<section>

<p>PerfMatters is a single track conference on web performance best practices and improving user experience across all devices and browsers.  The conference has been designed with diversity and inclusion in mind from an accessible venue to ticket pricing and discounts, to a diverse speaker line up. Our goal is to deliver high quality content to a diverse audience with minimal barriers to participation.</p>
 

 
<p>Venue: Our event will be held at the Canada College Theater in the beautiful hills of Redwood City, half way between San Francisco and Silicon Valley. The venue is gorgeous, comfortable and accessible.</p>
 
<h2>Attendees & Participants</h2>
 
<p>Speakers – We strived to have a diverse line-up, and we succeeded. Our proposal outreach efforts led to 178 talks being proposed. Our blind review process led to a the <a href="/">speakers currently posted on our website</a>, including speakers from start-ups and corporations of all sizes with a high gender, life experience, and ethnicity distribution. Confirmed speakers include Mozilla, Microsoft, Google, Zillow, Hearst, Etsy, Akamai, Slack, Cloudflare, Shift Commerce, Baker Hughes, and freelancers. </p> 
 
<p>Attendees -  We anticipate 360 to 440 individuals interested in performance and front end user experience with roles ranging from performance focused engineers, designers, engineering managers, directors and CTOs.</p>
<p> 
Diversity – We anticipate attendees and speakers from Europe, Asia, North America, and Africa with 50% of attendees from the west coast of the United States. Our goal is to have a gender and ethnicity distribution that is more diverse than the average engineering company in the Bay Area. While we can't guarantee as diverse an audience as the general population, we do guarantee an inclusive event.</p>
</section>










<section>
<p>#PerfMatters is a single track conference on web performance best practices and improving user experience across all devices and browsers.  The conference has been designed with diversity and inclusion in mind from an accessible venue to ticket pricing and discounts, to a diverse speaker line up. Our goal is to deliver high quality content to a diverse audience with minimal barriers to participation.</p>

<p>Our ambitious program will cover <a href="/speakers/">topics</a> including:</p>
<ul>
  <li>
Frameworks</li>
  <li> HTTP2, TLS, etc.</li>
  <li> Real User and synthetic measurement    </li>
  <li> Accessibility    </li>
  <li> Progressive Web Apps</li>
  <li> Perceived performance</li>
  <li> User Experience</li>
  <li> And more</li>
</ul>

<p><a href="/venue/">Venue</a>: Our second annual event will be held at the Canada College Theater in the beautiful hills of Redwood City, half way between San Francisco and Silicon Valley. The venue is gorgeous, comfortable and accessible.</p>

</section>



<section>
<h2>Sponsorship Levels</h2>


<p>We are grateful for any support we receive. It is because of
sponsors like you that we are able to make #PerfMatters Conference
happen! All sponsors, regardless of the size of contribution, get:</p>
<ul><li>Your logo on our Web site, intermission slides, and printed
materials,</li>
<li>Tweets of appreciation from our event-related twitter
accounts, retweeted as appropriate from our own Twitter handle (@perfmattersconf) as well as @estellevw (9,600 followers), @standardista (11,700 followers), @webdevtips(1,100 followers), and @SFWebPerf, and</li>
<li>Tickets to the conference.</li>
</ul>
<article  class="reg">
<table id="levels">
  <tr>
    <th scope="col"></th>
    <th scope="col">Supporter<br/>$1,000+</th>
    <th scope="col">Silver<br/>$5,000+</th>
    <th scope="col">Gold<br/>
      $10,000+</th>
    <th scope="col">Platinum<br/>
    $15,000+</th>
  </tr>
  <tr>
    <td><details><summary>Tickets</summary><p>Each sponsorship includes full passes to the full conference, including sessions and the party.</p></details></td>
    <td></td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  <tr>
    <td><details><summary>Tweets *</summary><p>We will announce your sponsorship and provide at minimum the following number of tweets. </p></details></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>

  <tr>
    <td><details><summary>Logo Promo</summary><p>All sponsorship levels include having, at minimum, your logo present on the website and a newsletter or email blast</details></td>
    <td>✔</td>
    <td>✔</td>
    <td>✔</td>
    <td>✔</td>
  </tr>

  <tr>
    <td><details><summary>Gift Bag</summary><p>all sponsorship levels can include an item in the gift bag. Size of item depends on sponsorship level.</details></td>
    <td><details><summary>Limited</summary><p style="width:200%">Gift item should be small and useful, like a sticker, pen, or key chain.</details></td>
    <td>✔</td>
    <td>✔</td>
    <td>✔</td>
  </tr>
  
  <tr>
    <td><details><summary>Stage Mention</summary><p>You will be thanked for sponsoring the event directly from the stage</p></details></td>
    <td></td>
    <td>✔</td>
    <td>✔</td>
    <td>✔</td>
  </tr>
    <tr>
    <td><details><summary>Booth</summary><p>A space with a table and 2 chairs, along with 2 expo-center passes will be provided.</p></details></td>
    <td></td>
    <td></td>
    <td>✔</td>
    <td>✔</td>
  </tr>
    <tr>
    <td><details><summary>Speaker Dinner</summary> <p>Gold and Platinum level sponsorship includes an invite or two to the speaker dinner.</p></details></td>
    <td></td>
    <td></td>
    <td>1</td>
    <td>2</td>
  </tr>
  
    <tr>
    <td><details><summary>Teach Me Something</summary><p>Between talks there will be 2 to 5-minute tutorial relevant to the majority of the participants. Platinum sponsorship includes one of these sessions, topic/speaker subject to approval. </details></td>
    <td></td>
    <td></td>
    <td></td>
    <td>✔</td>
  </tr>
  <tr>
    <td><details><summary>Registration Option</summary><p>One platinum level sponsor can staff the registration desk, providing the opportunity to interact with all attendees. This is also the only "booth" in the main theatre venue.</details></td>
    <td></td>
    <td></td>
    <td></td>
    <td>✔ **</td>
  </tr>
</table>
</article>
<p>The booths are located in The Grove, a 50 second walk from the theatre. Coffee, snacks, lunch, and the party will all take place in The Grove. There are currently 7 booths available. Priority location will be based on sponsorship level, but all all booths are in a good location. Map of the venue and booths is available by request and subject to change.</p>
<p>To ensure this conference is as diverse, inclusive, and welcoming as possible for our attendees, we are strictly enforcing our <a href="/code/">code-of-conduct</a>, which includes no "booth babes" and no "unisex" T-shirts. Aim for non-gendered schwag. We strongly encourage you to beta test all schwag and imagery ideas to people not in your demographic and to your HR department. If you're unsure, ask us.</p> 
<p>For more information, email <a href="mailto:sponsors@perfmattersconf.com?subject=sponsorship">sponsors@perfmattersconf.com</a>.</p>
</section>





<section>
<h2>Attendees &amp; Participants</h2>
<p><strong>Speakers</strong>&mdash;Speakers are listed on the home page and again will be on the talks page:</p>
<ul>
  <li><a href="https://www.google.com/search?q=Shubhie+Panicker">Shubhie Panicker</a>, Google Staff Sofware Engineer, Chrome Performance team and author of performance standards specifications</li>
  <li><a href="https://www.google.com/search?q=sarah+drasner">Sarah Drasner</a>, Vue core team member, Microsoft Developer Advocate, Author, Codepen team member, SVG and animations expert</li>
  <li><a href="https://www.google.com/search?q=Addy+Osmani">Addy Osmani</a>, Google performance team Engineering manager</li>
  <li><a href="https://www.google.com/search?q=Tim+Kadlec">Tim Kadlec</a>, Performance Consultant at Tim Kadlec Consulting LLC, internationally reknowned performance expert</li>
  <li><a href="https://www.google.com/search?q=Ewa+Gasperowicz">Ewa Gasperowicz</a>, Developer Programs Engineer at Google</li>
  <li><a href="https://www.google.com/search?q=estelle+weyl">Estelle Weyl</a>, Freelance, author of Mobile HTML5 and co-author of CSS: The Definitive Guide</li>
  </ul>
<p>A bit of history</p>
<p> Last year we received over 175 proposals representing over 80 corporations. Speakers in 2018 included</p>
<ul>
  <li><a href="https://www.google.com/search?q=paul+irish">Paul Irish</a>, Google Performance Engineer, PM Chrome Developer Tools</li>
  <li><a href="https://www.google.com/search?q=jem+young">Jem Young</a>, Netflix
</li>
  <li><a href="https://www.google.com/search?q=marcy+sutton">Marcy Sutton</a>, Deque, author of the accesibility features in Angular</li>
  <li><a href="https://www.google.com/search?q=leonie+watson">Leonie Watson</a>, The Paciello Group, Co-Chair of the WC3's Web Platform Working Group</li>
  <li><a href="https://www.google.com/search?q=eli+fitch">Eli Fitch</a>, Mapbox    </li>
  <li><a href="https://www.google.com/search?q=estelle+weyl">Estelle Weyl</a>, Freelance, author of Mobile HTML5 and co-author of CSS: The Definitive Guide</li>
  <li>Yoav Weiss, Akamai, <a href="https://www.w3.org/webperf/">W3C Web Performance Working Group</a>, 
    implemented &lt;picture&gt; element in webkit </li>
  <li>See the full <a href="../2018/talks/">list of 2018 speakers</a></li>
</ul>  
<p>With a semi-blind* proposal reviewal process, we ended up with several surprises as we turned down talks from more famous developers in selecting what we think is a great, diverse (both topic and presenter-wise) line up. Submissions last year included (ask for the full list):
<ul class="lists">
<li><img src="https://ucygetfavicon.appspot.com/http://www.adpushup.com" alt="">AdPushup</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.akamai.com" alt="">Akamai</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.amazon.com" alt="">Amazon</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.att.com" alt="">AT&amp;T </li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.avvo.com" alt="">Avvo</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.bbc.com" alt="">BBC</li>
<li><img src="https://www.buzzfeed.com/static-assets/img/favicon.5a0c77a8815cfcc67c710199054a55c6.ico" alt="">BuzzFeed</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.Calibre.com" alt="">Calibre</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.catchpoint.com" alt="">Catchpoint</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.cloudfour.com" alt="">Cloud Four</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.comcast.com" alt="">Comcast</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.concur.com" alt="">Concur</li>
<li><img src="https://dt-cdn.net/assets/images/brand/favicon-63e287af7c.ico" alt="">Dynatrace</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.ebay.com" alt="">eBay Inc.</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.etsy.com" alt="">Etsy</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.fastly.com" alt="">Fastly</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.google.com" alt="">Google</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.ibm.com" alt="">IBM</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.indeed.com" alt="">Indeed</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.linkedin.com" alt="">LinkedIn</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.lullabot.com" alt="">Lullabot</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.MathWorks.com" alt="">MathWorks</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.Microsoft.com" alt="">Microsoft</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.Mozilla.com" alt="">Mozilla</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.NBCUniversal.com" alt="">NBCUniversal</li>
<li><img src="https://nccgroup.trust/favicon.ico" alt="">NCC Group</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.netflix.com" alt="">Netflix</li>

<li><img src="https://ucygetfavicon.appspot.com/http://www.oracle.com" alt="">Oracle</li>
<li><img src="https://ucygetfavicon.appspot.com/https://www.perfectomobile.com/" alt="">Perfecto Mobile</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.pinterest.com" alt="">Pinterest</li>

<li><img src="http://www.Qantas.com/favicon.ico" alt="">Qantas Airways</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.rga.com" alt="">R/GA</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.sap.com" alt="">SAP</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.shapesecurity.com" alt="">Shape Security</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.slack.com" alt="">Slack</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.ThoughtWorks.com" alt="">ThoughtWorks</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.vox.com" alt="">Vox Media</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.wellsfargo.com" alt="">Wells Fargo</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.Wikimedia.com" alt="">Wikimedia </li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.wix.com" alt="">Wix</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.yelp.com" alt="">Yelp</li></ul>

<p>The <a href="/">full list of confirmed speakers</a> is posted on our home page.</p>
<p><strong>Tickets</strong> have been priced in a manner to ensure that attendees from corporations large and small can attend. Discounts are being made available for attendees without corporate sponsorships, including students and freelancers. Everything is being done to ensure that barriers to entry are as minimal as possible, while ensuring the conference and content is not undervalued.</p>
<p>We've added an incredibly reasonably priced <a href="/workshop">"Getting Up To Speed" workshop</a> to ensure that no one feels intimidated or unqualified to attend the main conference.</p>
<p><strong>Attendees</strong> &mdash;  We anticipate 330 to 440 individuals interested in performance and front end user experience with roles ranging from performance focused engineers, engineering managers, directors and CTOs. Last year the following companies were in attendance:</p>
<ul class="lists">
  <li><img src="https://ucygetfavicon.appspot.com/http://www.ancestry.com" alt="">Ancestry</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.bluevolt.com" alt="">BlueVolt</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.daltonmaag.com" alt="">dalton maag</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.deque.com" alt="">Deque</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.elo7.com" alt="">Elo7</li>

<li><img src="http://www.etsy.com/favicon.ico" alt="">Etsy</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.expedia.com" alt="">Expedia</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.forbes.com" alt="">Forbes</li>
<li><img src="https://www.google.com/s2/favicons?domain=www.generalmills.com" alt="">GeneralMills</li>
<li><img src="https://img1.wsimg.com/Sitecore/3/A/4/%7B3A44F70D-6D11-4C14-B611-A1F191704047%7Dgodaddy.ico" alt="">GoDaddy</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.google.com" alt="">Google</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.groupon.com" alt="">Groupon</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.hearsaysystems.com" alt="">Hearsay Systems</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.HoldMyTicket.com" alt="">HoldMyTicket</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.ibm.com" alt="">IBM</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.indeed.com" alt="">Indeed</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.kohls.com" alt="">Kohl's</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.LendingHome.com" alt="">LendingHome</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.linkedIn.com" alt="">LinkedIn</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.lullabot.com" alt="">Lullabot</li>

<li><img src="https://ucygetfavicon.appspot.com/http://www.MachMetrics.com" alt="">MachMetrics</li>
<li><img src="https://magento.com/sites/default/files/Magento_Favicon_64x64.ico" alt="">Magento</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.mapbox.com" alt="">MapBox</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.microsoft.com" alt="">Microsoft</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.mozilla.com" alt="">Mozilla</li>
<li><img src="https://nccgroup.trust/favicon.ico" alt="">NCC Group</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.paypal.com" alt="">PayPal</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.pinterest.com" alt="">Pinterest</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.sap.com" alt="">SAP</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.slack.com" alt="">Slack</li>
<li><img src="https://cdn.speedcurve.com/favicon.ico?new=woot" alt="">SpeedCurve</li>
<li><img src="https://www.spredfast.com/favicon.ico" alt="">Spredfast</li>
<li><img src="https://ucygetfavicon.appspot.com/https://www.paciellogroup.com/" alt="">The Paciello Group</li>
<li><img src="https://usa.visa.com/content/dam/VCOM/Brand/favicon.ico" alt="">Visa</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.vlocity.com" alt="">Vlocity</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.vox.com" alt="">Vox Media</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.xeneta.com" alt="">Xenata</li>
<li><img src="https://ucygetfavicon.appspot.com/http://www.yelp.com" alt="">Yelp</li>
</ul>
<p><strong>Diversity</strong> &mdash; We are reaching a global audience and have talk proposals from Europe, Australia, Asia, North America, and Africa. We anticate speakers and attendees will stem from around the globe,  with 50% of attendees from the west coast of the United States. Our goal is to have a gender and ethnicity distribution that is more diverse than the average engineering company in the Bay Area.</p> 
<p><strong>Atmosphere</strong> &mdash; The venue is gorgeous, comfortable, and accessible. You'll note from the speaker offerings, we treat everyone well. We aim to make an affordable, fun, luxurious experience conducive to learning and networking.</p>

</section>

<section>
<h2>Other Support Opportunities</h2>
<p>There are many other sponsorship opportunities which we've listed below. If you would like to cosponsor with another organization, that is doable. The registration option does require your staff be present. The other options do not.  </p>

 <article class="reg">
<table class="longtext">
  <colgroup>
    <col/>
    <col/>
    <!--<col/>-->
    <col/>
  <tr>
    <th scope="col">Opportunity</th>
    <td>Sponsorship Level</td>

    <!--<th scope="col">Cost</th>-->
    <th scope="col">Description</th>
  </tr>
  <tr>
    <td>Registration</td>
    <td>Platinum</td>
    <!--<td>$5,000</td>-->
    <td>Only offered to one Platinum sponsor, your people can staff the registration desk, providing the opportunity to interact with all attendees. There are no vendors / sponsor tables within the main venue other than the registration desk. We will provide additional staff to help support the registration desk, to handle any registration issues that may arise. But, otherwise, your team will be the only "booth" in the main theatre venue. This goes to the first platinum sponsor interested in this option at no extra charge.</td>
  </tr>
  <tr>
    <td>t-shirts</td>
    <td>Gold +</td>
    <!--<td>cost + $500</td>-->
    <td>As unisex T-shirts don't exist, t-shirts for distribution should come in both fit and relaxed cuts. We will provide you with attendee sizing as close to the event date as possible. If you are a gold or platinum sponsor, we will didtribute these at no extra charge, or you can distribute them at a booth if you choose to have one.</td>
  </tr>
  
  <tr>
    <td>Speaker Dinner</td>
    <td>Gold</td>
    <!--<td>cost ($2,400)</td>-->
    <td>The price depends on the number of speakers and guests, but is estimated to be at about $90 per person.</td>
  </tr>
  <tr>
    <td>Bags</td>
    <td>Silver +</td>
    <!--<td>cost + $500</td>-->
    <td>If you're sponsoring at the silver level or higher, the conference bag can include your logo. Reusable bags are always a hit with attendees, and
sponsoring the bag means your brand will be seen over
and over again when practicality is a must. We'll create
a themed design, add your logo, and take care of all
the production details! We will didtribute these at registration.</td>
  </tr>
  <tr>
    <td>Speaker Gifts</td>
    <td>Silver +</td>
    <!--<td>Gift x 20</td>-->
    <td>If you would like to offer the speakers a gift, you'll need to pass the idea thru the organizers, and provide 28 of whatever it is you would like to offer. </td>
  </tr>
  <tr>
    <td>Umbrellas</td>
    <td>Silver +</td>
    <!--<td>at cost + $150</td>-->
    <td>We like useful schwag. If you're sponsoring at the silver level or higher, you might want to sponsor an umbrella for all the attendees. That way you don't have to worry about sizes. You can either order these yourselves, or we can order them for you, and include them at registration along with any other schwag. We will didtribute these at registration.</td>
  </tr>
  <tr>
    <td>Water Bottles</td>
    <td><span>Silver</span></td>
    <!--<td>at cost + $200</td>-->
    <td>We are looking for an organization to sponsor the water bottles and the water service. To be friendlier to the environment, we would like to provide all attendees with a water bottle upon registration to be used throughout the conference. We will didtribute these at registration.We provide fruit infused and plain water in  5-gallon dispensers throughout the venue</td>
  </tr>
  <tr>
    <td>Party</td>
    <td>Silver +</td>
    <!--<td>cost ($12,000)</td>-->
    <td>We are still waiting for a quote from the caterer, so are not sure of the cost of the party, but that quote will be partially up to you! We are hosting a conference party from 5:30 to 9:30 on Tuesday, directly after the first day's sessions, in The Grove. We'll work together to negotiate a good budget while making the event classy, fun, and memorable. The sample menus we have looked at are $8/person to $15/person depending on the options.</td>
  </tr>
  <tr>
    <td>Coffee</td>
    <td>Any</td>
    <!--<td>at cost ($1,800)</td>-->
    <td>Sponsor coffee and tea. We're still waiting on a quote, but my guesstimate is $900 for the two days.</td>
  </tr>
  <tr>
    <td><p>Ice Cream &quot;Make your own Sundae&quot;</p></td>
    <td>Any</td>
    <!--<td>at cost ($1,200)</td>-->
    <td>Snacks are awesome. And awesome snacks bring people to the expo hall. If you're a sponsor, consider also sponsoring a mid-day ice cream social. This will be at cost. There will be chocolate and vanilla ice cream, with a bunch of toppings. Real fruit popsicles will be available for those who are vegan or otherwise don't eat dairy.</td>
  </tr>
  <tr>
    <td>Lunch</td>
    <td>Any</td>
    <!--<td>at cost ($5,400)</td>-->
    <td>Lunch on the first day is a sandwich or salad, along with fruit salad, chips and a cookie. On the second day we're having wraps or salad, along with fruit salad, chips and a cookie. You can sponsor one or both lunches. If you sponsor, you can upgrade to a better lunch if you so choose, but that is the current option. I am still waiting on a quote, but the estimate is $5,400 per day. </td>
  </tr>
  <tr>
    <td>Drinks</td>
    <td>Gold</td>
    <!--<td>cost ($3,000)</td>-->
    <td>If you want to sponsor the drinks for the party, that would be lovely. The cost includes the drinks, servers, and the required security details costs. Drinks include red wine, white wine, beer, bottles of Mexican Coke, water, and two specialty drinks. We are still negotiating the costs, but it will be at cost: we are purchasing the drinks directly, so it's at cost drinks plus the serving staff, glasses, and security detail. We assume a cost of $3,500.</td>
  </tr>
  <tr>
    <td>Diversity Ticket</td>
    <td>Any</td>
    <!--<td>bulk ticket rate</td>-->
    <td>Want to sponsor tickets for someone who otherwise couldn't afford to attend, you can sponsor their ticket (at the discounted bulk rate). If you would like to offer airfare and hotel/AirBnB, you will get huge karma points in addition to recognition.</td>
  </tr>
  <tr>
    <td>Close Captioning</td>
    <td>Any</td>
    <!--<td>at cost</td>-->
    <td>We would love to offer captioning to improve accessibility for everyone. We're assuming a budget of $4,000 for this feature</td>
  </tr>
  <tr>
    <td>Streaming / Recording</td>
    <td>Any</td>
    <!--<td>at cost </td>-->
    <td>We are looking for a sponsor to provide live streaming of the event and produce videos of the recording. Your logo will be on YouTube and our conference website forever. . We're assuming a budget of $4,000 for this feature</td>
  </tr>
  <tr>
    <td>Sign Language Interpreter</td>
    <td>Any</td>
    <!--<td>at cost</td>-->
    <td>We are not sure if we need ASL interpreters yet, but will provide it if needed.</td>
  </tr>
  <tr>
    <td>Green Room</td>
    <td>Any</td>
    <!--<td>cost ($1,800)</td>-->
    <td>We would like to provide a green room for the speakers. The cost is $1,600 for the room rental plus $200 for snacks</td>
  </tr>
  <tr>
    <td>Child Care</td>
    <td>Any</td>
    <!--<td>cost</td>-->
    <td>We would like to provide child care to those needing it.</td>
  </tr>
  
  <tr>
    <td>Bus Service</td>
    <td>Any</td>
    <!--<td>cost</td>-->
    <td>We would like to provide bus service from downtown Redwood City's CalTrain Station to the venue and back. </td>
  </tr>
  
</table>
</article>
<p>If you think of something we're missing, let us know.</p>
</section>
<section>
<h2>Brought to you by <a href="http://standardista.com">STANDARDISTA</a></h2>
<figure style="float:right; text-align:center;"><a href="https://twitter.com/estellevw?lang=en" style="display: block"><img src="../images/estelle.svg" alt="Jem Young"></a>Estelle Weyl, Author<br>
Mobile HTML5 &amp; CSS Definitive Guide<br>
Standardista</figure>

<p>This conference is being organized by Standardista, with efforts led by <a href="https://www.linkedin.com/in/estellevw/">Estelle Weyl</a>. Estelle has organized several conferences, and has <a href="http://lanyrd.com/profile/estellevw">attended over 150</a>. . She organizes the SF Web Performance Group, the Seattle Web Performance Group, and organized the Confident Coding conference series. 
</p><p>Estelle knows what makes a good conference. She has attention to detail. She's a goofy extrovert. And, she is a front end developer and performance evangelist, so knows the content and has the connections to ensure this is a smoothly run, interesting, educational, fun, and memorable event for sponsors, speakers and attendees alike.</p> 
</section>
</main>
<footer>
	<?php echo $nav ?>
	<?php echo $footer ?>
</footer>
</body>
</html>