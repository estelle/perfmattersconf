<?php 
  include 'test.inc';
  include 'speakers.inc';
  # if($name) {echo $fullname;}
 ?><!doctype html>
<html lang="en">
<head>
	<title>#PerfMatters: Web Performance Conference</title>
	<meta name="description" content="#PerfMatters - A Front-End Web Performance Conference in Redwood City, CA in March 2018. Call for speakers is currently open.">
	<meta name="viewport" content="width=device-width">
	<style>
<?php include("css/style.css"); ?>
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
<li>
	<lable for="paul"><figure><a href="https://twitter.com/paul_irish"><img data-src="avatars/paul.jpg" alt="Paul Irish"></a>	<figcaption><span class="name">Paul Irish</span><span class="bio">
 Performance Engineer<br/> Google Chrome</span></figcaption>
    </figure>
  </label>
</li>

<li>
  <label for="rachel">
	<figure><a href="https://twitter.com/rachelnabors"><img data-src="avatars/rachel.jpg" alt="Rachel Nabors"></a>	
		<figcaption><span class="name">Rachel Nabors</span>
<span class="bio">	
	
Program Manager<br/>Microsoft
		</span></figcaption>

	    </figure>
  </label>
</li>

<li>
  <label for="yoav">
	<figure><a href="https://twitter.com/yoavweiss"><img data-src="avatars/yoav.jpg" alt="Yoav Weiss"></a>	
		<figcaption>
			<span class="name">Yoav Weiss</span>
			<span class="bio">Principal Architect<br/>Akamai
		</span></figcaption>

	    </figure>
  </label>
</li>


<li>
  <label for="sharon">
	<figure><a href="https://twitter.com/SharonSteed"><img data-src="avatars/sharon.jpg" alt="Sharon Steed"></a>	
		<figcaption>
			<span class="name">Sharon Steed</span>
			<span class="bio">Communilogue, LLC<br/>Founder/CEO 
			</span>
		</figcaption>
	</figure>
  </label>
</li>

<li>
  <label for="leonie">
	<figure><a href="https://twitter.com/leoniewatson"><img data-src="avatars/leonie.jpg" alt="Léonie Watson "></a>	
		<figcaption><span class="name">Léonie Watson</span>
<span class="bio">Principal Engineer, Paciello Group<br/>W3C Web Platform WG co-chair 
		</span>
	</figcaption>

	    </figure>
  </label>
</li>
<li>

  <label for="jem">
	<figure><a href="https://twitter.com/jemyoung"><img data-src="avatars/jem.jpg" alt="Jem Young"></a><figcaption><span class="name">Jem Young</span><span class="bio">
Senior Software Engineer<br/> Netflix</span></figcaption>
    </figure>
  </label>
</li>
<li>

  <label for="marcy">
  	<figure><a href="https://twitter.com/marcysutton"><img data-src="avatars/marcy_sutton.jpg" alt="Marcy Sutton"></a><figcaption><span class="name">Marcy Sutton</span><span class="bio">
Senior Front-End Engineer<br/> Deque Systems</span></figcaption>
    </figure>
  </label>
</li>



<li>
  <label for="eli">
	<figure><a href="https://twitter.com/EliFitch"><img data-src="avatars/eli.jpg" alt="Eli Fitch"></a>	
		<figcaption><span class="name">Eli Fitch</span>
<span class="bio">	
	
Senior Web Application Engineer<br/>MapBox 
		</span></figcaption>

	    </figure>
  </label>
</li>

<li>
  <label for="lin">
	<figure><a href="https://twitter.com/linclark"><img data-src="avatars/lin.jpg" alt="Lin Clark"></a>	
		<figcaption><span class="name">Lin Clark</span>
<span class="bio">	
	
Code Cartoonist<br/>Mozilla
		</span></figcaption>

	    </figure>
  </label>
</li>


<li>
  <label for="simon">
	<figure><a href="https://twitter.com/simonhearne"><img data-src="avatars/simon.jpg" alt="Simon Hearne"></a>	
		<figcaption><span class="name">Simon Hearne</span>
<span class="bio">	
	
Principle Software Engineer<br/>Akamai 
		</span></figcaption>

	    </figure>
  </label>
</li>

<li>
  <label for="katie">
	<figure><a href="https://twitter.com/ksylor"><img data-src="avatars/katie.jpg" alt="Katie Sylor-Miller"></a>	
		<figcaption><span class="name">Katie Sylor-Miller</span>
<span class="bio">	
	
Staff Software Engineer<br/>Etsy
		</span></figcaption>

	    </figure>
  </label>
</li>






<li>
  <label for="javier">
	<figure><a href="https://twitter.com/JJavierGarza"><img data-src="avatars/javiergarza.jpg" alt="Javier Garza"></a>	
		<figcaption><span class="name">Javier Garza</span>
<span class="bio">	
	
Senior Enterprise Architect<br/>Akamai 
		</span></figcaption>

	    </figure>
  </label>
</li>

<li>
  <label for="bianca">
	<figure><a href="https://twitter.com/bianca_berning"><img data-src="avatars/bianca.jpg" alt="bianca berning"></a>	
		<figcaption><span class="name">Bianca Berning</span>
<span class="bio">	
	
Font Engineer<br/>Dalton Maag 
		</span></figcaption>

	    </figure>
  </label>
</li>


<li>
  <label for="jessica">
	<figure><a href="https://twitter.com/missycat"><img data-src="avatars/jessica.jpg" alt="Jessica Chan"></a>	
		<figcaption><span class="name">Jessica Chan</span>
<span class="bio">	
	
Pinterest
		</span></figcaption>

	    </figure>
  </label>
</li>



<li>
  <label for="sarah">
	<figure><a href="https://twitter.com/sarahddubs"><img data-src="avatars/sarah.jpg" alt="Sarah Dapul-Weberman"></a>	
		<figcaption><span class="name">Sarah Dapul-Weberman</span>
			<span class="bio">

        Software Engineer<br/>
			Pinterest
		</span></figcaption>

	    </figure>
  </label>
</li>


<li>
  <label for="michelle">
	<figure><a href="https://twitter.com/"><img data-src="avatars/michelle.jpg" alt="Michelle Vu"></a>	
		<figcaption><span class="name">Michelle Vu</span><span class="bio">

        Software Engineer<br/>
			Pinterest
		</span></figcaption>

	    </figure>
  </label>
</li>



<li>
  <label for="gopal">
	<figure><a href="https://twitter.com/"><img data-src="avatars/gopal.jpg" alt="Gopal Brugalette"></a>	
		<figcaption><span class="name">Gopal Brugalette</span>
<span class="bio">	
	
Principal Software Engineer<br/>Concur 
		</span></figcaption>

	    </figure>
  </label>
</li>
<li>
  <label for="jeremy">
	<figure><a href="https://twitter.com/malchata"><img data-src="avatars/jlwagner.jpg" alt="Jeremy Wagner"></a>	
		<figcaption><span class="name">Jeremy Wagner</span>
<span class="bio">	
	
Web Developer 
		</span></figcaption>

	    </figure>
  </label>
</li>
<li>
  <label for="dawn">
	<figure><a href="https://twitter.com/dparzych"><img data-src="avatars/dawn.jpg" alt="Dawn Parzych"></a>	
		<figcaption><span class="name">Dawn Parzych</span>
<span class="bio">	
	
Director of Product and Solution Marketing<br/>Catchpoint 
		</span></figcaption>

	    </figure>
  </label>
</li>


<li>
  <label for="jacques">
	<figure><a href="https://twitter.com/betaorbust"><img data-src="avatars/jacques.jpg" alt="Jacques Favreau"></a>	
		<figcaption><span class="name">Jacques Favreau</span>
<span class="bio">	
	
Senior UI Engineer<br/>
			Netflix 
		</span></figcaption>

	    </figure>
  </label>
</li>
<li>
  <label for="vitor">
	<figure><a href="https://twitter.com/vitortalaia"><img data-src="avatars/vitor.jpg" alt="Vitor Talaia"></a>	
		<figcaption><span class="name">Vitor Talaia</span>
			<span class="bio">
			Junior Developer
			<br/> Code Miner 42
		</span></figcaption>

	    </figure>
  </label>
</li>
<li>
  <label for="kim">
	<figure><a href="https://twitter.com/"><img src="avatars/kim.jpg" alt="Kimberly Munoz"></a>	
		<figcaption><span class="name">Kimberly Munoz</span>
<span class="bio">	
	
Web Developer<br/>Slack 
		</span></figcaption>

	    </figure>
  </label>
</li>
<li>
  <label for="">
	<figure><a href="https://twitter.com/jlengstorf"><img src="avatars/jason.jpg" alt="Jason Lengstorf"></a>	
		<figcaption><span class="name">Jason Lengstorf</span>
<span class="bio">	
	
IBM<br/> 
		</span></figcaption>

	    </figure>
  </label>
</li>
<!--
<li>
  <label for="">
	<figure><a href="https://twitter.com/"><img src="avatars/" alt=""></a>	
		<figcaption><span class="name"></span>
<span class="bio">	
	
<br/> 
		</span></figcaption>

	    </figure>
  </label>
</li>
<li>
  <label for="">
	<figure><a href="https://twitter.com/"><img src="avatars/" alt=""></a>	
		<figcaption><span class="name"></span>
<span class="bio">	
	
<br/> 
		</span></figcaption>

	    </figure>
  </label>
</li>
<li>
  <label for="">
	<figure><a href="https://twitter.com/"><img src="avatars/" alt=""></a>	
		<figcaption><span class="name"></span>
<span class="bio">	
	
<br/> 
		</span></figcaption>

	    </figure>
  </label>
</li>
<li>
  <label for="">
	<figure><a href="https://twitter.com/"><img src="avatars/" alt=""></a>	
		<figcaption><span class="name"></span>
<span class="bio">	
	
<br/> 
		</span></figcaption>

	    </figure>
  </label>
</li>-->

</ul>
</section>
<section class="reg" id="reg">
	<h1>Register for #PerfMatters Conference</h1>
	<p>March 27-28, 2018 at Cañada College</p>
	<table>
		<thead><tr>
			<th>Ticket Type</th>
			<th>Available Through</th>
			<th>Cost</th>
		</tr></thead>
		<tbody>
		<tr>
			<td><strike>Very Early Bird</strike></td>
			<td><strike>September 30, 2017</strike></td>
			<td><strike>$239</strike></td>
		</tr>
		<tr>
			<td><strike>Early Bird</strike></td>
			<td><strike>November 30, 2017</strike></td>
			<td><strike>$329</strike></td>
		</tr>
		<tr>
			<td>Regular Bird</td>
			<td>January 31, 2018</td>
			<td>$399</td>
		</tr>
		<tr>
			<td>Late Bird</td>
			<td>March 24, 2018</td>
			<td>$479</td>
		</tr>
		<tr>
			<td>Indecisive Bird</td>
			<td>At the venue</td>
			<td>$579</td>
		</tr>
		<tr>
			<td colspan="3"><a href="https://perfmattersconf.lilregie.com" title="Register Now" class="cta">Register Now</a></td>
		</tr>
	</tbody></table><p><small>Prices subject to change. No refunds. Tickets are transferable with notice. Getting tickets for a 5 or more people? Get $50 off for the fifth person and everyone thereafter. Group of 10 or more? Contact us at <a href="mailto:tickets@perfmattersconf.com">tickets@perfmattersconf.com</a></small>
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