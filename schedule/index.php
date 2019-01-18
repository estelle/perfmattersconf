<?php 
  include '../info.inc';
  include '../speakers.inc';
  # if($name) {echo $fullname;}
 ?><!doctype html>
<html lang="en">
<head>
	<title>Schedule :: #PerfMatters Conference</title>
	<meta name="description" content="Schedule for #PerfMatters, the Front-End Web Performance Conference in Redwood City, CA <? echo $date ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<?php if($name) { ?>
	<meta name="twitter:image" content="https://perfmattersconf.com/large/<?php echo $name ?>.jpg"/>
    <meta name="twitter:url" content="https://www.perfmattersconf.com/?name=<?php echo $name ?>#speakers" />
    <meta property="og:title" content='<?php echo $fullname ?> will be presenting "<?php echo $talk_title ?>" at PerfMatters Conference.' />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://perfmattersconf.com/large/<?php echo $name ?>.jpg" />
    <meta name="author" content="Estelle Weyl" />
    <meta property="og:url" content="https://www.perfmattersconf.com/?name=<?php echo name ?>#speakers" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@perfmattersconf">
    <meta name="twitter:title" content='<?php echo $talk_title ?>'>
    <meta property="og:description" content='<?php echo substr($talk_description, 0, 240) ?>' />
 <?php } else { ?>
<meta name="twitter:image" content="https://perfmattersconf.com/images/click_people4.png"/>
<meta name="twitter:url" content="https://www.perfmattersconf.com/" />
<meta property="og:title" content="#PerfMatters Conference Schedule of Presentations" />
<meta property="og:type" content="article" />
<meta property="og:image" content="https://perfmattersconf.com/images/click_people4.png" />
<meta name="author" content="Estelle Weyl" />
<meta property="og:url" content="https://www.perfmattersconf.com/schedule/" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@perfmattersconf">
<meta name="twitter:title" content="Schedule :: #PerfMatters Conference <? echo $year ?>">
<meta property="og:description" content="The schedule of talks being presented at our two-day community Web Performance conference happening <? echo $date ?> in Redwood City, CA. Getting Up To Speed workhop on <? echo $wk_date ?> to help get people up to speed on Web Performance." />
 <?php } ?>

	<style>
<?php include("../css/style.css"); ?>
@media screen and (max-width: 640px){
.talks.talks.talks li>div {
    flex-direction: column;
}
}

@media screen and (min-width: 640px){
.schedule {
	display: grid; 
	grid-template-columns: repeat(2, 1fr);
	
    grid-column-gap: 3em;
	}
}
.schedule h3:last-of-type {
  grid-column: 2 / 2;
  grid-row: 1 / 1;  
}
body .schedule * {margin-top: 0; margin-bottom: 0;}
.schedule dt {margin-top: 1em; border-top: 1px solid rgba(255,255,255,0.5);}
.schedule dt:first-of-type {border: none;}
.schedule h4 { line-height:1.3;}
	</style>
    
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

	
		<div class="about">
		<h2><span>#PerfMatters Conference Schedule</span></h2>
		<p>Monday: Workshops</p>
		<p>Tuesday & Wednesday: Conference: One track, two days, 16+ great talks, 2 panels, 16+ amazing speakers!</p>
		<p>Thursday: Hack on MDN Performance Hackathon</p>
			<div class="buttons">
				<a class="btn-cta" href="#reg">Register Now</a> <a href="../workshop/" title="Find Out about our workshop" class="btn">Workshop</a>
			</div>
		</div>
	</hgroup>
</header>
<main>

<section class="talks" id="talks">
<h2>Schedule*</h2>
<h3>Workshop :: Monday, April 1</h3>
<p><strong>Getting Up To Speed with Performance:</strong> <br/> A full day workshop to "Get You Up To Speed" on Web Performance. Participants will learn everything they need to know to get the most out of #PerfMatters Conference, the 2-day conference dedicated to front-end web performance<br/>
	9:00 AM to 5:00 PM<br/>
Includes Lunch<br/>
<a href="workshop/" title="Find Out about our workshop" class="btn">Workshop Details</a><p>

<article class="schedule"  style="border: 1px solid rgba(255,255,255,0.5); border-width: 1px 0; padding: 2em 0; margin: 2em 0">
<h3>Day 1 :: Tuesday, April 2</h3>
<dl>
<dt>9:00 AM</dt>
<dd>
	<h4>Talks</h4>
</dd>
<!--
<dt>9:40 AM</dt>
<dd>
	<h4><a href="/talks#jacques">Measure the Change You Want to See in the World</a></h4>
	<p>Jacques Favreau</p>
</dd>
<dt>9:50 AM</dt>
<dd>
	<h4>Understand your customers, think like e-commerce</h4>
	<p>Gopal Brugalette</p>
</dd>
<dt>9:55 AM</dt>
<dd>
	<h4><a href="/talks#pinterest">Making Pinterest Fast</a></h4>
	<p>Jessica Chan, 
	Sarah Dapul-Weberman, and 
	Michelle Vu</p>
</dd>-->
<dt>10:30 AM</dt>
<dd>
	<h4>BREAK</h4>
    <p>Enjoy treats in the Grove. Make new acquaintances</p>
</dd>
<dt>10:50 AM</dt>
<dd>Talks<!--
	<h4><a href="/talks#yoav">Faster Bytes is Not Always Enough - Why is The Web Slow? (and what can we do about it)</a></h4>
	<p>Yoav Weiss</p>
</dd>
<dt>11:35 AM</dt>
<dd>
	<h4><a href="/talks#jeremy">Demystifying Performance Timings</a></h4>
	<p>Jeremy Wagner</p>
--></dd>
<dt>12:20 PM</dt>
<dd>
	<h4>Lunch</h4>
    
    <p>Lunch is served in the Grove.</p>
</dd>
<dt>1:20 PM</dt>
<dd>Talks <!--
	<h4><a href="/talks#kim">Increasing Performance: Developing Accessible Sites Through Semantic HTML</a></h4>
	<p>Kimberly Muñoz</p>
</dd>
<dt>1:45 PM</dt>
<dd>
	<h4><a href="/talks#leonie">There's more to performance than meets the eye</a></h4>
	<p>Léonie Watson</p>
</dd>
<dt>2:15 PM</dt>
<dd>
	<h4><a href="/talks#marcy">React/Virtual DOM and accessibility</a></h4>
	<p>Marcy Sutton</p>
</dd>

<dt>2:45 PM</dt>
<dd>
	<h4>Panel: Accessibility and Performance</h4>

  <p>Mina Markham, Moderator.</p>
  <p>Kimberly Muñoz, Marcy Sutton, Léonie Watson</p>
--></dd>
<dt>3:00 PM</dt>
<dd>
  <h4>Break</h4>
  <p>Grab another bite in the Grove</p>
</dd>
<dt>3:20 PM - 5:30 PM</dt>
  <dd>Talks<!--
    <h4><a href="/talks#bruce">Syleable: The Musical</a></h4>
    <p>Bruce Lawson (video presentation)</p>
  </dd>
  <dt>3:50 PM</dt>
  <dd>
    <h4><a href="/talks#jem">Modern Performance in the Year of the Dog</a></h4>
    <p>Jem Young</p>
  </dd>
  <dt>4:30 PM</dt>
  <dd>
    <h4><a href="/talks#lin">Making the browser faster</a></h4>
    <p>Clark, Lin</p>
  --></dd>
  <dt>5:30 - 8:30 PM</dt>
  <dd>
    <h4>Party</h4>
    <p>Enjoy food, music, fun, activities, drinks and entertainment. This is a party you don't want to miss.</p>
  </dd>
</dl>
<h3>Day 2 :: Wednesday, April 3</h3>
<dl>
<dt>9:00 AM</dt>
<dd>Talks <!--
	<h4><a href="/talks#sharon">Cultivating community: building powerful relationships by communicating with empathy</a></h4>
	<p>Sharon Steed</p>
</dd>
<dt>9:40 AM</dt>
<dd>
	<h4><a href="/talks#javier">Optimize your life</a></h4>
	<p>Javier Garza</p>
</dd>
<dt>9:50 AM</dt>
<dd>
	<h4><a href="/talks#dawn">The Power of Storytelling</a></h4>
	<p>Dawn Parzych</p>
</dd>
<dt>10:10 AM</dt>
<dd>
	<h4><a href="/talks#gopal2">Building a Performance Engineering Culture</a></h4>
	<p>Gopal Brugalette</p>
--></dd>
<dt>10:30 AM</dt>
<dd>
	<h4>BREAK</h4>
</dd>
<dt>10:50 AM</dt>
<dd>Talks <!--
	<h4><a href="/talks#katie">Raiders of the Fast Start: Frontend Performance Archaeology</a></h4>
	<p>Katie Sylor-Miller</p>
</dd>
<dt>11:50 AM</dt>
<dd>
	<h4><a href="/talks#eli">Perceived Performance: The only kind that really matters</a></h4>
	<p>Eli Fitch</p>
--></dd>
<dt>12:30 PM</dt>
<dd>
	<h4>Lunch</h4>
</dd>
<dt>1:30 PM</dt>
<dd>Talks & Panel <!--
	<h4><a href="/talks#vitor">Accelerated Mobile Pages: The good, the bad and the ugly</a></h4>
	<p>Vitor Taliaia</p>
</dd>
<dt>2:00 PM</dt>
<dd>
	<h4><a href="/talks#jason">Progressive Web Apps: Show Up for Offline First, but Stay for the Killer Performance Boost</a></h4>
	<p>Jason Lengstorf</p>
</dd>
<dt>2:40 PM</dt>
<dd>
	<h4>Panel</h4>
    <p>Tim Kadlec, Moderator<br/>
    Vitor Taliaia, Katie Sylor-Miller, Jason Lengstorf</p>
--></dd>
<dt>3:10 PM</dt>
<dd>
	<h4>BREAK</h4>
    <p>You don't want to miss out! Go to the Grove.</p>
</dd>
<dt>3:30 PM</dt>
<dd>Talks <!--
	<h4><a href="/talks#simon">Third-party content: the weak link in the chain</a></h4>	
	<p>Simon Hearne</p>
</dd>
<dt>4:20 PM</dt>
<dd>
	<h4><a href="/talks#paul">Web Perf Metrics & Measurement in 2018</a></h4>
	<p>Paul Irish</p>
--></dd>
<dt>5:00 PM</dt>
<dd>
	<h4>CLOSING</h4>
</dd>
</dl>
</article>
<h3>Hackathon :: Thursday, April 4</h3>
<p>Hack on MDN Performance<br/>
	9:00 AM to 9:00 PM<br/>
Includes Lunch, Dinner, and everything else</p>
<p style="font-size:small; text-align:center">*Schedule subject to change</p>
</section>
<section class="reg" id="reg">
	<h1>Register for #PerfMatters Conference</h1>
	<p><? echo $date ?> at Cañada College</p>
	 <?php echo $reg ?>
     <p><small>Prices subject to change. No refunds. Tickets are transferable with notice. Getting tickets for a 5 or more people? Get $50 off for the fifth person and everyone thereafter. Group of 10 or more? Contact us at <a href="mailto:tickets@perfmattersconf.com">tickets@perfmattersconf.com</a></small>
</section>

</main>
<footer>
	<?php echo $nav ?>
	<?php echo $footer ?>
</footer>
<script>
	[].forEach.call(document.querySelectorAll('img[data-src]'),    function(img) {
  img.setAttribute('src', img.getAttribute('data-src'));
  img.onload = function() {
    img.removeAttribute('data-src');
  };
});</script>
</body>
</html>