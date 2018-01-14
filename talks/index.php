<?php 
  include '../test.inc';
  include '../speakers.inc';
  # if($name) {echo $fullname;}
 ?><!doctype html>
<html lang="en">
<head>
	<title>#PerfMatters: Web Performance Conference</title>
	<meta name="description" content="#PerfMatters - A Front-End Web Performance Conference in Redwood City, CA in March 2018. Call for speakers is currently open.">
	<meta name="viewport" content="width=device-width">

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
<meta name="twitter:image" content="https://perfmattersconf.com/images/people2.jpg"/>
<meta name="twitter:url" content="https://www.perfmattersconf.com/" />
<meta property="og:title" content="Get up to speed Workshop #PerfMatters Conference" />
<meta property="og:type" content="article" />
<meta property="og:image" content="https://perfmattersconf.com/images/people2.jpg" />
<meta name="author" content="Estelle Weyl" />
<meta property="og:url" content="https://www.perfmattersconf.com/talks/" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@perfmattersconf">
<meta name="twitter:title" content="Talks :: #PerfMatters Conference 2018">
<meta property="og:description" content="The talks being presented at our two-day community Web Performance conference happening March 27-28, 2018 in Redwood City, CA. Getting Up To Speed workhop on March 26 to help get people up to speed on Web Performance." />
 <?php } ?>

	<style>
<?php include("../css/style.css"); ?>
.talks li > div {display: flex;}
.talks li:nth-of-type(odd) > div {
	flex-direction: row-reverse;	
}
.talks figure a { 
	padding: 10px 10px 30px; 
	background: white; 
	display:inline-block; transform: rotate(-5deg); 
	box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
}
.talks figure img {
	box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3); 
}
	
.talks figure img {width: 200px;}
.talks li:nth-of-type(odd) figure a {transform: rotate(5deg);}
.talks > ul > li ~ li {
	border-top: 1px solid;}
	h4 {margin-bottom: 0;}
	h4 + p {margin-top: 0;}
.talks  > ul  {list-style-type: none;}
hr {opacity: 0.25;}
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
			<h1>#PerfMatters</h1>
			<h2>Web Performance Conference<br/>
			in Redwood City, CA <br/>on <strong><?php echo $date ?></strong></h2>
		</div>
		<div class="about">
		<h2><span>#PerfMatters Conference Sessions</span>?</h2>
		<p>One track, two days, 21 great talks (so far), 23 amazing speakers<br>Plus a one day <a href="../workshop/">workshop</a></p>
			<div class="buttons">
				<a class="btn-cta" href="#reg">Register Now</a> <a href="workshop/" title="Find Out about our workshop" class="btn">Workshop</a>
			</div>
		</div>
	</hgroup>
</header>
<main>

<section class="talks" id="talks">
<h2>Talks</h2>
<ul>
<?php
$people = array("paul", "sharon", "leonie", "eli", "lin", "simon", "katie", "javier", "bianca",  "yoav","pinterest", "gopal2", "jeremy", "dawn", "jacques", "vitor", "kim", "jason", "tim", "jem", 'marcy'); 

foreach ($people as $name) {
	$person = getInformation($name);
	?><li id="<?php echo $name ?>">
    <h2><?php echo $person -> talk_title ?></h2>
    <div>
	<figure><a href="https://twitter.com/<?php echo $person->twitter ?>"><img data-src="../avatars/<?php echo $name ?>.jpg" alt="<?php echo $person->fullname ?>"></a>	<figcaption><h4 class="name"><?php echo $person->fullname ?></h4><p class="bio"><?php echo $person->job ?>, <?php echo $person->company ?></p></figcaption>
    </figure>
    <div>
    	<p><?php echo $person -> talk_description ?></p>
        <hr/>
        <h2>About <?php echo $person->fullname ?></h2>
        <p><?php echo $person->about ?></p>
        </div>
    </div>
  
</li>
<?php
}
?>


</ul>
</section>
<section class="reg" id="reg">
	<h1>Register for #PerfMatters Conference</h1>
	<p>March 27-28, 2018 at Cañada College</p>
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