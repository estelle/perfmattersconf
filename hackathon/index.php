<?php include '../info.inc' ?><!doctype html>
<html lang="en">
  <head>
  	<title>#PerfMatters: Hack on MDN</title>
    <meta name="viewport" content="width=device-width">
  	<link rel="stylesheet" href="../css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <?php echo $font ?>
    <meta name="twitter:image" content="https://perfmattersconf.com/images/workshop_ad.png"/>
    <meta name="twitter:url" content="https://www.perfmattersconf.com/workshop?tim" />
    <meta property="og:title" content="Get up to speed Workshop #PerfMatters Conference" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://perfmattersconf.com/images/workshop_ad.png" />
    <meta name="author" content="Estelle Weyl" />
    <meta property="og:url" content="https://www.perfmattersconf.com/workshop/" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@perfmattersconf">
    <meta name="twitter:title" content="Get up to Speed! Make the most of the #PerfMatters Conference with a full day workshop on web performance to get you up to speed with all you need to know about web performance. ">
    <meta property="og:description" content="Get up to Speed Web Performance Workshop: part of the #PerfMatters Conference" />
  </head>

  <body>
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

        <div class="headerblurb">
          <h1>Hack on MDN: Web Performance</h1>
          <p>Thursday, April 4, 2019, we're having a full day hackathon to help document performance for the greater web developer community. Participants will team up to help evangelize web performance, convincing developers #PerfMatters, and teaching them tip and tricks to ensure the web is accessible to everyone, no matter their device or bandwidth.</p>
        </div>
      </hgroup>
    </header>

    <main>
      <section>
        <div class="container-small">
          <h1>Hack-on-MDN: Web Performance</h1>

          <p>Websites may be slow, but the web itself moves fast. Every day new techniques and tools emerge, promising to make your site faster and lighter. New articles are written about the latest "best practices" in performance, only to have yet newer articles contradict them. When the technologies and techniques we use to make websites more performant change so quickly, it's easy to feel like you're falling behind.</p>

          <p>But if you pull back the layers and the hype, drilling into the core concepts of how the network and browsers we rely on actually work, it suddenly becomes much easier to recognize which best practices are actually appropriate for you, and what trade-offs you're making.</p>

          <p>In this workshop, we'll go beyond the latest and greatest techniques and tools to understand what is going on at the core. We'll explore: </p>

          <ul>
            <li>How the browser renders pages, from the very first request on the network to the final pixel on your screen</li>
            <li>What the critical rendering path is and how to optimize for it</li>
            <li>How HTTP/2 differs from HTTP/1 and what that means for popular opimizations</li>
            <li>How to identify common performance bottlenecks in your sites and applications</li>
          </ul>

          <p>By the time we're done, you'll have a firm understanding of what makes sites fast, and how to separate the hype from reality. After the workshop, you should be confident attending and keeping up with all the discussions both on-stage and off-stage at #PerfMattersConference.</p>
        </div>
      </section>

      <section></section>

      <section class="reg" id="reg">
        <div class="container-large">
          <h1>Register for the Web Performance Hack on MDN</h1>

          <p>April 4, 2018 at Cañada College</p>

          <p>DIVERSITY DISCOUNTS AVAILABLE!</p>

          <?php echo $reg ?>

          <p>DIVERSITY DISCOUNTS AVAILABLE!</p>

          <p><small>Prices subject to change. No refunds. Tickets are transferable with notice. Questions? Contact us at <a href="mailto:tickets@perfmattersconf.com">tickets@perfmattersconf.com</a></small></p>
        </div>
      </section>

      <section>
        <div class="container-small">
          <h2 style="text-align: left;">About MDN</h2>

          <p><a href="https://developer.mozilla.com" target="_blank">Mozilla Developer Network</a> is a resource for developers, maintained by the community of developers and technical writers, hosting documents on all open web topics including HTML5, JavaScript, CSS, Web APIs, Node.js, WebExtensions and developer tools. The MDN Web Docs site provides information about open web technologies and user experience, including web performance, accessibility, internationalization, privacy, security, and UX design principles.</p>
        </div>
      </section>
    </main>

    <footer>
      <div class="container-large">
        <?php echo $nav ?>

        <?php echo $footer ?>
      </div>
    </footer>
  </body>
</html>
