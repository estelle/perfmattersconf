<?php include '../test.inc' ?><!doctype html>
<html lang="en">
<head>
	<title>#PerfMatters: Web Performance Conference</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../css/style.css"/>
	<style>

	</style>
</head>
<body id="home">
<header>
    <?php echo $logo ?>
	<?php echo $nav ?>
</header>
<main>
<section>
  <div class="circle">
	<h1>Apply to Speak</h1>
	<h2>#PerfMatters Conference<br/>
	Redwood City, CA <br/>
	<?php echo $date ?></h2>
  </div>
  <div>
    <h2>Call For Papers</h2>
    <p>For #PerfMatters Conference 2018, we are opening up for all topics and subjects interesting to developers. If you have something to say, then speak up! The call for papers closes on October 1, 2017.</p>
  </div>
</section>
<section class="about">
<h2>Topic Ideas &amp; Suggestions</h2>

<p>We like to see anything that you find interesting that is relevant to other developers interested in performance:</p>
<ul>
<li>Performance testing, metrics, work arounds &amp; discoveries</li>
<li>The navigation timing API, browsers and the WC3</li>
<li>CSS, JavaScript, and HTML5's impact on performance</li>
<li>Framework, extension, post processors, and/or media's impact on performance</li>
<li><acronym title="user interface">UI</acronym>, <acronym title="user experience">UX</acronym>, accessibility, and the impact on performance.</li>
<li>Globalization, internationalization, privacy, or censorship, and the impact on performance.</li>
<li>HTTPS, HTTP/2, <acronym title="progressive web app">PWA</acronym>, <acronym title="accelerated mobile pages">AMP</acronym>, WebP, srcset, &lt;picture>, and other topics less than 8 letters long.</li>
<li>Web performance community, history, past, present &amp; future</li>
<li>Convincing or teaching your board, boss, community, and co-workers on the importance of web performance.</li>
<li>Technological advances in web development or computer science in general, if somehow applicable to performance.</li>
<li>Ingenious ideas &amp; cool hacks you're working on.</li>
<li>Whatever you want; this is your conference.</li>
</ul>

</section>
<section>
<h2>Perks of Speaking</h2>

<p>If you get selected as a speaker at #PerfMatters Conference, this is what you get:
<ul>
<li><p><strong>Travel to <acronym title="San Francisco International airport">SFO</acronym> (or <acronym title="San Jose Pineta airport">SJC</acronym>) covered.</strong> We will pay for your economy plane ticket or CalTrain ticket, up to $500 within North America, $1,100 internationally. We'll even book your itinerary if you want.</p></li>
<li><p><strong>Entrance to the conference.</strong> If you get selected to speak after you've already purchased your ticket, don't worry. We can either reimburse you or give the ticket to someone who otherwise couldn't afford to attend. We'll even give you an extra ticket for a partner or friend. That way you'll know you have an extra person rooting for you.</p></li>
<li><p><strong>Hotel</strong> If you're coming from outside of the greater <acronym title="san Francisco">SF</acronym> Bay area, we'll cover 2-nights hotel. If you're coming from very far away, you get 3 nights. More than 12 hour flight, and need 4 nights? Let us know, we can arrange things, just let us know. </p><p>
If your employer can cover your travel and hotel, we are happy to list them as a company sponsor. If you're willing to stay with a friend, AirBnB, or other speaker to help defray costs, money saved will be put back into the conference and toward scholarships.</p></li>
<li><p><strong>Speaker Dinner</strong> There will be a speaker dinner the evening prior to the event. We won't keep you out too late, but we promise it will be fun and delicious.</p></li>
<li><p><strong>Partners welcome</strong> If you want to bring a significant other, they are more than welcome, and are welcome to the speaker dinner and, as noted above, to the conference. </p></li>
<li><p><strong>Childcare</strong>
If you need child-care please let us know well in advance so we can get it all sorted out. We'll find a child sitter for the speaker dinner, and provide childcare during the event if there is a need.</p></li>
</ul>
</section>
<section>
<p>
<a href="<?php echo $form ?>" aria-label="Apply to speak now" class="button">Apply Now</a></p>
</section>
</main>
<footer>
	<?php echo $nav ?>
	<?php echo $footer ?>
</footer>
</body>
</html>