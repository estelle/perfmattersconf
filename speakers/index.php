<?php include '../test.inc' ?><!doctype html>
<html lang="en">
<head>
	<title>#PerfMatters: Speakers</title>
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
    <p><a href="/speak/">Find out more</a></p>
  </div>
</section>
<section class="about speakers">
<h2>Our Speakers</h2>
<ul>
<li><figure><a href="https://twitter.com/jemyoung?lang=en"><img src="../images/jem.svg" alt="A potential speaker: Maybe You"></a><caption>Jem Young<br/>Senior Software Engineer, Netflix</caption></figure>
</li>
<li><figure><a href="https://twitter.com/paul_irish"><img src="../images/paul.svg" alt="Paul Irish"></a>	<caption>Paul Irish, Performance Engineer, Google Chrome</caption></figure>
</li>

<li><figure><a href="https://twitter.com/marcysutton"><img src="../images/marcy.svg" alt="Marcy Sutton"></a><caption>Marcy Sutton<br/>Senior Front-End Engineer, Deque Systems</caption></figure>
</li>
<li><figure><img src="../images/latina.svg" alt="Estelle Weyl"><caption>Estelle Weyl<br/>Open Web &amp; Performance Engineer, Instart Logic</caption></figure>
</li>
<li><figure><img src="../images/lighthoodie.svg" alt="A potential speaker: Maybe You"><caption><a href="<?php include '../form.txt' ?>">Your name here</a></caption></figure>
</li>
<li><figure><img src="../images/darknonbinary.svg" alt="A potential speaker: Maybe You"><caption><caption><a href="<?php include '../form.txt' ?>">Your name here</a></caption></figure>
</li>
</ul>
</section>
<section>
	<h2>Apply to Speak</h2>
	<p>You should apply to speak! Our call for proposals is currently open. We're looking for 
	<p>
		<a href="<?php include '../form.txt' ?>" aria-label="Apply to speak now" class="button">Apply Now</a>
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