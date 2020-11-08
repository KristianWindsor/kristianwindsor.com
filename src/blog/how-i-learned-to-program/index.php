<?php
	$articleTitle = "How I Learned to Program";
	$articleDescription = "Once upon a time...";
	$articleUrl = "how-i-learned-to-program";
	$imageUrl = "teamblock.png";
	$datePublished = "2019-05-18";
	include '../blogfiles/header.php';
?>
<article id="article">
	<header class="article-heading">
		<h1 class="article-title">
			<?php echo $articleTitle ?>
		</h1>
		<p class="article-info">
			By Kristian Windsor on May 18th, 2019
		</p>
	</header>
	<section class="article-body">
		<div class="paragraph">
			<h2>
				Drag and Drop Programming
			</h2>
			<p>
				When I was 13 years old I was introduced to a program called GameMaker Studio, a drag-and-drop programming engine. My friend showed me a simple game he made using it, and I had to try it out. 
			</p>
			<p>
				I spent the next year making games, improving with each game I made. Most of them were 2D platformer-style games.
			</p>
			<p>
				This helped establish some foundational principles for programming even though I never actually wrote code.
			</p>
			<img src="teamblock.png" alt="Team Block" />
			<p class="caption">
				Team Block is a platformer game where you play as multiple characters to solve the puzzles.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				The National STEM Video Game Challenge
			</h2>
			<p>
				The challenge is a competition for middle schoolers and high schoolers to create a video game, and I decided to make one for the challenge using my new GameMaker skills.
			</p>
			<p>
				To my suprise, I won my division of the competition. Among the 3700+ entries, myself and 27 other winners were flown to Washington DC to collect our awards. I got to shake hands with Bill Gates and others who sponsored <a href="https://current.org/2012/05/young-game-developers-honored-at-2012-national-stem-video-game-challenge/" target="_blank">the event</a>. All winners received a new HP laptop and $2,000 towards something educational. 
			</p>
			<p>
				Winning the challenge instilled confidence in me and opened my eyes to the world of programming.
			</p>
			<img src="stemchallenge.jpg" alt="Winners of the 2012 National STEM Video Game Challenge" />
			<p class="caption">
				The winners of the 2012 National STEM Video Game Challenge.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Windows Applications (C#)
			</h2>
			<p>
				I wanted a taste of real programming, so I torrented Visual Studio on the new laptop I had won and started learning C#.
			</p>
			<p>
				I made many simple programs that I used on a regular basis.
			</p>
			<ul>
				<li>
					<p>
						A calculator, where hovering over a key displays the possible result, as if you were to click that key. The idea was to save a few seconds and provide a new way of interacting with the keypad.
					</p>
				</li>
				<li>
					<p>
						A notepad with a built-in gif displayer.
					</p>
				</li>
				<li>
					<p>
						A Minecraft file swapper. The purpose was to automatically switch between the minecraft.jar files at the click of a button, which otherwise would require manually renaming 2 files.
					</p>
				</li>
				<li>
					<p>
						A username generator. Most online services (eg. Gmail, GitHub, Instagram) have you choose a username, but most usernames are already taken. Common word combinations and most names are not available, so you need to add numbers or random characters to make it unique, resulting in a long and ungraceful username. This username generator combines random syllables to create pronouncable words, which are unique and short, guareented to be available on all online services.
					</p>
				</li>
			</ul>
			<img src="username.png" alt="Zelocs Username Generator" />
			<p class="caption">
				Zelocs Username Generator is an app that combines random syllables to create unique pronounceable usernames.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Web Apps (Javascript, jQuery)
			</h2>
			<p>
				I felt like a baller, having made computer games and programs. I wanted to show them to my friends at school, but there was one problem: I couldn't because they had an .exe extension.
			</p>
			<p>
				My friends had Macs and the school computers had restrictions preventing access from executable files. So they wouldn't run on my friends computers, the school computers, and definitely not on smartphones – so what was the point of making them? What is the point in creating something if people cannot use it?
			</p>
			<p>
				The idea of web apps stuck out to me. A web app works on every device – Windows, macOS, Android, iOS, even on Nintendo Wiis – with no installation needed.
			</p>
			<p>
				I started making web apps. I had already worked with HTML before, so it was just a matter of learning Javacript.
			</p>
			<p>
				Once I discovered jQuery, my apps reached a whole new level. Manipulating DOM elements became as easy as 1-2-3. Any web app can be created with a little bit of logic and DOM manipulation.
			</p>
			<ul>
				<li>
					<p>
						A username generator. Using the same logic as the one I made with C#, but with better organized code and a cleaner UI.
					</p>
				</li>
				<li>
					<p>
						A chatterbot that can have conversations with people, similar to CleverBot. It had precomposed messages and lots and lots of if-statements.
					</p>
				</li>
				<li>
					<p>
						A workout routine app. It had a timer with a prebuilt routine, with pictures and instructions.
					</p>
				</li>
				<li>
					<p>
						A word counter. It has a single input textbox that triggers the metrics to update on value-change and on key-press. The number of words, characters, sentences, and paragraphs were all tallied up.
					</p>
				</li>
			</ul>
			<img src="wordcounter.png" alt="Word Counter web app" />
			<p class="caption">
				Word Counter is a web app that provides metrics on the inputted text without clicking any buttons.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Web Apps with a Backend (PHP, MySQL)
			</h2>
			<p>
				My sophomore year of high school, I learned PHP and MySQL with the help and influence of my brother, who was interning at Facebook at the time. 
			</p>
			<p>
				Having a backend created an entire new dimension to web apps. Using AJAX with jQuery I was able to easily communicate between the user's browser and the database which allows the app to be much more intelligent.
			</p>
			<ul>
				<li>
					<p>
						Chess with multiplayer support. You could start a match and give your friend the 4-digit code to play against you. It also had touch event support, allowing people to intuitively play on smartphones and iPads.
					</p>
				</li>
				<li>
					<p>
						A visualization of every past user's mouse position – somewhat of a social experiment. Every 5 milliseconds, the user's mouse position is recorded into the database. When viewing the site, there is a mouse image for every past user, and the mouse images moves every 5 milliseconds to the next position, simulating that person's cursor. I called it, Mouse Party.
					</p>
				</li>
				<li>
					<p>
						A notecard app. I called it Simplistudy, and it was a simplified knockoff of Quizlet with a few customized features. It had a smart-paste interpreter textbox that turned lists and notes into notecards. It also Bing Search and Google Translate integration.
					</p>
				</li>
			</ul>
			<img src="simplistudy.png" alt="Simplistudy" />
			<p class="caption">
				Simplistudy is a notecard app with 3rd party integrations and custom features.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Internship at Pinger
			</h2>
			<p>
				I landed an internship a few months out of high school through people that I knew. My responsibilities were to create HTML/CSS mockups for the product team.
			</p>
			<p>
				I eventually ran out of work to do, so I asked the web team if they had any Javascript work I could do. I was assigned a couple of unimportant bugs from the backlog, which I struggled to accomplish working in the large codebase and a new workflow, but I did manage to fix the bugs and my code went out to production in the next release.
			</p>
			<p>
				Getting familiar with the workflow and process was the most challenging part. Prior to this, all of my coding was done solo and was downright disorganized. I barely even used source control!
			</p>
			<p>
				Features and bugfixes were planned meticulously for each 2-week sprint, and each feature/bugfix had it's own git branch, which was code reviewed by peer developers and tested before merging to the develop branch.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Portfolio Projects
			</h2>
			<p>
				I planned to build three websites in order to create a portfolio as a fullstack web developer. I had built plenty of apps but I had never "completed" a project. I didn't have any websites that I was proud of and wanted to show off – a website that I could talk about and that could prove that I can make a good website.
			</p>
			<ul class="normal">
				<li>
					<p>
						PHP/HTML/CSS - creating a basic multipage website. Kristianwindsor.com is <a href="https://github.com/KristianWindsor/kristianwindsor.com/blob/master/src/blog/how-i-learned-to-program/index.php#L197" target="_blank">open source</a>, completely responsive, and it's super lightweight. This page you're on now, with all 6 images, weighs just 400KB.
					</p>
				</li>
				<li>
					<p>
						Javascript – frontend scripting. Making a <a href="https://passgen.site/" target="_blank">password generator</a> is a common beginner projects, and I wanted to see just how overcomplicated yet simple I could make it. <a href="https://kristianwindsor.com/blog/designing-a-password-generator/">Read more</a>.
					</p>
				</li>
				<li>
					<p>
						Python/MySQL – backend scripting. I created <a href="https://citethis.net/" target="_blank">citethis.net</a> to get experience with creating a complex backend that can handle high amounts of traffic. <a href="https://kristianwindsor.com/blog/citethis.net/">Read more</a>.
					</p>
				</li>
			</ul>
			<img src="citethis.png" alt="CiteThis" />
			<p class="caption">
				CiteThis is a web app for students to generate citations for sources in the chosen format.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Conclusion
			</h2>
			<p>
				There is no secret to learning how to program – you just need to start doing it.
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