<?php include '../test.inc' ?><!doctype html>
<html lang="en">
<head>
	<title>#PerfMatters: Speakers</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../css/style.css"/><link rel="stylesheet" href="../css/speakers.css"/>
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
	<h1>Speakers</h1>
	<h2>#PerfMatters Conference<br/>
	Redwood City, CA <br/>
	<?php echo $date ?></h2>
</div>

  <div>
    <h2>Call For Papers</h2>
    <p>For #PerfMatters Conference 2018, we are opening up for all topics and subjects interesting to developers. If you have something to say, then speak up! The call for papers closes on October 1, 2017.</p>
    <p><a href="/speak/">Find out more</a> 
		<a href="<?php include '../form.txt' ?>" aria-label="Apply to speak now" class="button">Apply Now</a></p>
  </div>
</section>
<section class="about speakers">
<h2>Our Speakers</h2>
<ul>
<li><figure><a href="https://twitter.com/jemyoung?lang=en"><img src="../images/jem.svg" alt="Jem Young"></a><caption>Jem Young<br/>
Senior Software Engineer<br/>
Netflix</caption></figure>
</li>
<li><figure><a href="https://twitter.com/paul_irish"><img src="../images/paul.svg" alt="Paul Irish"></a>	<caption>
Paul Irish<br/> Performance Engineer<br/>
Google Chrome</caption></figure>
</li>

<li><figure><a href="https://twitter.com/marcysutton"><img src="../images/marcy.svg" alt="Marcy Sutton"></a>
<caption>
Marcy Sutton<br/>
Senior Front-End Engineer<br/>
Deque Systems
</caption></figure>
</li>
<li><figure><img src="../images/leonie.svg" alt="Léonie Watson"><caption>Léonie Watson<br/>Principal Engineer<br/>The Paciello Group</caption></figure>
</li>
<li><figure><img src="../images/estelle.svg" alt="Estelle Weyl">
<caption>
Estelle Weyl<br/>
Open Web Engineer &amp; Evangelist<br/>Standardista
</caption>
</figure>
</li><li><figure><img src="../images/lighthoodie.svg" alt="A potential speaker: Maybe You"><caption><a href="<?php include '../form.txt' ?>">Your name here</a></caption></figure>
</li>
<li><figure><img src="../images/darknonbinary.svg" alt="A potential speaker: Maybe You"><caption><caption><a href="<?php include '../form.txt' ?>">Your name here</a></caption></figure>
</li>
</ul>
</section>
<section>
	<h2>Apply to Speak</h2>
	<p>You should apply to speak! Our call for proposals is currently open. </p>
	<p> <a href="/speak/" class="cta">More Info &raquo;</a>
		<a href="<?php include '../form.txt' ?>" aria-label="Apply to speak now" class="button">Apply Now &raquo;</a>
	</p>
</section>
<section>
	<h2></h2>
</section>
</main>
<footer>
	<?php echo $nav ?>
	<?php echo $footer ?>
</footer>
</body>
</html>