<?php 
  include '2018info.inc';
  include '2018.inc';
  # if($name) {echo $fullname;}
 ?><!doctype html>
<html lang="en">
<head>
	<title>#PerfMatters: Web Performance Conference</title>
	<meta name="description" content="#PerfMatters - A Front-End Web Performance Conference in Redwood City, CA in March 2018.">
	<meta name="viewport" content="width=device-width">

	<?php if($name) { ?>
	    <meta name="twitter:image" content="https://perfmattersconf.com/large/<?php echo $name ?>.jpg"/>
    
    
    
    <meta name="twitter:url" content="https://www.perfmattersconf.com/?name=<?php echo $name ?>#speakers" />
    
    <meta property="og:title" 
    content='<?php echo $fullname ?> presents <?php echo $talk_title ?>' />
    
    <meta property="og:type" content="article" />
    
    
    <meta property="og:image" content="https://perfmattersconf.com/large/<?php echo $name ?>.jpg" />
    
    <meta name="author" content="Estelle Weyl" />
    
    <meta property="og:url" content="https://www.perfmattersconf.com/?name=<?php echo name ?>#speakers" />
    
    <meta name="twitter:card" content="summary_large_image">
    
    <meta name="twitter:site" content="@perfmattersconf">
    
    <meta name="twitter:title" content='<?php echo $talk_title ?>'>
    
    <meta property="og:description" content='<?php echo substr($talk_description, 0, 240) ?>' />
 <?php } else { ?>
<meta name="twitter:image" content="https://perfmattersconf.com/images/cfp.jpg"/>
    
    
    
    <meta name="twitter:url" content="https://www.perfmattersconf.com/" />
    
    <meta property="og:title" content="Get up to speed Workshop #PerfMatters Conference" />
    
    <meta property="og:type" content="article" />
    
    
    <meta property="og:image" content="https://perfmattersconf.com/images/cfp.jpg" />
    
    <meta name="author" content="Estelle Weyl" />
    
    <meta property="og:url" content="https://www.perfmattersconf.com/" />
    
    <meta name="twitter:card" content="summary_large_image">
    
    <meta name="twitter:site" content="@perfmattersconf">
    
    <meta name="twitter:title" content=" #PerfMatters Conference 2018">
    
    <meta property="og:description" content="A two-day community Web Performance conference happening March 28-29, 2018 in Redwood City, CA. Getting Up To Speed workhop on March 27 to help get people up to speed on Web Performance." />
 <?php } ?>

	<style>
<?php include("css/style.css"); ?>
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
<a href="/">
  <div class="circle">
    #PerfMatters</h1>
    <h2>Redwood City, CA <br/>
    <?php echo $date ?></h2>
  </div>
</a>
		<div class="about">
		<h2>What is <span>#PerfMatters</span>?</h2>
		<p>#PerfMatters Conference is the web performance conference in Redwood City, California with talks by internationally renowned performance developers. Our focus is on front-end web performance.</p>
			<div class="buttons">
				<a class="btn-cta" href="#reg">Register Now</a> <a href="workshop/" title="Find Out about our workshop" class="btn">Workshop</a>
			</div>
		</div>
	</hgroup>
</header>
<main>

<section class="speakers" id="speakers">
<h2>Speakers</h2>
<ul>
<?php
$people = array("paul", "yoav", "sharon", "leonie", "jem", 'marcy', "eli", "lin", "tim", "simon", "katie", "javier", "bianca", "jessica", "sarah", "michelle", "gopal", "jeremy", "dawn", "jacques", "vitor", "kim", "jason", "estelle"); 

foreach ($people as $name) {
	$person = getInformation($name);
	?><li>
	<figure><a href="https://twitter.com/<?php echo $person->twitter ?>"><img data-src="avatars/<?php echo $name ?>.jpg" alt="<?php echo $person->fullname ?>"></a>	<figcaption><span class="name"><?php echo $person->fullname ?></span><span class="bio">
 <?php echo $person->job ?><br/> <?php echo $person->company ?></span></figcaption>
    </figure>
  
</li>
<?php
}
?>


</ul>
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