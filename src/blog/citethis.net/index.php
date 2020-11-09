<?php
	$articleTitle = "CiteThis.net";
	$articleDescription = "Making a citation generator.";
	$articleUrl = "citethis.net";
	$imageUrl = "citethis.png";
	$datePublished = "2019-04-14";
	include '../blogfiles/header.php';
?>
<article id="article">
	<header class="article-heading">
		<h1 class="article-title">
			<?php echo $articleTitle ?>
		</h1>
		<p class="article-info">
			By Kristian Windsor on April 14, 2019
		</p>
	</header>
	<section class="article-body">
		<div class="paragraph">
			<img src="<?php echo $imageUrl ?>" class="image" alt="CiteThis" />
			<p>
				You can view this finished project live at <a href="https://citethis.net/" target="_blank">citethis.net</a>.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Cite what?
			</h2>
			<p>
				This is a citation generator designed to help students with their papers.
			</p>
			<p>
				Starting in middle school and throughout high school and college, students write papers that require a list of sources. These sources must be cited in proper MLA/APA/Chicago syntax in order to get full credit for the assignment.
			</p>
			<p>
				Many students, myself included, relied on online citation generators to get the finicky syntax correct. 
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Chegg's monopoly
			</h2>
			<p>
				The most popular citation generators are all owned by Chegg: <a href="http://www.easybib.com/" target="_blank">easybib.com</a>, <a href="http://www.citationmachine.net/" target="_blank">citationmachine.net</a>, <a href="http://www.citethisforme.com/" target="_blank">citethisforme.com</a>, and <a href="http://www.bibme.org/" target="_blank">bibme.org</a>. 
			</p>
			<p>
				And Chegg’s websites suck. They suck ass. Don't believe me? Look at <a href="https://www.reddit.com/r/assholedesign/search?q=chegg&restrict_sr=on&sort=relevance&t=all" target="_blank">these posts on Reddit's /r/assholedesign</a>.
			</p>
			<p>
				Below is a screenshot of a google search for "mla citation generator". As you can see, all but one of the results is owned by Chegg. And how often do you ever click on the very last result of a google search?
			</p>
			<img src="google-chegg.png" alt="Chegg's EasyBib, CitationMachine, CiteFast on Google" >
		</div>
		<div class="paragraph">
			<h2>
				Creating my own citation generator
			</h2>
			<p>
				The citation generators on the first few pages of Google are all incredibly difficult to use.
			</p>
			<ul>
				<li>
					It takes 5+ minutes just to get a few citations
				</li>
				<li>
					Every page is cluttered with ads
				</li>
				<li>
					There are restrictions on how many citations can be generated
				</li>
				<li>
					They ask/force you to create an account
				</li>
				<li>
					They ask you to upgrade for an outrageous $10/month
				</li>
			</ul>
			<p>
				And this is where I got my design requirements, prioritizing speed and usability.
			</p>
			<ul>
				<li>
					Be able to cite many websites within seconds
				</li>
				<li>
					No ads
				</li>
				<li>
					No restrictions
				</li>
				<li>
					No user signup
				</li>
				<li>
					Totally free
				</li>
			</ul>
			<p>
				And so, citethis.net was born.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				It's really, really fast
			</h2>
			<p>
				Citethis.net is the fastest citation generator on the entire Internet. Hands down.
			</p>
			<p>
				From the moment that a URL is entered into the input field until the moment that the browser has the citation – with the author, date published and everything – is about 400 milliseconds. For previously crawled URLs, it's about 200 milliseconds (because it's cached into the database).
			</p>
			<p>
				And this all happens when the user pastes a URL – not when the user clicks the cite button. By the time the user actually clicks the button, the citation is already in the browser, ready to be displayed.
			</p>
			<img src="inspect-network.gif" alt="CiteThis.net Chrome inspect network" />
		</div>
		<div class="paragraph">
			<h2>
				User testing: time spent
			</h2>
			<p>
				When users go to these sites, they have one thing on their mind: "I need a citation".
			</p>
			<p>
				How long does that actually take? 
			</p>
			<p>
				To collect data on this, I conducted a test in which 3 users were instructed to cite a webpage in MLA and APA format using different citation generators.
			</p>
			<p>
				You can see the full user test here: <a href="https://youtu.be/ZDnJCwV8vQQ" target="_blank">https://youtu.be/ZDnJCwV8vQQ</a>
			</p>
			<table>
				<tbody>
					<tr>
						<td>Website</td>
						<td>Quickest time</td>
						<td>Longest time</td>
						<td>Average time</td>
					</tr>
					<tr>
						<td>citationmachine.net</td>
						<td>53 sec.</td>
						<td>3 min. 33 sec.</td>
						<td>1 min. 50 sec.</td>
					</tr>
					<tr>
						<td>citationproducer.com</td>
						<td>22 sec.</td>
						<td>40 sec.</td>
						<td>32 sec.</td>
					</tr>
					<tr>
						<td>citefast.com</td>
						<td>31 sec.</td>
						<td>1 min. 45 sec.</td>
						<td>54 sec.</td>
					</tr>
					<tr>
						<td>citethis.net</td>
						<td>6 sec.</td>
						<td>32 sec.</td>
						<td>18 sec.</td>
					</tr>
				</tbody>
			</table>
			<p>
				Below is a graph showing average user times to generate a citation.
			</p>
			<img src="time-spent-graph.png" alt="citationmachine.net, citationproducer.com, citefast.com, citethis.net User Experience" />
		</div>
		<div class="paragraph">
			<h2>
				Data transferred for each citation
			</h2>
			<p>
				I grew up on a farm with a terrible internet connection (you'd be lucky to ever stream YouTube in 480p), so I'm very conscientious when it comes to loading page content. I know in today's age, everyone has a 6 MB parallax ultra HD fancy-framework website, but I like to keep it simple. (Guess how large this blog post is!)
			</p>
			<p>
				I recorded the amount of data that's transferred to generate a single citation, comparing my website to other websites.
			</p>
			<p>
				You can see the full data here: <a href="https://docs.google.com/spreadsheets/d/1HG-aTB6BGECBIHyMwuC84WbDg2dnc5jmuXuhWoJIJqY/edit?usp=sharing" target="_blank">https://docs.google.com/spreadsheets/d/1HG-aTB6BGECBIHyMwuC84WbDg2dnc5jmuXuhWoJIJqY</a>
			</p>
			<table>
				<tbody>
					<tr>
						<td>Website</td>
						<td>Number of requests</td>
						<td>Data transferred</td>
					</tr>
					<tr>
						<td>citationmachine.net</td>
						<td>2967</td>
						<td>32.31 MB</td>
					</tr>
					<tr>
						<td>citationproducer.com</td>
						<td>334</td>
						<td>4.22 MB</td>
					</tr>
					<tr>
						<td>citefast.com</td>
						<td>198</td>
						<td>2.43 MB</td>
					</tr>
					<tr>
						<td>citethis.net</td>
						<td>11</td>
						<td>100.53 KB</td>
					</tr>
				</tbody>
			</table>
			<img src="data-transferred-graph.png" alt="citationmachine.net, citationproducer.com, citefast.com, citethis.net Size Metrics" />
		</div>
		<div class="paragraph">
			<h2>
				Languages and technologies
			</h2>
			<p>
				Trying to make this website lightweight, I wrote all of the HTML, CSS, and Javascript myself. The only library I used is <a href="https://github.com/jquery/jquery" target="_blank">jQuery</a>, which allowed animating DOM manipulation to be a breeze.
			</p>
			<p>
				I used PHP to serve the HTML. The website is simple enough that I didn't need any libraries or frameworks, and PHP got the job done with ease.
			</p>
			<p>
				I chose Python for the crawler script because it's developer-friendly and it's versatile to use. The script parses HTML from a given URL, and finds the author, date published, article title, and website name. Libraries such as <a href="https://github.com/pallets/flask" target="_blank">Flask</a>, <a href="https://github.com/kennethreitz/requests" target="_blank">Requests</a> and <a href="https://github.com/dsc/pyquery" target="_blank">PyQuery</a> made the task very duable.
			</p>
			<p>
				For the database I used MySQL, because you can't go wrong with MySQL.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Microservice architecture
			</h2>
			<p>
				That's right. I said the M-word. Microservice.
			</p>
			<p>
				If you're not familiar with microservices, I recommend watching this quick video that explains monolithic architecture vs microservice architecture: <a href="https://youtu.be/RJkn9VHM7lc" target="_blank">https://youtu.be/RJkn9VHM7lc</a>.
			</p>
			<p>
				Initially this website was hosted on my server, sharing apache and mysql with several other websites. Well one day apache crashes, taking down all of my websites. It took me 8 hours to realize they were down and to get them back up. 8 hours!
			</p>
			<p>
				With containers (Docker), each website can have a dedicated apache and mysql instance. So if one website goes down, the others are still running.
			</p>
			<p>
				With container orchestration (Kubernetes), each website can be restarted if anything goes wrong. If apache dies, the process will immediately be relaunched. Additionally, Kubernetes makes it easy for the service to be highly available.
			</p>
			<p>
				Using container-based deployments also made it easy to create a CD pipeline. Commits to master now go directly to production, with the help of a github trigger and a jenkins pipeline. This allows me to focus my energy on developing the application instead of worrying about maintaining production.
			</p>
			<p>
				Infrastructure as code (IAC) has also made my life easier. Everything from container resource allocation to SSL certificates are statically defined in YAML files alongside my application code.
			</p>
			<img src="microservices.png" alt="Microservice architecture of CiteThis Python web app" />
		</div>
		<div class="paragraph">
			<h2>
				Mistakes I made
			</h2>
			<p>
				Initially, I only supported MLA, APA, and Chicago formats because they were the most commonly used. But once I started asking for feedback from students, they asked, "Does it support IEEE format?". I quickly realized supporting only 3 formats would limit my audience, so I shifted the objective to instead support every single format.
			</p>
			<p>
				Initially, this was also just a single page application. I didn't see a need for making this a multi-page website, and I wanted to keep it as simple as possible. However, I soon came to realize it's poor impact on SEO. Chegg's websites are ranked so highly largely because of the sheer amount of content they have, and I decided to take a lesson from them. I ditched the single page application and created a page for every format in an effort to improve SEO and to better organize content (manual citations).
			</p>
			<p>
				One aspect of this project that significantly slowed me down was choosing the wrong tools for the job. I initially started this project years ago, and at the time PHP was the only backend language I was comfortable with. I wrote the entire crawl script in PHP, and it was so messy you'd think it had gone through a woodchipper. It was hacky and difficult to maintain.
			</p>
			<p>
				If I were to redo it, I'd build the entire project using Django, a Python framework which organizes code following the model-view-controller pattern. Python is also the best language of choice for the crawler script. It just makes sense to be consistent, using only one language and one organization system.
			</p>
			<p>
				Another thing that I did poorly was failing to create detailed mockups before developing the site. Too often I went straight to development before flushing out my idea, resulting in me having to redo nearly every aspect of the website. Very inefficient.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Conclusion
			</h2>
			<p>
				I am proud to have imagined an idea and seen it through to creation. I'm now watching the daily user count grow and I plan on improving this website for years down the line – fixing bugs, supporting more kinds of sources, and supporting more citation formats.
			</p>
			<p>
				Thanks for reading!
			</p>
		</div>
	</section>
</article>
<?php
	include '../blogfiles/footer.php';
?>