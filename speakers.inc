<?php
$name = $_GET["name"];

if ($name) {
	$results = getInformation($name);
	$fullname = $results->fullname;
	$job      = $results->job;
	$company  = $results->company;
	$twitter  = $results->twitter;
	$talk_title = $results->talk_title;
	$talk_description = $results->talk_description;
	$about    = $results->about;
}

function getInformation ($name){

if ($name) {
	$fullname = '';
	$job      = '';
	$company  = '';
	$twitter  = '';
	$talk_title = '';
	$talk_description = '';
	$about = '';
	switch ($name) {
		case 'paul':
			$fullname = 'Paul Irish';
			$job      = 'Performance Engineer';
			$company  = 'Google';
			$twitter  = 'paul_irish';
			$talk_title = 'Web Perf Metrics & Measurement in 2018';
			$talk_description = 'Chrome developer tools aficionado (understatement) and Google web performance engineer, will present web performance metrics and measurements in 2018';
			$about    = "";
		    break;

		case 'marcy':
			$fullname = 'Marcy Sutton';
			$job      = 'Senior Front-End Engineer';
			$company  = 'Deque Systems';
			$twitter  = 'marcysutton';
			$talk_title = 'React/Virtual DOM and accessibility';
			$talk_description = 'TBD';
			$about	  = "Marcy Sutton works on web accessibility tools at Deque Systems, a company focused on digital equality. In 2016, O&rsquo;Reilly gave Marcy a Web Platform Award for her work in accessibility. She loves co-leading the Accessibility Seattle meetup and a code club for Girl Develop It Bellingham. When away from the keyboard, Marcy can be found hiking with her dog, riding a bicycle, or snowboarding.";
		    break;

		case 'leonie':
			$fullname = 'Léonie Watson';
			$job      = 'Principal Engineer';
			$company  = ', Paciello Group and W3C Web Platform WG co-chair';
			$twitter  = 'leoniewatson';
			$talk_title = "There&rsquo;s more to performance than meets the eye";
			$talk_description = "What does performant look like when you can&rsquo;t see the screen? The browser does more with the DOM than visually render content. It presents an accessibility tree that&rsquo;s queried using platform accessibility APIs. Different browser processing models mean that Assistive Technologies (AT) are changing the way they obtain accessibility information, but is that having an impact on performance, and what happens when we introduce a new JavaScript accessibility API into the equation?";
			$about    = '<p>L&eacute;onie Watson (AKA Tink) began using the internet in 1993, turned it into a web design career in 1997, and (despite losing her eyesight along the way) has been enjoying herself thoroughly ever since.</p>
<p>L&eacute;onie is Communications director and Principal engineer at <a href="http://paciellogroup.com">The Paciello Group (TPG)</a>, and also works with Government Digital Service (GDS) on the <a href="http://gov.uk">GOV.UK platform</a>.</p>
<p>As a member of the <a href="https://www.w3.org/2002/ab/">W3C Advisory Board</a>, and co-chair of the <a href="https://www.w3.org/WebPlatform/WG/">W3C Web Platform WG</a> (working on specs like HTML5), L&eacute;onie is closely involved with the web standards community. She is frequently asked to talk about web standards and/or accessibility at <a href="http://ljwatson.github.io/decks">conferences</a>.</p>
<p>In her spare time L&eacute;onie blogs on <a href="http://tink.uk">tink.uk</a>, writes for tech journals like <a href="https://www.smashingmagazine.com/2015/03/web-accessibility-with-accessibility-api/">Smashing magazine</a>, <a href="https://www.sitepoint.com/tips-accessible-svg/">SitePoint.com</a> and <a href="http://www.creativebloq.com/netmag/l-onie-watson-giving-damn-about-what-youre-building-8135487">Net magazine</a>. She also loves cooking, dancing and drinking tequila (although not necessarily in that order).</p>';
		    break;

		case 'katie':
			$fullname = 'Katie Sylor-Miller';
			$job      = 'Staff Software Engineer';
			$company  = 'Etsy';
			$twitter  = 'ksylor';
			$talk_title = 'Raiders of the Fast Start: Frontend Performance Archaeology';
			$talk_description =  "There are a lot of books, articles, and online tutorials out there with fantastic advice on how to make your websites performant. It all seems easy in theory, but applying best practices to real-world code is anything but straightforward. Diagnosing and fixing frontend performance issues on a large legacy codebase is like being an archaeologist excavating the remains of a lost civilization. You don&rsquo;t know what you will find until you start digging! </p>

<p>Pick up your trowels and come along with Etsy&rsquo;s Frontend Systems team as we become archaeologists digging into frontend performance on our large, legacy mobile codebase. I&rsquo;ll share real-life lessons you can use to guide your own excavations into legacy code:</p>

<ul> <li>What tools and metrics we used to diagnose issues and track progress.</li> 
<li>How we went beyond server-driven best practices to focus on the client.</li> 
<li> Which fixes successfully increased conversion, and which didn&rsquo;t.</li>
</ul> 
 
<p>Our work, like all good archaeology, went beyond artifacts and unearthed new insights into our culture. We at Etsy pride ourselves on our culture of performance, but, like all cultures, it needs to adapt and reinvent itself to account for changes to the landscape. Based on what we&rsquo;ve learned, we are making the case for a new, organization-wide, frontend-focused performance culture that will solve the problems we face today.";
			$about    = "Katie Sylor-Miller is a Senior Software Engineer on the Frontend Systems team at Etsy, where she advocates for and implements frontend best practices in collaboration with product engineers and designers. She is passionate about frontend architecture, design systems, style guides, accessibility, frontend performance, and teaching others. Katie created ohshitgit.com to share her hard-won knowledge of how to get out of your git messes with a bit of humor (and a lot of swears).";
		    break;

		case 'eli':
			$fullname = 'Eli Fitch';
			$job      = 'Senior Web Application Engineer';
			$company  = 'MapBox';
			$twitter  = 'EliFitch';
			$talk_title = 'Perceived Performance: The only kind that really matters';
			$talk_description = "Web performance has made incredible strides in the last few years, which has presented developers with a new problem: How do we efficiently improve our app&rsquo;s performance now that we&rsquo;ve plucked the low hanging fruit from the vine?  How do we make an API driven app faster when the performance bottleneck are API requests?  The answer is directly manipulating users' perceptions in order to make our projects *feel* faster than they really are.</p>

<p>This isn&rsquo;t easy.  Humans are imprecise beings, and how we perceive the world around us is fraught with fascinating quirks.  Improving perceived performance is likewise an incredibly challenging prospect.  If people don&rsquo;t perceive time accurately, how can you possibly hope to build to meet this nebulous standard?</p>

<p>In this talk, Eli will discuss the psychological basics of how people sense time, and how to use this understanding to create experiences that feel fast, tactile, and create the illusion of speed.  He&rsquo;ll break down real world, actionable guidelines on:</p>
<ul>
<li>When it makes sense to focus on perceived performance over outright speed
</li><li>How to turn the difference between active and passive mental states to our advantage
</li><li>How to make \"fake\" progress bars feel genuine
</li><li>How to cleverly craft animations to make loading seem faster
</li><li>When to use unconventional event listeners to increase perceived speed
</li><li>Predictive preloading: The art of anticipating user behavior and loading assets just in time</li></ul>";
			$about  = "Eli Fitch is a developer with a passion for web performance, animation, and WebGL. He makes tools to create beautiful interactive maps at Mapbox, a startup in his hometown of Washington, DC. He also organizes the DC CodePen meetup and dabbles in design, 3D art, and game development. When not in front of a computer, he restores his perpetually broken stable of 1970s motorcycles and attempts to keep his historic row house from collapsing in on itself like a dying star.";
		    break;

		case 'jem':
			$fullname = 'Jem Young';
			$job      = 'Senior Software Engineer';
			$company  = 'Netflix';
			$twitter  = 'jemyoung';
			$talk_title = 'TBD';
			$talk_description = 'TBD';
			$about    = "";
		    break;

		case 'bianca':
			$fullname = 'Bianca Berning';
			$job      = 'Font Engineer';
			$company  = 'Dalton Maag';
			$twitter  = 'bianca_berning';
			$talk_title = 'The Potential of Variable Fonts';
			$talk_description = 'One OpenType variable font file can contain the equivalent of multiple individual fonts and allows for a near infinite range of font styles, with smooth interpolation between weights, width and other design axes. With my presentation I want to answer the following questions: What is the difference between a static and a variable font? What are the performance benefits of variable fonts in comparison to static fonts? Why do designers and typographers care about a range of font styles? How can variable fonts improve the user experience?';
			$about    = "Bianca Berning is a font engineer and type designer and heads up the Skills and Process department for font foundry Dalton Maag. She is an active member of Alphabettes, ATypI and the Unicode Consortium; and she coordinates a mentorship program with the aim to help students and professional newcomers immerse themselves in the industry.";
		    break;

		case 'vitor':
			$fullname = 'Vitor Talaia';
			$job      = 'Junior Developer';
			$company  = 'Code Miner 42';
			$twitter  = 'vitortalaia';
			$talk_title = 'Accelerated Mobile Pages: The good, the bad and the ugly';
			$talk_description = "The purpose of this talk is to introduce the Accelerated Mobile Pages (AMP) project, a way to make web pages load insanely fast on mobile devices. How it works, its benefits —and why it&rsquo;s a hot topic for media publishers—, its downsides —and why developers are criticizing it.";
			$about    = "Developer at Codeminer 42 that also likes to watch Formula One races; Currently working on implementing​ an AMP blog version for a big brazilian e-commerce platform.";
		    break;

		case 'yoav':
			$fullname = 'Yoav Weiss';
			$job      = 'Principal Architect';
			$company  = 'Akamai';
			$twitter  = 'yoavweiss';
			$talk_title = 'Faster Bytes is Not Always Enough - Why is The Web Slow? (and what can we do about it)';
			$talk_description = "Our networks are getting exceedingly faster. Unfortunately, that&rsquo;s not always enough to make sure users perceive their experience as fast when they are loading your web site. So, how do users perceive web performance? What does a browser do when it loads a page? And what makes a web page \"fast\"? </p>

<p>In this talk, Yoav Weiss will go over the various processing modes that a browser goes through when it loads web pages. He will explain the connection between the various networking protocols and web performance as perceived by the user.
He will talk about the different metrics we use when measuring the performance of a page, and discuss how changes in the web&rsquo;s content layer are impacting those metrics and the user experience. Finally, he&rsquo;ll detail performance API and protocol enhancements that can help us remedy the situation and make our customer sites faster.";
			$about    = "Yoav Weiss is a principal architect at Akamai, where he focuses on making the Web platform faster by adding performance-related features to browsers as well as to Akamai&rsquo;s CDN. Yoav has been working on mobile Web performance for longer than he cares to admit. He takes image bloat on the Web as a personal insult, which is why he joined the Responsive Image Community Group and implemented the various responsive images features in Blink and WebKit. When he&rsquo;s not writing code, he&rsquo;s probably slapping his bass, mowing the lawn in the French countryside, or playing board games with his family.";
		    break;

		case 'sharon':
			$fullname = 'Sharon Steed';
			$job      = 'Founder/CEO';
			$company  = 'Communilogue, LLC';
			$twitter  = 'SharonSteed';
			$talk_title = 'Cultivating community: building powerful relationships by communicating with empathy';
			$talk_description = "One of our most valuable commodities as humans is our ability to build relationships - both personally and professionally. And the key to any successful relationship is empathy: being able to understand someone, connect with someone and view the world through their eyes. The problem is that the empathy needed to cultivate relationships, foster collaboration and build strong communities is often times lacking, especially when we are around people who are different from us. And if empathy is the tie that binds us, then vulnerability is the thread that holds that rope together. It&rsquo;s time to change the status quo in tech.</p>

<p>Let&rsquo;s explore the impact of empathy on communities. We&rsquo;ll discuss how communication plays a role in building successful relationships; how empathy fosters highly collaborative teams; and finally we&rsquo;ll talk about true accessibility. Why? Because innovation is at it&rsquo;s best when it&rsquo;s inclusive. And to be inclusive, you must be empathetic.";
			$about    = "Sharon Steed is a corporate empathy and communications consultant as well as an international keynote speaker. Sharon is a subject matter expert on communicating with empathy. She has spoken at companies on improving team communication and collaboration; at tech conferences on vulnerability as an asset; and has given a TEDx talk on empowering insecurities. A lifelong stutterer, she uses her speech impediment to teach both what empathy is and how to be empathetic.</p>

<p>Her corporate empathy practice teaches organizations how to build a collaborative culture using principles of empathy. Sharon works with teams looking to boost productivity through improving collaboration as well as with individuals on effective, productive and positive communication strategies.</p>

<p>Sharon&rsquo;s course \"Communicating with Empathy\" is available on both LinkedIn Learning and Lynda.com.";
		    break;

		case 'lin':
			$fullname = 'Lin Clark';
			$job      = 'Code Cartoonist';
			$company  = 'Mozilla';
			$twitter  = 'linclark';
			$talk_title = 'Making the browser faster';
			$talk_description = "There are lots of talks about how web developers can make their sites run faster. In this talk, let&rsquo;s turn the tables and look at how browser developers can make their browsers faster. </p>

<p>We&rsquo;ll see how a CSS engine can be modified to run up to 18x faster, and how you can get up to 400 frames per second by rendering like a 3D game engine. Then we&rsquo;ll talk about other future directions to explore in speeding up the browser.";
			$about    = "Lin Clark is a code cartoonist. She takes complex coding concepts and turns them into cartoons. She also works in Mozilla&rsquo;s Emerging Technologies group, where she gets to tinker with things like WebAssembly, Servo, and Rust. In previous lives, she worked at npm, was a core contributor to open source projects like Firefox&rsquo;s developer tools, and contributed to HTML data standards.";
		    break;

		case 'jeremy':
			$fullname = 'Jeremy Wagner';
			$job      = 'Web Developer';
			$company  = 'Freelance';
			$twitter  = 'malchata';
			$talk_title = 'Demystifying Performance Timings';
			$talk_description = "If you&rsquo;ve ever experimented with the navigation and resource timing APIs in the browser, it can be a daunting task to understand the performance timings they provide. What&rsquo;s the difference between connectStart and fetchStart? Where does SSL time figure in? What the heck does domInteractive mean, and how is that different from domComplete? What order do these timings even occur in?</p>

<p>In this talk, we&rsquo;re going to demystify these performance timings. We&rsquo;ll define them, place them in proper order, and you&rsquo;ll learn how to quantify the time your site and its assets are taking to load in distinct phases. All you&rsquo;ll need is a basic working knowledge of JavaScript, and simple arithmetic skills. If you&rsquo;ve wanted to make sense of performance timings, this is the talk for you!";
			$about    = "Jeremy Wagner is a web developer living and working in Saint Paul, Minnesota. He is the author of the Manning Publications book Web Performance in Action, a companion guide for the performance-minded web developer. Read his meandering ramblings on the web at https://jeremywagner.me, or check him out on Twitter @malchata.";
		    break;

		case 'javier':
			$fullname = 'Javier Garza';
			$job      = 'Senior Enterprise Architect';
			$company  = 'Akamai';
			$twitter  = 'JJavierGarza';
			$talk_title = 'jjaviergarza';
			$talk_description = 'Javier has been focused on optimizing the Web for over a decade, working with the largest Companies who are changing the world to ensure the Web is fast and secure for everybody. On this inspiring talk Javier will explain how this quest for optimizing everything expanded from his work, to other areas of his life (like for example reducing a long commute in half), and what you can do with all that extra time.';
			$about    = "Multi-lingual technology evangelist that loves taking things apart, understanding how they work and finding the best/most practical way of improving them. Started hacking basic-based computer games at the age of 9. I have been working with computers the past 25 years in Spain, Germany and USA (half of those at Akamai helping the largest Websites on the Internet run faster and more secure).";
		    break;

		case 'simon':
			$fullname = 'Simon Hearne';
			$job      = 'Principle Software Engineer';
			$company  = 'Akamai';
			$twitter  = 'simonhearne';
			$talk_title = 'Third-party content: the weak link in the chain';
			$talk_description = "Third-party content is the thorn in the side of many a good website. From A/B testing that delays render to advertising networks that bleed user data, we depend on services over which we have no control.
In an ideal world we could attribute a user experience cost to each third-party provider, allowing marketing, eCommerce and business intelligence to make 
educated decisions about which providers should stay and which should go.</p>

<p>The Resource Timing API allows site owners to measure how third-parties perform for every single pageview. Combining this data with business intelligence provides new insight to the impact of third-party providers on business performance.</p>

<p>This talk explores some of the toughest questions in web performance, backed up with huge amounts of data:</p>
<ul>
<li>Will moving to a new advertising network increase ad revenue?</li>
<li>Is A/B testing losing more revenue that it gains?</li>
 <li>Does measuring web performance impact web performance?</li></ul>

<p>Data for this talk has been gathered from over 500,000 websites, with detailed investigation performed on millions of pageviews from a small number of sites.</p> 

<p>You will leave this talk armed with the tools and knowledge to measure the performance of third-party providers and provide compelling arguments for whether they should stay or go.";
			$about    = "Simon is an engineer who specializes in web performance visualizations.";
		    break;

		case 'dawn':
			$fullname = 'Dawn Parzych';
			$job      = 'Director of Product and Solution Marketing';
			$company  = 'Catchpoint';
			$twitter  = 'dparzych';
			$talk_title = 'The Power of Storytelling';
			$talk_description = "If you want people to pay attention, learn, or remember something important, tell them a story. Stories help us connect with others and are easy for our brain to remember. Stories are all around us in tech from the user stories we create when developing features to the marketing messages crafted. But did you know stories are also hidden inside of metrics? </p>

<p>Organizations today are measuring hundreds or even thousands of metrics to measure performance including front-end, back-end, and business metrics.  What story are these metrics telling us? In this session learn how to identify who your audience is and craft a story using metrics that will resonate with them. Understand which metrics matter and should be the star of your story and who the supporting characters are. ";
			$about    = '<a href="https://twitter.com/dparzych">Dawn Parzych</a> is a Director at Catchpoint. Prior to entering the tech field, Dawn obtained a masters degree in Psychology. She enjoys researching, writing and speaking about the intersection of technology and psychology with a focus on application performance, bias, and culture.  She has spent over 15 years working in the application performance space in a wide variety of roles at Instart Logic, F5 Networks and Gomez.
';
		    break;

		case 'gopal':
			$fullname = 'Gopal Brugalette';
			$job      = 'Principal Software Engineer';
			$company  = 'Concur';
			$twitter  = '';
			$talk_title = 'Understand your customers, think like e-commerce';
			$talk_description = "What is important for an e-commerce site? Everyone knows that performance matters. A 100ms slowdown can mean millions of dollars in lost revenue.  But user insights are also a critical aspect of managing an e-commerce site.  What are the users doing? How, when and why? How fast is fast enough?  How does site performance impact user behavior?  What really affects the customer experience? If you are not asking these questions for your site, you should be, just like an e-commerce site.  The answers provide the data your company needs to drive product development, a quality site and ultimately the business. Gopal Brugalette shares his experiences in analyzing e-commerce and non-ecommerce sites.  He describes the data science methodologies and tools, including open-source, he uses to answer these questions.  He discusses how to think about the customer funnel, define conversion rate equivalents, measure user behavior and determine how performance and other factors impact your customers.  This yields actionable data and he shares examples of insights gained from this approach.  Learn these techniques to analyze the users of your website and enhance your testing, develop better software and ultimately improve your customers' experience.";
			$about    = "Gopal is a Performance Architect/Principal Engineer. His experience spans e-Commerce, Financial and various Technology industries. He is currently developing a machine-learning based system for analyzing production and test data. His responsibilities have included preparing sites for peak events, user behavior insights, DevOps transformations, applying data science and machine learning to performance problems, developing engineering frameworks and expanding performance engineering activities into the development cycle and production. He has presented at numerous industry events and been featured in online magazines.  Previous to IT, he was a researcher at the Center for Experimental Nuclear Physics.  Outside of IT, he enjoys developing his permaculture farm and woodworking.";
		    break;
			
				case 'gopal2':
				case 'gopalB':
			$fullname = 'Gopal Brugalette';
			$job      = 'Principal Software Engineer';
			$company  = 'Concur';
			$twitter  = 'betaorbust';
			$talk_title = 'Building a Performance Engineering Culture';
			$talk_description = "Building a performance engineering culture can be challenging. Competing demands of feature delivery, security, emerging technologies and operations can push performance to the bottom of the priority list. How can you influence your organization?
You need effective methods for getting your message to engineers, product managers and the business. In this session, we share techniques that have proven effective. These include:</p>
<ul><li>Framing your Vision</li>
<li>Newsletters</li>
<li>Advertising</li>
<li>Office Hours</li>
<li>Embedding with a Team</li>
<li>Developing Relationships</li>
<li>Building Frameworks</li>
</ul>
<p>All of these methods can be implemented at a grass-roots level. After this session, you&rsquo;ll have concrete tools to drive the performance engineering culture you envision.";
			$about    = "Gopal is a Performance Architect/Principal Engineer. His experience spans e-Commerce, Financial and various Technology industries. He is currently developing a machine-learning based system for analyzing production and test data. His responsibilities have included preparing sites for peak events, user behavior insights, DevOps transformations, applying data science and machine learning to performance problems, developing engineering frameworks and expanding performance engineering activities into the development cycle and production. He has presented at numerous industry events and been featured in online magazines.  Previous to IT, he was a researcher at the Center for Experimental Nuclear Physics.  Outside of IT, he enjoys developing his permaculture farm and woodworking.";
		    break;

		case 'jacques':
			$fullname = 'Jacques Favreau';
			$job      = 'Senior UI Engineer';
			$company  = 'Netflix';
			$twitter  = 'betaorbust';
			$talk_title = 'Measure the Change You Want to See in the World';
			$talk_description = "A stairway at Netflix costs over $100,000 each year because it turns left instead of right. Lurking in Gulp build times we found an entire engineer. One sneaky getBoundingClientRect launched a million laptop fan hurricanes.</p>

<p>There&rsquo;s a hidden world around us, and our only hope of cracking it open is keeping a measurement-oriented mindset. Kick off your path to performance glory with a lightning talk on what we miss when we&rsquo;re not looking.";
			$about    = "Jacques Favreau is a senior UI engineer at Netflix. He&rsquo;s the tech lead for the Web Core team, which covers web performance, developer productivity, cross-team libraries, and best practices. Jacques is an ardent supporter of accessible websites and removing magic from code – something future-Jacques is always happy about.
When not watching or working on Netflix, he can usually be found at home in San Mateo with his wife and daughter, or out pursuing their passion for travel.";
		    break;

		case 'rachel':
			$fullname = 'Rachel Nabors';
			$job      = 'Program Manager';
			$company  = 'Microsoft';
			$twitter  = 'rachelnabors';
			$talk_title = 'Illusion of Life: Jank-free user interactions';
			$talk_description = 'Human perception is a fascinating thing. Most of what we think of as "reality" is actually a simulation provided by the inputs of our five senses. Humans, being highly visual primates, are especially sensitive to visual inputs. Most screen-based interfaces seek to recreate an illusion of reality via active and visual skeumorphism, gestures, and other techniques. But janky or otherwise unperformant animations and interactions can ruin this illusion of life, break the user experience.</p>

<p>In this talk, Rachel Nabors will introduce us to how the human visual system works and show us the latest and greatest ways to create light, performant animations and interactions that keep users in flow and delighted.';
			$about    = "Rachel Nabors (rachelnabors.com) began telling stories online as a teenager with her award-winning <a href='https://rachelthegreat.com'>web comics</a>. Her love of web technologies transformed into a career in front end development, where she has worked with Mozilla, the W3C, and Microsoft to build the web forward. She recently launched Animation at Work wrote an A Book Apart book of the same name: (bkaprt.com/animationatwork), a book on using animation in web design available from A Book Apart. </p>

<p>When she isn&rsquo;t traveling the world, giving talks and kissing puppies, she can be found perched in Seattle, sipping a cup of fancy tea!";
		    break;

		case 'jessica':
			$fullname = 'Jessica Chan';
			$job      = 'Software Engineer';
			$company  = 'Pinterest';
			$twitter  = 'missyjcat';
			$talk_title = 'Making Pinterest Fast';
			$talk_description = 'Pinterest.com serves millions of requests per day internationally across a myriad of network conditions and devices. This is the story of how the web performance team tackled the task of gathering data, applying a strategic roadmap across the organization, prevented performance regression slips as developers were shipping new features, and executed on the best opportunities to improve the Pinterest experience for our users and made performance a priority for the company.';
			$about    = "";
		    break;

		case 'jason':
			$fullname = 'Jason Lengstorf';
			$job      = '';
			$company  = 'IBM';
			$twitter  = 'jlengstorf';
			$talk_title = 'Progressive Web Apps: Show Up for Offline First, but Stay for the Killer Performance Boost';
			$talk_description = "There is a big push for Offline First development, with a new buzzword — \"Progressive Web App\", or PWA — making the rounds for the last year or two. But a lot of what&rsquo;s being said sounds like the coding equivalent of \"eat your vegetables!\".</p>

<p>What is in it for ME? Quite a bit, it turns out.</p>

<p>In this talk, Jason Lengstorf will share the surprising ways that online apps will see huge benefits when they&rsquo;re built to support offline users. Learn how to add blazing speed gains to existing sites with just a few simple changes — and how you can easily add Offline First support to your apps with just a few lines of code.</p>

<p>Learn how going Offline First will improve the connected experience, including:</p>

<ul>
<li>better performance</li>
<li>increased stability and reliability</li>
<li>improved user experience</li>
<li>and more!</li>
</ul>

<p>So in addition to eating your vegetables — you know, making your web apps usable for people with slow and unreliable connections and whatnot — you will ALSO see your apps perform even better for connected users. All with minimal effort required.";
			$about    = "Jason Lengstorf is a developer, designer, author, and friendly bear. He focuses on work-life balance, efficiency, processes, and productivity to help people get more done in less time — so they can spend more time on the things that matter most. He recently joined IBM Design as a senior front-end developer in Austin, TX, where he can often be spotted in the forest foraging for nuts and berries.";
		    break;

		case 'kim':
			$fullname = 'Kimberly Munoz';
			$job      = 'Web Developer';
			$company  = 'Slack';
			$twitter  = 'kimberlymunoz';
			$talk_title = 'Increasing Performance Developing Accessible Sites Through Semantic HTML';
			$talk_description = '&lt;section> and &lt;button> and &lt;div>, Oh my! HTML is extensible enough to create almost anything you need, but for developers making accessible websites (which should be all of us) semantic markup has a number of advantages and built-in features to make accessible sites more performant. Learn about them in this talk.';
			$about    = "Kimberly Muñoz is a front-end developer creating fast, accessible online experiences. She is currently on Slacks Customer Acquisition Team where she worked on the recent redesign of Slack.com. Previously she was recently a Technology and Innovation Fellow at the Consumer Financial Protection Bureau where she helped launch the redesign of Consumerfinance.gov, a new responsive website built on Django.";
		    break;

		case 'estelle':
			$fullname = 'Estelle Weyl';
			$job      = 'Open Web Evangelist';
			$company  = 'Standardista';
			$twitter  = 'estellevw';
			$talk_title = 'TBD';
			$talk_description = 'TBD';
			$about    = "";
		    break;

		case 'tim':
			$fullname = 'Tim Kadlec';
			$job      = 'Head of Developer Evanglism';
			$company  = 'Snyk';
			$twitter  = 'tkadlec';
			$talk_title = 'Workshop: Get Up to Speed';
			$talk_description = 'Websites may be slow, but the web itself moves fast. Every day new techniques and tools emerge, promising to make your site faster and lighter. New articles are written about the latest "best practices" in performance, only to have yet newer articles contradict them. When the technologies and techniques we use to make websites more performant change so quickly, it&rsquo;s easy to feel like you&rsquo;re falling behind.<br/><br/>

But if you pull back the layers and the hype, drilling into the core concepts of how the network and browsers we rely on actually work, it suddenly becomes much easier to recognize which best practices are actually appropriate for you, and what trade-offs you&rsquo;re making.
<br/><br/>
In this workshop, we&rsquo;ll go beyond the latest and greatest techniques and tools to understand what is going on at the core. We&rsquo;ll explore:<br/><br/>

&middot; How the browser renders pages, from the very first request on the network to the final pixel on your screen<br/>
&middot; What the critical rendering path is and how to optimize for it<br/>
&middot; How HTTP/2 differs from HTTP/1 and what that means for popular opimizations<br/>
&middot; How to identify common performance bottlenecks in your sites and applications<br/>
<br/>By the time we&rsquo;re done, you&rsquo;ll have a firm understanding of what makes sites fast, and how to separate the hype from reality.';
			$about    = "Tim is head of developer relations at Snyk—a company focused on making open source code more secure. He is the author of Implementing Responsive Design: Building sites for an anywhere, everywhere web, and was a contributing author for Smashing Book #4: New Perspectives on Web Design, and the Web Performance Daybook Volume 2. Along with Katie Kovalcin, he also co-hosts The Path to Performance Podcast.";
		    break;




		case 'sarah':
			$fullname = 'Sarah Dapul-Weberman';
			$job      = 'Software Engineer';
			$company  = 'Pinterest';
			$twitter  = 'sarahddubs';
			$talk_title = 'Making Pinterest Fast';
			$talk_description = 'Pinterest.com serves millions of requests per day internationally across a myriad of network conditions and devices. This is the story of how the web performance team tackled the task of gathering data, applying a strategic roadmap across the organization, prevented performance regression slips as developers were shipping new features, and executed on the best opportunities to improve the Pinterest experience for our users and made performance a priority for the company.';
			$about    = "Sarah Dapul-Weberman is a software engineer on the Pinterest Core Experience Web team. She focuses specifically on server-side web technologies. She is passionate about attempting to automate away more and more parts of her job.";
		    break;


		case 'michelle':
			$fullname = 'Michelle Vu';
			$job      = 'Software Engineer';
			$company  = 'Pinterest';
			$twitter  = 'micvu';
			$talk_title = 'Making Pinterest Fast';
			$talk_description = 'Pinterest.com serves millions of requests per day internationally across a myriad of network conditions and devices. This is the story of how the web performance team tackled the task of gathering data, applying a strategic roadmap across the organization, prevented performance regression slips as developers were shipping new features, and executed on the best opportunities to improve the Pinterest experience for our users and made performance a priority for the company.';
			$about    = "";
		    break;


		case 'pinterest':
			$fullname = 'Jessica Chan, Michelle Vu, and Sarah Dapul-Weberman';
			$job      = 'Software Engineers';
			$company  = 'Pinterest';
			$twitter  = 'missyjcat';
			$talk_title = 'Making Pinterest Fast';
			$talk_description = 'Pinterest.com serves millions of requests per day internationally across a myriad of network conditions and devices. This is the story of how the web performance team tackled the task of gathering data, applying a strategic roadmap across the organization, prevented performance regression slips as developers were shipping new features, and executed on the best opportunities to improve the Pinterest experience for our users and made performance a priority for the company.';
			$about    = "";
		    break;
		case '':
			$fullname = '';
			$job      = '';
			$company  = '';
			$twitter  = '';
			$talk_title = '';
			$talk_description = '';
			$about    = "";
		    break;
	}
	
	$speaker = (object)[
    	'fullname' => $fullname,
    	'job' => $job,
    	'company' => $company,
    	'twitter' => $twitter,
    	'talk_title' => $talk_title,
    	'talk_description' => $talk_description,
    	'about' => $about
  	];
	
	return $speaker;

}
}

?>