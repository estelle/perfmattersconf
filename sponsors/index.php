<?php include '../info.inc' ?><!doctype html>
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
	list-style-type: none; padding-top: 30px; padding-bottom: 30px;
}
main ul li img {height:90px;}

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
<h2>Gold Sponsors</h2>
</section>
<section>
<h2>Silver Sponsors</h2><!--
<ul style="justify-content: space-around; display: flex; flex-flow: row wrap; width: 90%">
<li><a href="https://fastly.com"><img src="../logos/fastly.png" alt="Fastly"/></a></li>
<li><a href="https://cloudinary.com"><img src="../logos/cloudinary_w.svg" alt="Cloudinary"/></a></li><li><a href="https://appdynamics.com"><img src="../logos/appdynamics.png" alt="AppDynamics" style="height:180px; position: relative; top: -45px; margin: auto 90px"/></a></li><li><a href="https://linkedin.com"><img src="../logos/linkedin.png" alt="LinkedIn"/></a></li>
</ul>-->
</section>
<section>
<h2>Partners &amp; Community Supporters</h2>
<!--<ul style="justify-content: space-around; display: flex; flex-flow: row wrap; width: 90%">
<li><a href="https://catchpoint.com"><img src="../logos/catchpoint.png" alt="Catchpoint" style="height: 80px"/></a></li>
<li><a href="https://speedcurve.com"><img src="../logos/speedcurve.png" alt="SpeedCurve" style="height: 60px"/></a></li>
<li><a href="https://mapbox.com"><img src="../logos/mapbox.svg" alt="MapBox" style="height: 60px"/></a></li>
</ul>-->
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