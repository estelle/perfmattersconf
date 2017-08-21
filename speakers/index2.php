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
	in Redwood City, CA <br/>on <strong><?php echo $date ?></strong></h2>
</div>
</section>
<section class="about speakers">
<h2>Our Speakers</h2>
<ul>
<li><figure><a href="https://twitter.com/jemyoung"><img src="../images/jem.svg" alt="A potential speaker: Maybe You"></a><caption>Jem Young<br/>Senior Software Engineer, Netflix</caption></figure>
</li>
<li><figure><a href="https://twitter.com/estellevw"><img src="../images/latina.svg" alt="Estelle Weyl"></a><caption>Estelle Weyl<br/>Open Web &amp; Perf Engineer, Instart Logic</caption></figure>
</li>
<li><figure><a href="https://twitter.com/paul_irish"><img src="../images/paul.svg" alt="Paul Irish"></a>	<caption>Paul Irish<br/> Performance Engineer, Google Chrome</caption></figure>
</li>
<li><figure><img src="../images/lighthoodie.svg" alt="A potential speaker: Maybe You"><caption>Your name here</caption></figure>
</li>
<li><figure><img src="../images/darknonbinary.svg" alt="A potential speaker: Maybe You"><caption>Your name here</caption></figure>
</li>
<li><figure><img src="../images/darkcurly.svg" alt="A potential speaker: Maybe You"><caption>Your name here</caption></figure>
</li>
</ul>
</section>
<section>
	<h2>Apply to Speak</h2>
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