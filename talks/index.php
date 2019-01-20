<?php
  include '../info.inc';
  include '../speakers.inc';
  # if($name) {echo $fullname;}
 ?><!doctype html>
<html lang="en">
  <head>
  	<title>#PerfMatters :: Speakers and Talk descriptions</title>
  	<meta name="description" content="The speakers and talks making #PerfMatters the premiere Front-End Web Performance Conference in Redwood City, CA in March 2018.">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">


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
      <meta name="twitter:image" content="https://perfmattersconf.com/images/twitter_banner.jpg"/>
      <meta name="twitter:url" content="https://www.perfmattersconf.com/" />
      <meta property="og:title" content="Get up to speed Workshop #PerfMatters Conference" />
      <meta property="og:type" content="article" />
      <meta property="og:image" content="https://perfmattersconf.com/images/twitter_banner.jpg" />
      <meta name="author" content="Estelle Weyl" />
      <meta property="og:url" content="https://www.perfmattersconf.com/talks/" />
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@perfmattersconf">
      <meta name="twitter:title" content="Talks :: #PerfMatters Conference 2018">
      <meta property="og:description" content="The talks being presented at our two-day community Web Performance conference happening <? echo $date ?> in Redwood City, CA. Getting Up To Speed workhop on <? echo $wk_date ?> to help get people up to speed on Web Performance." />
    <?php } ?>

  	<style>
      <?php include("../css/style.css"); ?>
      @media screen and (max-width: 640px){
        .talks.talks.talks li>div {
            flex-direction: column;
        }
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
      		<h2><span>#PerfMatters Conference Sessions</span>?</h2>
      		<p>One track, two days, a gazillion great talks (so far), a bazillion amazing speakers, plus a one day <a href="../workshop/">workshop</a> and a one day hack-a-thon</p>

      		<div class="buttons">
    				<a class="btn-cta" href="#reg">Register Now</a> <a href="../workshop/" title="Find Out about our workshop" class="btn">Workshop</a>
    			</div>
      	</div>
      </hgroup>
    </header>

    <main>
      <section class="talks" id="talks">
        <div class="container-small">
          <h2>Talks</h2>

          <ul>
            <?php
              $people = array("addy","sarah","pat","ewa","shubhie","erica","tim","anthonia", "tatiana", "rick", "katie", "ryan", "robert", "eric", "buddy", "lauren", "gemma", "heather", "mandy", "alfredo", "keerthana", "greg", "nathan","mina", "estelle");

              foreach ($people as $name) {
                $person = getInformation($name);
            ?><li id="<?php echo $name ?>">
              <h2><?php echo $person -> talk_title ?></h2>

              <div>
                <figure>
                  <a href="https://twitter.com/<?php echo $person->twitter ?>">
                    <img data-src="../avatars/<?php echo $name ?>.jpg" alt="<?php echo $person->fullname ?>">
                  </a>

                  <figcaption>
                    <h4 class="name"><?php echo $person->fullname ?></h4>

                    <p class="bio"><?php echo $person->job ?><?php if (strlen($person->company) > 0) {echo ", ";} ?> <?php echo $person->company ?></p>
                  </figcaption>
                </figure>

                <div>
                  <p><?php echo $person -> talk_description ?></p>

                  <hr/>

                  <h2>About <?php echo $person->fullname ?></h2>

                  <p><?php echo $person->about ?></p>
                </div>
              </div>
            </li><?php } ?>
          </ul>
        </div>
      </section>

      <section></section>

      <section class="reg" id="reg">
        <div class="container-small">
          <h1>Register for #PerfMatters Conference</h1>

          <p><? echo $date ?> at Cañada College</p>

          <?php echo $reg ?>

          <p><small>Prices subject to change. No refunds. Tickets are transferable with notice. Getting tickets for a 5 or more people? Get $50 off for the fifth person and everyone thereafter. Group of 10 or more? Contact us at <a href="mailto:tickets@perfmattersconf.com">tickets@perfmattersconf.com</a></small></p>
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
    	[].forEach.call(document.querySelectorAll('img[data-src]'),    function(img) {
        img.setAttribute('src', img.getAttribute('data-src'));
        img.onload = function() {
          img.removeAttribute('data-src');
        };
      });
    </script>
  </body>
</html>
