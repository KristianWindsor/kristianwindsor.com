<?php
	$title = "Experience | Kristian Windsor";
	$description = "Résumé and work experience of Kristian Windsor as a DevOps Engineer and Software Engineer.";
?>
<!DOCTYPE html>
<html lang="en">
	<?php
		include_once("../html/head.php");
	?>
	<body>
		<div class="head">
			<?php
				include_once("../html/nav.php");
			?>
			<div class="title-section">
				<h1>
					Work Experience.
				</h1>
				<p>
					Mostly as a DevOps Engineer
				</p>
			</div>
		</div>
		<div class="body">
			<div class="section experience">
				<h2>
					Résumé
				</h2>
				<p>
					<a href="/resume.pdf" target="_blank">See my résumé (resume.pdf)</a>
				</p>
			</div>
			<div class="section experience">
				<h2>
					Work Experience
				</h2>
				<div class="card">
					<div class="image-wrap">
						<img src="/img/pinger-devops-engineer.png" class="image partial nobig" title="Pinger Inc." alt="Pinger Inc." />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							DevOps Engineer
						</h3>
						<h4 class="text">
							<a href="https://www.pinger.com/" target="_blank">Pinger, Inc.</a>
						</h4>
						<h4 class="text">
							May 2019 - Present
						</h4>
						<p class="text">
							I am building out the development infrastructure with Kubernetes, writing Jenkins pipelines, refactoring monolithic applications into a microservice architecture, and helping engineers get comfortable with using Docker.
						</p>
					</div>
				</div>
				<div class="card">
					<div class="image-wrap">
						<img src="/img/pinger-software-engineer.png" class="image partial nobig" title="Pinger Inc." alt="Pinger Inc." />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							Software Engineer
						</h3>
						<h4 class="text">
							<a href="https://www.pinger.com/" target="_blank">Pinger, Inc.</a>
						</h4>
						<h4 class="text">
							July 2017 - May 2019
						</h4>
						<p class="text">
							Working part-time as a member of the web team, I built the CI pipeline and created the UI automation test suite which uses Selenium, CucumberJS, and WebdriverIO.
						</p>
					</div>
				</div>
				<div class="card">
					<div class="image-wrap">
						<img src="/img/pinger-software-engineer-intern.png" class="image partial nobig" title="Pinger Inc." alt="Pinger Inc." />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							Software Engineer Intern
						</h3>
						<h4 class="text">
							<a href="https://www.pinger.com/" target="_blank">Pinger, Inc.</a>
						</h4>
						<p class="text">
							July 2016 - Nov. 2016
						</p>
						<p class="text">
							Working with the product team and web team, my responsibilities entailed creating mockups in HTML/CSS and fixing bugs for the company's web app, Textfree, using AngularJS.
						</p>
					</div>
				</div>
			</div>
			<div class="section experience">
				<h2>
					Recognition & Activities
				</h2>
				<div class="card">
					<div class="image-wrap">
						<img src="/img/devops-world-2020.png" class="image partial nobig" title="Pinger Inc." alt="Pinger Inc." />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							Presented a demo at DevOps World (2020)
						</h3>
						<p class="text">
							"40 Second Prod"
						</p>
						<ul>
							<li>
								<a href="" target="_blank">
									See the presentation on Cloudbees.com
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card">
					<div class="image-wrap">
						<img src="/img/devops_radio.png" class="image partial nobig" title="Pinger Inc." alt="Pinger Inc." />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							Featured on the DevOps Radio podcast (2019)
						</h3>
						<p class="text">
							We (the DevOps team at Pinger) received the Rising Star Award on behalf of Pinger.
						</p>
						<ul>
							<li>
								<a href="https://open.spotify.com/episode/3gDSGVqLYJTKv6jL7uNAMd?si=mWFpZOR-S2S45ynrACRYAw" target="_blank">
									Listen with Spotify
								</a>
							</li>
							<li>
								<a href="https://podcasts.apple.com/us/podcast/episode-61-pinger-a-devops-rising-star-is-born/id1108186102?i=1000453740190" target="_blank">
									Listen with Apple Podcasts
								</a>
							</li>
							<li>
								<a href="https://devopsradio.libsyn.com/episode-61-a-devops-rising-star-is-born-adam-robertson-and-kristian-windsor-of-pinger" target="_blank">
									Listen with LibSyn
								</a>
							</li>
							<li>
								<a href="https://www.businesswire.com/news/home/20190815005016/en/2019-DevOps-World-Jenkins-World-Award-Winners" target="_blank">
									Business Wire
								</a>
							</li>
							<li>
								<a href="https://www.cloudbees.com/press/2019-devops-world-jenkins-world-award-winners-announced" target="_blank">
									Cloudbees Press
								</a>
							</li>
							<li>
								<a href="" target="_blank">
									Link
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="section experience">
				<h2>
					Connect with me
				</h2>
				<div class="container">
					<p>
						<a href="https://github.com/KristianWindsor" target="_blank">
							<i class="icon icon-github">&#xf300;</i> Github
						</a>
					</p>
					<p>
						<a href="https://www.linkedin.com/in/kristian-windsor/" target="_blank">
							<i class="icon icon-linkedin">&#xf0e1;</i> LinkedIn
						</a>
					</p>
				</div>
			</div>
		</div>
		<?php
			include_once("../html/foot.php");
		?>
	</body>
	<?php
		include_once("../html/footer.php");
	?>
</html>