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
				<a class="btn-cta" href="#reg">Register Now</a>
			</div>
		</div>
	</hgroup>
</header>
<main>

<section class="speakers" id="speakers">
<h2>Speakers</h2>
<ul>
<li>
	<lable for="paul"><figure><a href="https://twitter.com/paul_irish"><img data-src="avatars/paul.jpg" alt="Paul Irish"></a>	<figcaption>Paul Irish<br/> Performance Engineer<br/> Google Chrome</figcaption>    </figure>
  </label>
</li>

<li>
  <label for="rachel">
	<figure><a href="https://twitter.com/rachelnabors"><img data-src="avatars/rachel.jpg" alt="Rachel Nabors"></a>	
		<figcaption>Rachel Nabors<br/>
			Program Manager<br/>Microsoft
		</figcaption>
	    </figure>
  </label>
</li>

<li>
  <label for="yoav">
	<figure><a href="https://twitter.com/yoavweiss"><img data-src="avatars/yoav.jpg" alt="Yoav Weiss"></a>	
		<figcaption>Yoav Weiss<br/>
			Principal Architect<br/>Akamai
		</figcaption>
	    </figure>
  </label>
</li>


<li>
  <label for="sharon">
	<figure><a href="https://twitter.com/SharonSteed"><img data-src="avatars/sharon.jpg" alt="Sharon Steed"></a>	
		<figcaption>Sharon Steed<br/>
			Communilogue, LLC<br/>Founder/CEO 
		</figcaption>
	    </figure>
  </label>
</li>

<li>
  <label for="leonie">
	<figure><a href="https://twitter.com/leoniewatson"><img data-src="avatars/leonie.jpg" alt="Léonie Watson "></a>	
		<figcaption>Léonie Watson<br/>
			Principal Engineer, Paciello Group<br/>W3C Web Platform WG co-chair 
		</figcaption>
	    </figure>
  </label>
</li>
<li>

  <label for="jem">
	<figure><a href="https://twitter.com/jemyoung"><img data-src="avatars/jem.jpg" alt="Jem Young"></a><figcaption>Jem Young<br/>Senior Software Engineer<br/> Netflix</figcaption>    </figure>
  </label>
</li>
<li>

  <label for="marcy">
  	<figure><a href="https://twitter.com/marcysutton"><img data-src="avatars/marcy_sutton.jpg" alt="Marcy Sutton"></a><figcaption>Marcy Sutton<br/>Senior Front-End Engineer<br/> Deque Systems</figcaption>    </figure>
  </label>
</li>



<li>
  <label for="eli">
	<figure><a href="https://twitter.com/EliFitch"><img data-src="avatars/eli.jpg" alt="Eli Fitch"></a>	
		<figcaption>Eli Fitch<br/>
			Senior Web Application Engineer<br/>MapBox 
		</figcaption>
	    </figure>
  </label>
</li>

<li>
  <label for="lin">
	<figure><a href="https://twitter.com/linclark"><img data-src="avatars/lin.jpg" alt="Lin Clark"></a>	
		<figcaption>Lin Clark<br/>
			Code Cartoonist<br/>Mozilla
		</figcaption>
	    </figure>
  </label>
</li>


<li>
  <label for="simon">
	<figure><a href="https://twitter.com/simonhearne"><img data-src="avatars/simon.jpg" alt="Simon Hearne"></a>	
		<figcaption>Simon Hearne<br/>
			Principle Software Engineer<br/>Akamai 
		</figcaption>
	    </figure>
  </label>
</li>

<li>
  <label for="katie">
	<figure><a href="https://twitter.com/ksylor"><img data-src="avatars/katie.jpg" alt="Katie Sylor-Miller"></a>	
		<figcaption>Katie Sylor-Miller<br/>
			Staff Software Engineer<br/>Etsy
		</figcaption>
	    </figure>
  </label>
</li>






<li>
  <label for="javier">
	<figure><a href="https://twitter.com/JJavierGarza"><img data-src="avatars/javiergarza.jpg" alt="Javier Garza"></a>	
		<figcaption>Javier Garza<br/>
			Senior Enterprise Architect<br/>Akamai 
		</figcaption>
	    </figure>
  </label>
</li>

<li>
  <label for="bianca">
	<figure><a href="https://twitter.com/bianca_berning"><img data-src="avatars/bianca.jpg" alt="bianca berning"></a>	
		<figcaption>Bianca Berning<br/>
			Font Engineer<br/>Dalton Maag 
		</figcaption>
	    </figure>
  </label>
</li>


<li>
  <label for="jessica">
	<figure><a href="https://twitter.com/missycat"><img data-src="avatars/jessica.jpg" alt="Jessica Chan"></a>	
		<figcaption>Jessica Chan<br/>
			Pinterest
		</figcaption>
	    </figure>
  </label>
</li>



<li>
  <label for="sarah">
	<figure><a href="https://twitter.com/sarahddubs"><img data-src="avatars/sarah.jpg" alt="Sarah Dapul-Weberman"></a>	
		<figcaption>Sarah Dapul-Weberman<br/>
        Software Engineer<br/>
			Pinterest
		</figcaption>
	    </figure>
  </label>
</li>


<li>
  <label for="michelle">
	<figure><a href="https://twitter.com/"><img data-src="avatars/michelle.jpg" alt="Michelle Vu"></a>	
		<figcaption>Michelle Vu<br/>
        Software Engineer<br/>
			Pinterest
		</figcaption>
	    </figure>
  </label>
</li>



<li>
  <label for="gopal">
	<figure><a href="https://twitter.com/"><img data-src="avatars/gopal.jpg" alt="Gopal Brugalette"></a>	
		<figcaption>Gopal Brugalette<br/>
			Principal Software Engineer<br/>Concur 
		</figcaption>
	    </figure>
  </label>
</li>
<li>
  <label for="jeremy">
	<figure><a href="https://twitter.com/malchata"><img data-src="avatars/jlwagner.jpg" alt="Jeremy Wagner"></a>	
		<figcaption>Jeremy Wagner<br/>
			Web Developer 
		</figcaption>
	    </figure>
  </label>
</li>
<li>
  <label for="dawn">
	<figure><a href="https://twitter.com/dparzych"><img data-src="avatars/dawn.jpg" alt="Dawn Parzych"></a>	
		<figcaption>Dawn Parzych<br/>
			Director of Product and Solution Marketing<br/>Catchpoint 
		</figcaption>
	    </figure>
  </label>
</li>


<li>
  <label for="jacques">
	<figure><a href="https://twitter.com/betaorbust"><img data-src="avatars/jacques.jpg" alt="Jacques Favreau"></a>	
		<figcaption>Jacques Favreau<br/>
			Senior UI Engineer<br/>
			Netflix 
		</figcaption>
	    </figure>
  </label>
</li>
<li>
  <label for="vitor">
	<figure><a href="https://twitter.com/vitortalaia"><img data-src="avatars/vitor.jpg" alt="Vitor Talaia"></a>	
		<figcaption>Vitor Talaia<br/>Junior Developer
			<br/> Code Miner 42
		</figcaption>
	    </figure>
  </label>
</li>
<li>
  <label for="kim">
	<figure><a href="https://twitter.com/"><img src="avatars/kim.jpg" alt="Kimberly Munoz"></a>	
		<figcaption>Kimberly Munoz<br/>
			Web Developer<br/>Slack 
		</figcaption>
	    </figure>
  </label>
</li>
<!--
<li>
  <label for="">
	<figure><a href="https://twitter.com/"><img src="avatars/" alt=""></a>	
		<figcaption><br/>
			<br/> 
		</figcaption>
	    </figure>
  </label>
</li>
<li>
  <label for="">
	<figure><a href="https://twitter.com/"><img src="avatars/" alt=""></a>	
		<figcaption><br/>
			<br/> 
		</figcaption>
	    </figure>
  </label>
</li>
<li>
  <label for="">
	<figure><a href="https://twitter.com/"><img src="avatars/" alt=""></a>	
		<figcaption><br/>
			<br/> 
		</figcaption>
	    </figure>
  </label>
</li>
<li>
  <label for="">
	<figure><a href="https://twitter.com/"><img src="avatars/" alt=""></a>	
		<figcaption><br/>
			<br/> 
		</figcaption>
	    </figure>
  </label>
</li>
<li>
  <label for="">
	<figure><a href="https://twitter.com/"><img src="avatars/" alt=""></a>	
		<figcaption><br/>
			<br/> 
		</figcaption>
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