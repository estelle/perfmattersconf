<?php include '../test.inc' ?><!doctype html>
<html lang="en">
<head>
	<title>#PerfMatters: Our Sponsors</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css"/>
	<style>
main ul {
	display:flex;
	align-content: space-evenly;
	list-style-type: none;
}
li {
	list-style-type: none;
}
main ul li img {height:90px;}

	</style>
</head>
<body id="home">
<nav>
    <?php echo $logo ?>
	<?php echo $nav ?>
</nav>
<header>
<hgroup>
<div class="circle">
	<h1>Our Sponsors</h1>
	<h2>#PerfMatters Conference<br/>
	Redwood City, CA <br/>
	<?php echo $date ?></h2>
</div>
<div>
Support #PerfMatters and connect with 
the web performance engineeers of the world.
</div>
</hgroup>
</header>
<main>

<section>
<p>#PerfMatters is a conference focused on web performance best practices, improving user experience for mobile, desktop, or any other device with a browser.</p>

<p><a href="/venue/">Venue</a>: Our flagship event, #Perfmatters Conference is putting on an ambitious program the beautiful hills of Redwood City, half way between San Francisco and Silicon Valley.</p>

<p><a href="/speakers/">Topics</a>: #PerfMatters Conference's world reknowned speakers will cover an abundance of performance related topics including framewords, RUM and synthetic measurement, accessibility, Progressive Web Apps, perceived performance, user experience, and more, in this single plus track event.</p>

</section>
<section>
<h2>Platinum Sponsors</h2>
<!--<ul><li><a href="https://instartlogic.com"><img src="../images/instartlogo.svg" style="height: 80px" alt="instart logic"></a></li></ul>-->
</section>
<section>
<h2>Gold Sponsors</h2>
</section>
<section>
<h2>Silver Sponsors</h2>
<ul><li><a href="https://fastly.com"><img src="../logos/fastly.png" alt="Fastly"/></a></li></ul>
</section>
<section>
<h2>Partners &amp; Community Supporters</h2>
</section>

<section id="reg">
    <?php echo $reg ?>
    </section>
</main>
<footer>
	<?php echo $nav ?>
	<?php echo $footer ?>
</footer>
</body>
</html>