<?php
  include 'info.inc';
  include 'speakers.inc';
  # if($name) {echo $fullname;}
 ?><!doctype html>
<html lang="en">
  <head>
  	<title>#PerfMatters: Web Performance Conference</title>
  	<meta name="description" content="#PerfMatters - A Front-End Web Performance Conference in Redwood City, CA in April <? echo $year ?>.">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<?php if($name) { ?>
  	  <meta name="twitter:image" content="https://perfmattersconf.com/large/<?php echo $name ?>.jpg"/>
      <meta name="twitter:url" content="https://www.perfmattersconf.com/?name=<?php echo $name ?>#speakers" />
      <meta property="og:title"
      content='<?php echo $fullname ?>: <?php echo $talk_title ?>' />
      <meta property="og:type" content="article" />
      <meta property="og:image" content="https://perfmattersconf.com/large/<?php echo $name ?>.jpg" />
      <meta name="author" content="Estelle Weyl" />
      <meta property="og:url" content="https://www.perfmattersconf.com/?name=<?php echo $name ?>#speakers" />
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@perfmattersconf">
      <meta name="twitter:title" content='<?php echo $fullname ?>: <?php echo $talk_title ?>'>
      <meta property="og:description" content='<?php echo substr($talk_description, 0, 240) ?>' />
   <?php } else { ?>
      <meta name="twitter:image" content="https://perfmattersconf.com/images/twitter_banner.jpg"/>
      <meta name="twitter:url" content="https://www.perfmattersconf.com/" />
      <meta property="og:title" content="#PerfMatters Front End Web Performance Conference" />
      <meta property="og:type" content="article" />
      <meta property="og:image" content="https://perfmattersconf.com/images/twitter_banner.jpg" />
      <meta name="author" content="Estelle Weyl" />
      <meta property="og:url" content="https://www.perfmattersconf.com/" />
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@perfmattersconf">
      <meta name="twitter:title" content="#PerfMatters Front End Web Performance Conference 2019">
      <meta property="og:description" content="A two-day community Web Performance conference happening <? echo $date ?> in Redwood City, CA. Workhops on <? echo $wk_date ?> to help get people up to speed on Web Performance. Hackathon on <? echo $hk_date ?> to improve online performance documentation." />
    <?php } ?>
  	<style>
      <?php include("css/style.css"); ?>
      @media screen and (min-color-index:0) and(-webkit-min-device-pixel-ratio:0) and (min-width: 480px) and (max-width: 640px) {
      	.speakers ul {}
      	.speakers li {min-height:320px;flex: 0 0 auto; box-sizing: border-box;}
      }
      @media screen and (min-color-index:0) and(-webkit-min-device-pixel-ratio:0)  and (max-width: 479px) {
      	.speakers ul {flex-direction: column;
      	}
      	.speakers li {min-height:320px;}
      }
  	</style>
  </head>

  <body id="home">
    <aside>
      <div class="container-large">
        <?php echo $tagline ?>
      </div>
    </aside>

    <header>
      <hgroup class="container-large">
        <?php echo $logo ?>

        <?php echo $nav ?>

        <a href="/" class="circle">
        	<h1>#PerfMatters</h1>
        	<h2>Redwood City, CA <br/>
        	<?php echo $date ?></h2>
        </a>

        <div class="about">
      		<h2>What is <span>#PerfMatters</span>?</h2>
      		<p>#PerfMatters Conference is the web performance conference in Redwood City, California with talks by internationally renowned performance developers. Our focus is on front-end web performance.</p>

          <div class="buttons">
    				<a class="btn-cta" href="#reg">Register Now</a> <a href="workshop/" title="Find Out about our workshop" class="btn">Workshop</a>
    			</div>

          <p>Hackathon information coming soon.</p>
      	</div>
  	  </hgroup>
    </header>

    <main>
      <section class="speakers" id="speakers">
        <div class="container-large">
          <h2>Speakers</h2>
          <ul>
            <?php
              $people = array("addy","sarah","pat","ewa","shubhie","erica","tim","anthonia", "tatiana", "rick", "katie", "keerthana", "ryan", "mina","robert", "lauren", "gemma", "eric", "buddy", "heather", "mandy", "alfredo",  "greg", "nathan", "estelle");

              foreach ($people as $name) {
              	$person = getInformation($name);
            ?><li>
              <figure>
                <a href="talks/#<?php echo $name ?>">
                  <img data-src="avatars/<?php echo $name ?>.jpg" style="background-color: white" alt="<?php echo $person->fullname ?>">
                </a>

                <figcaption>
                  <span class="name"><?php echo $person->fullname ?></span>

                  <span class="bio">
                    <?php echo $person->job ?><br/>
                    <?php echo $person->company ?>
                  </span>
                </figcaption>
              </figure>
            </li><?php } ?>
          </ul>
        </div>
      </section>

      <section>&nbsp;</section>

      <section class="reg" id="reg">
        <div class="container-small">
        	<h1>Register for #PerfMatters Conference</h1>

          <p><?php echo $date ?> at Cañada College</p>

          <?php echo $reg ?>

          <p>
            <small>Prices subject to change. No refunds. Tickets are transferable with notice. Getting tickets for a 5 or more people? Get $50 off for the fifth person and everyone thereafter. Group of 10 or more? Contact us at <a href="mailto:tickets@perfmattersconf.com">tickets@perfmattersconf.com</a></small>
          </p>
        </div>
      </section>
    </main>

    <footer>
      <div class="container-large">
        <?php echo $nav ?>

        <?php echo $footer ?>
      </div>
    </footer>
    <script>
    	/* download all defered images */
    	[].forEach.call(document.querySelectorAll('img[data-src]'),    function(img) {
        img.setAttribute('src', img.getAttribute('data-src'));
        img.onload = function() {
          img.removeAttribute('data-src');
        };
      });

    	/* download defered css */
    	var styles = document.createElement('link');
    	styles.setAttribute('rel', 'stylesheet');
    	styles.setAttribute('href', 'css/styles.css');
    	var head = document.querySelector('head');
    	head.appendChild(styles);
    </script>
  </body>
</html>
