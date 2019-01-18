<?php
$name = $_GET["name"];

if ($name) {
	$results = getInformation($name);
	$fullname = $results->fullname;
	$jpg      = $results->jpg;
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
	$jpg = '';
	switch ($name) {

			case 'sarah':
				$fullname = 'Sarah Drasner';
				$job      = 'Senior Developer 🥑';
				$company  = 'Microsoft';
				$twitter  = 'sarah_edo';
				$talk_title = 'Sarah will be presenting a brilliant talk about SVG.';
				$talk_description = 'TBD';
				$about = "Sarah Drasner is an award-winning Speaker, Vue core team member, Senior Developer 🥑 at Microsoft, and Staff Writer at CSS-Tricks. Sarah is also the co-founder of Web Animation Workshops, with Val Head. She’s the author of SVG Animations from O’Reilly and has given Frontend Masters workshops on Vue.js and Advanced SVG Animations. Sarah is formerly Manager of UX Design & Engineering at Trulia (Zillow).";
				$jpg = 'jpg';
			    break;

			case 'addy':
				$fullname = 'Addy Osmani';
				$job      = 'Engineering Manager';
				$company  = 'Google';
				$twitter  = 'addyosmani';
				$talk_title = 'The Cost Of JavaScript';
				$talk_description = "As the world build sites that are more heavily reliant on JavaScript, we sometimes pay for what we send down in ways that we can’t always easily see.</p></p>Addy Osmani explains how and why JavaScript is the most expensive resource your site uses today—especially on mobile. Addy also shares tips for fixing JavaScript performance issues so everything loads quicker. A little discipline can help if you want your site to load and be interactive as soon as possible on mobile.";
				$about    = "Addy leads a Speed team on Google Chrome trying to make the web fast.";
				$jpg = 'jpg';
			    break;
			
			case 'shubhie':
				$fullname = 'Shubhie Panicker';
				$job      = 'Staff Software Engineer';
				$company  = 'Google Chrome';
				$twitter  = 'shubhie';
				$talk_title = 'Runtime Scheduling on the Web';
				$talk_description = 'For consistent runtime performance -- UI should meet the needs of being responsive to user interactions (clicks, taps, scrolls, etc), rendering smooth animations, and fetching and rendering content in time. It is too difficult for web devs to reason about rendering pipeline and how to use combination of microtasks, rAF, settimeout, postmessage etc to achieve this. This talk covers our journey in developing a native scheduling API that can schedule browser tasks, framework code, application code, and third party code.';
				$about    = 'Shubhie drives web performance efforts as an engineer on the Chrome Web Platform team at Google. She develops web performance oriented standardized platform APIs. Prior to Chrome, she worked on server infrastructure and web frameworks for products like Google Search, Google Photos, etc. Outside of Google, Shubhie is an avid Bay Area photographer and a staunch foodie.';
				$jpg = 'jpg';
			    break;

			 case 'tim':
				$fullname = 'Tim Kadlec';
				$job      = 'Performance Consultant';
				$company  = 'Tim Kadlec Consulting LLC';
				$twitter  = 'tkadlec';
				$talk_title = 'leading a pre-conference workshop "Getting Up to Speed with Performance"';
				$talk_description =  '';
				$about = "Tim is a performance consultant and trainer focused on building a web everyone can use. He is the author of High Performance Images (O'Reilly, 2016) and Implementing Responsive Design: Building sites for an anywhere, everywhere web (New Riders, 2012), and was a contributing author for Smashing Book #4: New Perspectives on Web Design (Smashing Magazine, 2013), and the Web Performance Daybook Volume 2 (O'Reilly, 2012). He writes about all things web at timkadlec.com. You can find him sharing his thoughts in a briefer format on Twitter at @tkadlec.";
				$jpg = 'jpg';
			    break;

			case 'ewa':
				$fullname = 'Ewa Gasperowicz';
				$job      = 'Developer Programs Engineer';
				$company  = 'Google';
				$twitter  = 'devnook';
				$talk_title = 'Keep your website fast for the times to come';
				$talk_description =  "Top-notch speed performance in a big web project is as elusive as a tidy kid’s room - even if you manage to get there, it vanishes in the first 5 minutes of your distraction. New features, additional code, even new team members - all this can quickly make the site’s performance suboptimal again. Fortunately, there are some tricks that can prevent you from slipping on your performance targets. Tools like performance budgets, early regression indicators and monitoring tools and APIs can help you and your team to stay on track and deliver always best experience to your users.";
				$jpg = 'jpg';
				$about = "Ewa is a developer platform engineer at Google Web team. A front-end engineer, focused mainly on making the Web faster and more user friendly. Interested in Progressive Web Apps development and analysis, EWA is always keen to investigate common scenarios and emerging app design patterns.";
			    break;


			case 'anthonia':
				$fullname = 'Anthonia Carter';
				$job      = 'Fulbright Scholar';
				$company  = 'US-UK Fulbright Commission';
				$twitter  = 'AnthoniaCarter';
				$talk_title = 'Leveraging the power of service design to boost web performance';
				$talk_description =  "Designers know that performance is key to user experience. Do we limit ourselves to only individual user interactions? Service design is all about looking at the \"big picture,\" designing experiences that reach people across many touch points (interactions between users and a brand, product, or service) over time. Not every design decision will favor performance, and it is essential for designers and developers to understand how cumulative experiences impact conversion and retention rates. This talk will discuss how to use service design to model end to end user journeys and to uncover gaps in overall web performance.";
				$jpg = 'svg';
				$about = "Anthonia Carter is a multidisciplinary innovator, visual narrator, and a US Fulbright Scholar. With a background in mathematics, fine art, and design, her work occupies the critical space where art, science, and technology intersect. She uses a design-led approach to help enterprises realize innovation opportunities.";
			    break;

			case 'pat':
				$fullname = 'Patrick Meenan';
				$job      = 'Software Engineer';
				$company  = 'Cloudflare';
				$twitter  = 'patmeenan';
				$talk_title = 'Resource loading, prioritization, HTTP/2 - oh my!';
				$talk_description =  "How your website content is delivered can often be the most important aspect of a high-performance website. We will take a quick tour through how browsers schedule resources based on your content and then take a deep dive into how HTTP/2 changes things. We will go through the full stack from the front-end structure down into the network protocols and deployment architectures and expose the landmines, current state of the world and best-practices to ensure the best experience possible for your visitors.";
				$about = "Patrick Meenan has been working on web performance in one form or another for the last 20 years and is currently working at Cloudflare to make the web faster. </p><p>
Prior to that he worked at Google to make Chrome and the web faster. Patrick created the popular open source WebPagetest web performance measurement tool, runs the free instance of it at www.webpagetest.org, and can frequently be found in the forums helping site owners understand and improve their website performance.";
				$jpg = 'svg';
			    break;

			case 'tatiana':
				$fullname = 'Tatiana Mac';
				$job      = 'Community Engineer';
				$company  = 'Interactive Art Director';
				$twitter  = 'tatianatmac';
				$talk_title = 'How Privilege Defines Performance';
				$talk_description =  "In theory, performance, accessibility, and inclusive design all have similar goals: Provide the best, most consistent experience to all people using the minimal amount of resources.</p><p>In practice, this often falls apart.</p><p>Product creators define what it means to be performant from where they stand, which is typically from places of privilege with unseen biases, struggling to find true empathy with their users. </p><p>Through this talk, we'll examine how to build conscientiously, looking within to resist systematic problems in order to create more truly performant, accessible, and inclusive systems for our users.";
				$about = "Tatiana Mac is an independent interactive art director and designer currently based out of Portland, Oregon.Tatiana is passionate about representing our diverse communities through design, which means building design systems with performance, inclusivity, and accessibility in mind throughout the entire process. She believes that design plays a critical role in changing our social landscape—to dismantle exclusionary systems in favor of community-focused, inclusionary ones.</p><p>When she's not designing, she's editing for A List Apart, moonlighting as a wardrobe stylist, adding countries to her travelled-to list, learning languages, and cheering on her favourite sports teams.";
				$jpg = 'svg';
			    break;

			case 'buddy':
				$fullname = 'Buddy Brewer';
				$job      = 'Performance Consultant';
				$company  = '';
				$twitter  = 'bbrewer';
				$talk_title = 'Taking the Guesswork out of Performance Budgets';
				$talk_description =  "Most people know how fast their sites are today thanks to the thriving ecosystem of free and commercial tools for monitoring site performance. But when it comes to how fast their sites should be, most site owners are still flying blind. As a result they guess at what their performance budgets should be - or worse - don’t bother setting performance budgets at all.<p></p>In this talk we will lay out a specific and repeatable process for solving this problem by working through the following key questions, using a little bit of machine learning and statistical analysis via freely available tools and OSS libraries:</p><ol><li>My monitoring tools give me so many different metrics that I don’t know where to begin optimizing. So which performance metric is my site’s “hero metric”? How do I find the metric that most accurately predicts whether my visitors will do what I want them to do?<li><li>What should the value of that metric be, and what would achieving that value do for my business? How do I pick a precise and defensible value to organize my team and my team’s goals around?</li><li>Even if I knew my site’s hero metric and what the value should be, I have more performance issues on my backlog than I have bandwidth to solve. How do I narrow and prioritize my focus to manageable clusters of visitors and issues to act on?</li><p>Answering these key questions will help you squeeze more value out of the tools and techniques you already have, so that you can achieve better outcomes for your users (and subsequently your business) in less time.";
				$about = "Buddy helps companies find and fix performance problems that make customers unhappy and get in the way of revenue. A software engineer, product manager, and RUM entrepreneur at various points in his career, he has been building tools to help people make their sites faster for almost 20 years.";
				$jpg = 'svg';
			    break;

			case 'robert':
				$fullname = 'Robert Aboukhalil';
				$job      = 'Bioinformatics Software Engineer';
				$company  = 'Invitae';
				$twitter  = 'RobAboukhalil';
				$talk_title = 'Level up your web tools with WebAssembly';
				$talk_description =  "This talk is a deep dive into WebAssembly and how it can help you level up your web applications.<p><p>We'll start the talk by introducing WebAssembly, how it works, and how to get started using it. Next, to concretely demonstrate how WebAssembly can be used to speed up web tools, we'll consider the application fastq.bio, an interactive front-end-only web tool we previously developed in JavaScript to help biologists QC their DNA sequencing data. By compiling an existing QC tool from C to WebAssembly and optimizing the original C code, we obtain >10X speedup compared to our original JavaScript implementation!<p><p>We'll also cover how we can leverage WebWorkers alongside WebAssembly to maintain the UI's responsiveness, and how this enables us to more easily mount File and Blob objects onto a virtual file system.<p><p>Finally, we'll conclude by discussing rules of thumb on when to use WebAssembly, and when to avoid it.";
				$about = 'Robert is a Bioinformatics Software Engineer, which means that he spends his time engineering software for bioinformatics purposes. Specifically, he develops cloud applications to enable the interactive analysis and exploration of genomics data. Robert has a Ph.D. in Bioinformatics from CSHL and a Bachelor in Computer Engineering from McGill.';
				$jpg = 'svg';
			    break;

			case 'erica':
				$fullname = 'Erica Stanley';
				$job      = 'Engineering Manager';
				$company  = 'SalesLoft';
				$twitter  = 'ericastanley';
				$talk_title = 'Refactoring for Progressive Web Apps';
				$talk_description =  "This session outlines best practices in architecture and design patterns for progressive web apps (PWAs). Along the way, we'll detail common ways to refactor existing web apps to take advantage of these best practices and share lessons learned from the PWA migration of SalesLoft’s core application. We'll:</p><ul><li>Explore progressive web apps (PWAs) and why are they useful</li><li>Learn best practices and modern technologies to prepare for PWAs</li><li>Learn about design patterns for more performant PWAs</li><li>Explore refactoring examples that incorporate these design patterns and lessons learned from building a PWA</li></ul>";
				$about = 'Erica Stanley is an engineer, entrepreneur and diversity & inclusion advocate. She is an engineering manager for the integrations and analytics teams at SalesLoft – where she’s helping grow the product engineering team for the 4th fastest growing software company in North America. She’s worked with Fortune 500 companies, as well as successful startups.</p><p>Erica is active in the Atlanta technology community. She founded the Atlanta network of Women Who Code, where she organizes conferences, hackathons, workshops and networking events for women technologists. She also helps develop and teach youth coding programs and mentors entrepreneurs for local incubators and accelerators.';
				$jpg = 'svg';
			    break;

			case 'ryan':
				$fullname = 'Ryan Townsend';
				$job      = 'CTO';
				$company  = 'SHIFT Commerce';
				$twitter  = 'ryantownsend';
				$talk_title = 'Chaperones and curfews: minimising 3rd party impact';
				$talk_description =  "Every year websites get heavier – but the majority of growth isn’t coming from code written at the organisations running them... it’s coming from 3rd parties. </p><p>Long gone are the days when it was viable to build everything internally, but their impact on performance is already getting a little out-of-hand. We don’t want to be the fun police throwing everyone out, but we can start to moderate the party.</p><p>In this talk we won’t be looking to remove 3rd parties altogether – nobody likes having their toys taken away; instead we’ll be taking the practical approach of accepting that 3rd parties aren’t going anywhere and look at what strategies we can employ for maintaining performance and safeguarding against slowdowns, outages and abuse.";
				$about = 'With over 15 years experience developing for the web, and an undying passion for web performance, Ryan Townsend is the CTO of SHIFT Commerce – a SaaS e-commerce platform bringing agility to ambitious retailers.</p><p>His pragmatic and performance-led outlook means that—on the rare occasion that he does wear a shirt—his sleeves stay firmly rolled up: even as an exec, his favourite place is right there in the thick of things with his team.</p><p>Outside of the office, you’ll usually find him picking up heavy objects in the gym or falling off his mountain bike down the side of a hill.';
				$jpg = 'svg';
			    break;

			case 'eric':
				$fullname = 'Eric Bailey';
				$job      = 'Designer';
				$company  = 'thoughtbot';
				$twitter  = 'ericwbailey';
				$talk_title = 'The intersection of accessibility and performance';
				$talk_description =  "Accessibility is a holistic practice, essential to some but useful to all. It is a practice that touches on many aspects of good web design and development, especially performance. This talk will highlight opportunities and techniques to improve your website or web app's performance by embracing an accessible, inclusive mindset.";
				$about = 'Eric Bailey is an Inclusive Design advocate, A11Y Project maintainer, MDN Web Docs contributor, and recovering curmudgeon.';
				$jpg = 'svg';
			    break;

			case 'greg':
				$fullname = 'Greg Tatum';
				$job      = 'Browser Engineer';
				$company  = 'Mozilla';
				$twitter  = 'TatumCreative';
				$talk_title = 'Profiling the Profiler';
				$talk_description =  'Writing DevTools is an inherently recursive problem: the tools you build are required to debug the tools you are building. This talk explores this circular relationship of building a web-based profiler for Firefox, that itself is used to profile Firefox. It dives into many of the practical aspects of making a fast product, and the types of analysis that is used. It also explores the importance of having fast tools and happy users. Responsive and ergonomic tools mean that its easier for engineers to fix performance problems, which in turn means that the web is faster for all of the end-users of Firefox.</p><p>Learn some of the engineering story behind Firefox Quantum, and the profiler that was used by many of the Firefox engineers to analyze and validate many of the new browser technologies that have gone into re-inventing the internals of Firefox.';
				$about = 'With a background in art, but a job title that has the word "engineer" in it, Greg Tatum enjoys spending time in the odd space between the technical and creative. For Mozilla, Greg Tatum works on building tools to help make Firefox faster. This work varies from instrumenting the platform internals, to taking data sources and turning them into actionable visualizations.';
				$jpg = 'svg';
			    break;

			case 'rick':
				$fullname = 'Rick Viscomi';
				$job      = 'Senior Developer Programs Engineer';
				$company  = 'Google';
				$twitter  = 'rick_viscomi';
				$talk_title = 'Crash Course in CrUX';
				$talk_description =  'This talk is a lightning demo of the Chrome UX Report. Learn how to quickly and easily extract insights from it to understand the web performance of real user experiences from millions of websites.';
				$about = 'Rick Viscomi is a Senior Developer Programs Engineer at Google working on web transparency projects that track the state of the web including the Chrome UX Report and HTTP Archive. He is also the coauthor of the web performance book "Using WebPageTest" and once pair programmed with Snoop Dogg.';
				$jpg = 'svg';
			    break;

			case 'katie':
				$fullname = 'Katie Sylor-Miller';
				$job      = 'Staff Software Engineer';
				$company  = 'Etsy';
				$twitter  = 'ksylor';
				$talk_title = 'Happy Browser, Happy User!';
				$talk_description =  'Performance is fundamentally, a UX concern. Sites that are slow to render or janky to interact with are a bad user experience. We strive to write performant code for our users, but users don’t directly interact with our code - it all happens through the medium of the browser. The browser is the middleman between us and our users; therefore to make our users happy, we first have to make the browser happy. But how exactly do we do that?</p><p> In this talk, we’ll learn how browsers work under the hood: how they request, construct, and render a website. At each step along the way, we’ll cover what we can do as developers to make the browser’s job easier, and why those best practices work. You’ll leave with a solid understanding of how to write code that works *with* the browser, not against it, and ultimately improves your users’ experience.';
				$about = 'Katie is a Staff Software Engineer on the Frontend Systems team at Etsy, where she advocates for and implements frontend best practices in collaboration with product engineers and designers. She is passionate about frontend architecture, design systems, accessibility, frontend performance, and teaching others. Katie co-authored the Design Systems Handbook, but her proudest accomplishment is creating ohshitgit.com to share her hard-won knowledge of how to get out of your git messes with a bit of humor (and a lot of swears).';
				$jpg = 'svg';
			    break;

			case 'lauren':
				$fullname = 'Lauren Younger Nagel';
				$job      = 'Product Line Lead, DPM';
				$company  = 'Akamai';
				$twitter  = 'llyounger';
				$talk_title = 'The Business of Performance';
				$talk_description =  'Panel Moderator';
				$about = 'Lauren has been interested in computers and software ever since her first TI-99 when she was four years old. Her career started as a software design engineer in Test, until she realized that the best way to prevent bugs was to not design them in – and thus made the leap to product management. Today, Lauren is responsible for Digital Performance Management at Akamai, which brings together her love of testing and analytics, as well as her keen interest in everything that makes the internet run fast. She also just had her first baby, whom she considers her best product ever! ';
				$jpg = 'svg';
			    break;

			case 'heather':
				$fullname = 'Heather McGaw';
				$job      = 'Staff User Researcher';
				$company  = 'Mozilla';
				$twitter  = 'heathermcgaw';
				$talk_title = 'Measuring User Perceived Performance to Prioritize Product Work';
				$talk_description =  "Performance is a primary metric deployed in software benchmarks, yet user perceived performance is equally important for assessing a user's experience as they pursue their goals with software. We will share our experience using perceived performance user research to help prioritize product work for the Firefox desktop and mobile browsers. We will discuss how we design perceived performance studies, how we have used perceived performance studies to benchmark the user experience over time, and how these insights have helped us identify and prioritize the greatest areas of improvement for our products.";
				$about = 'Heather McGaw is a Toronto-based user researcher and educator driven by the desire to make technology more helpful and accessible across a wide range of human experiences. She currently works at Mozilla as a Staff User Researcher and teaches UX Research at Humber College.';
				$jpg = 'svg';
			    break;

			case 'gemma':
				$fullname = 'Gemma Petrie';
				$job      = 'Mozilla';
				$company  = 'Senior Staff User Researcher';
				$twitter  = 'gemmapetrie';
				$talk_title = 'Measuring User Perceived Performance to Prioritize Product Work';
				$talk_description =  "Performance is a primary metric deployed in software benchmarks, yet user perceived performance is equally important for assessing a user's experience as they pursue their goals with software. We will share our experience using perceived performance user research to help prioritize product work for the Firefox desktop and mobile browsers. We will discuss how we design perceived performance studies, how we have used perceived performance studies to benchmark the user experience over time, and how these insights have helped us identify and prioritize the greatest areas of improvement for our products.";
				$about = 'Gemma Petrie is a multi-method user researcher focused on informing the development of global products and services through understanding the complexity of context, culture, and relationships in markets around the world. Gemma lives in Seattle, has a background in nonprofit development, and an MLIS from the University of Illinois. She currently works as a Senior Staff User Researcher and Manager for Mozilla Firefox.';
				$jpg = 'svg';
			    break;

			case 'mandy':
				$fullname = 'Mandy Michael';
				$job      = 'Front End Developer Manager';
				$company  = 'Seven West Media';
				$twitter  = 'mandy_kerr';
				$talk_title = 'Performance Benefits of Variable Fonts';
				$talk_description =  'Variable fonts are a game changer for how we use typography on the web. With improvements to performance and responsive typography, variable fonts deliver practical improvements for designers and developers alike. </p><p>We’ll explore what variable fonts are, how to use on your website as well as the benefits to actual and perceived performance on the web including from file improvements, compression, display options and rendering.</p><p>With an increase in support and creation of variable fonts in the past year, now is the time to start understanding, exploring and experimenting the exciting future ahead for typography on the web.';
				$about = 'Mandy is a community organiser, speaker, and developer working as a Development Manager at Seven West Media in Western Australia. She is a co-organiser and Director of <a href="http://mixinconf.com/">Mixin Conf</a>, and the founder and co-organiser of <a href="http://www.fenders.co">Fenders</a>, a local Meetup for front end developers providing events, mentoring and support to the Perth web community. In 2018 she was named one of the Top 20 women in Tech in Western Australia.</p><p>Mandy’s passion is CSS, HTML and JS, she has a particular interest in web typography, accessibility and modern layouts, and hopes to inspire that passion in others. Mandy loves the supportive and collaborative nature of the web, her aim is to create a community of web developers who can share, mentor, learn and grow together.';
				$jpg = 'svg';
			    break;

			case 'keerthana':
				$fullname = 'Keerthana Krishnan';
				$job      = 'Software Engineer';
				$company  = 'Baker Hughes, A GE Company';
				$twitter  = 'geekypurpleunicorn';
				$talk_title = 'A Billion Phones and Even More People';
				$talk_description =  'The growth of internet usage in developing countries has been very uneven, with adoption focussing mainly in urban centres. But this is a trend that is rapidly changing in areas like South Asia and Africa. As Billions of users get added to this ecosystem by 2020, many of them using technology for the first time, it brings with it a ton of new challenges. This talk focuses on exploring how we can give the best performance for users from these areas by considering their usage patterns and behaviours, with a special focus on mobile performance.';
				$about = "Keerthana is a software engineer who's passionate about building the best websites she can for everyone. She has previous experience with speaking including Node + JS Interactive 2018. She lives in the sunny town of Cochin, India and works as a full stack web developer to pay the bills";
				$jpg = 'svg';
			    break;

			case 'alfredo':
				$fullname = 'Alfredo Lopez';
				$job      = 'Director of Engineering';
				$company  = 'Hearst';
				$twitter  = 'lfredolo';
				$talk_title = 'Think Fast, First: Empowering Performance Culture';
				$talk_description =  'Attending a conference can be exciting but also overwhelming. This is the story of attending PerfMatters a year ago, and the learnings of establishing a performance culture by empowering non-technical team members to understand, own, and plan their performance impact through a path that aspires to be seamlessly integrated into the development lifecycle.';
				$about = 'Alfredo is a Director of Engineering at Hearst working with technical and non-technical teams to develop tools and promote guidelines that abstract best practices and performance enhancements into measurable business goals.His current interests include creating highly performant and flexible web applications that enable developers to be productive.  Prior to Hearst, Alfredo worked for an ad platform writing low-level Javascript that catered to strict browser support requirements.  Outside of the web, Alfredo is a musician, film enthusiast, and comedy fan.';
				$jpg = 'svg';
			    break;

			case 'mina':
				$fullname = 'Mina Markham';
				$job      = 'Senior Engineer';
				$company  = 'Slack';
				$twitter  = 'MinaMarkham';
				$talk_title = 'Our Fabulous eMCee';
				$talk_description = 'Will be introducing all our fabulous speakers and guiding us through this journey we call #PerfMatters.';
				$about    = "Mina Markham is a Senior Engineer at Slack. She's a lover of design systems and prolific public speaker, appearing at events worldwide, including CSS Dev Conf, Fluent, and Future of Web Design. Mina also co-organizes Front Porch Conference.</p><p>Previously at Hillary for America, her work on the Pantsuit pattern library has been spotlighted in WIRED, Fast Company, and Communication Arts. Mina likes ampersands, Oreos, traveling, cupcakes, and the color pink. She lives in Oakland, California.";
				$jpg = 'svg';
		    break;

			case 'estelle':
				$fullname = 'Estelle Weyl';
				$job      = 'Contractor, MDN Web Docs';
				$company  = 'Standardista';
				$twitter  = 'estellevw';
				$talk_title = 'co-emCee';
				$talk_description =  'If you want a pre-cursor to this fabulous conference intro, please read the conference <a href="../code/">code of content</a>. ';
				$about = 'Estelle started her professional life in architecture and then managed teen health programs. In 2000, Estelle took the natural step of becoming a web standardista. She currently writes for  <a href="https://developer.mozilla.org">MDN Developer Network</a> and organizes <a href="https://perfmattersconf.com">#PerfMatters Conference</a>. She has consulted for Kodak Gallery, SurveyMonkey, Samsung, Yahoo, Visa, and Apple, among others. Estelle shares esoteric tidbits learned while programming  in her <a href="http://standardista.com">blog</a>. She is the author of Mobile HTML5 and co-authored CSS: The Definitive Guide, and HTML5 and CSS3 for the Real World. While not coding, Estelle works in construction, de-hippifying her 1960s throwback abode.</div>';
				$jpg = 'svg';
			    break;

			case 'nathan':
				$fullname = 'Nathan Bower';
				$job      = 'Sr. Product Manager, Performance';
				$company  = 'Zillow Group';
				$twitter  = 'nwbower';
				$talk_title = 'Delighted, Satisfied, or Angry? : Building empathy into our core business metrics to put users first.';
				$talk_description =  'All too often developers ask the question, “Is my service or feature healthy?” When more importantly we should be asking the question, “Are my users happy?” Zillow developed a new convention shifting our culture so we can better relate empathy for our users.</p><p>This new strategy integrates performance directly in our business metrics and drives priority to what matter most, our users. Come learn why we’ve made this shift, and how we’re measuring. Learn how we have enabled our developers and product managers to be accountable for performance and transparent with prioritization of performance against new and existing feature development. Nathan will share challenges observed and overcome as they’ve evolved too. Performance no longer takes a back seat during development. Call shotgun. You’re in for a ride.';
				$about = 'Nathan is a Senior Product Manager in Performance at Zillow Group. Nathan\'s mission is collaborating closely with product teams on all things performance. Nathan formerly lead a performance team at MSN.com and has spoken at  VelocityConf and Twitter\'s "Hello World!" conference.';
				$jpg = 'svg';
			    break;

			case 'x':
				$fullname = '';
				$job      = '';
				$company  = '';
				$twitter  = '';
				$talk_title = '';
				$talk_description =  '';
				$about = '';
				$jpg = 'svg';
			    break;

			case 'x':
				$fullname = '';
				$job      = '';
				$company  = '';
				$twitter  = '';
				$talk_title = '';
				$talk_description =  '';
				$about = '';
				$jpg = 'svg';
			    break;
	}
	
	$speaker = (object)[
    	'fullname' => $fullname,
    	'job' => $job,
    	'company' => $company,
    	'twitter' => $twitter,
    	'talk_title' => $talk_title,
    	'talk_description' => $talk_description,
    	'jpg' => $jpg,
    	'about' => $about
  	];
	
	return $speaker;

}
}

?>