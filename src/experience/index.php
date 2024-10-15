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
				<a href="/resume.pdf" target="_blank" class="icon-link">
					<p><i class="icon icon-file-pdf">&#xf1c1;</i></p>
					<p><span>See my résumé</span></p>
				</a>
			</div>
			<div class="section experience">
				<h2>
					Work Experience
				</h2>
				<div class="card">
					<div class="image-wrap">
						<img src="libdib-logo.png" class="image partial nobig" title="LibDib, LLC" alt="LibDib, LLC" />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							DevOps Engineer
						</h3>
						<h4 class="text">
							LibDib, LLC
						</h4>
						<p class="text">
							July 2021 - Present
						</p>
						<p class="text">
							I'm helping LibDib scale up their infrastructure as the company rapidly grows.
						</p>
					</div>
				</div>
				<div class="card">
					<div class="image-wrap">
						<img src="pinger-devops-engineer.png" class="image partial nobig" title="Pinger Inc." alt="Pinger Inc." />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							DevOps Engineer
						</h3>
						<h4 class="text">
							Pinger, Inc.
						</h4>
						<p class="text">
							May 2019 - April 2021
						</p>
						<p class="text">
							I built out the development and production cloud infrastructure, including container orchestration, network security, logging and monitoring, and a disaster recovery plan. I’m responsible for the availability and uptime of all services living in these environments.
						</p>
						<p class="text">
							I helped the company shift to be cloud native, such as integrating Docker into developers’ workflows and migrating legacy services to the cloud.
						</p>
						<p class="text">
							See <a href="/resume.pdf">my résumé</a> for more details.
						</p>
					</div>
				</div>
				<div class="card">
					<div class="image-wrap">
						<img src="pinger-software-engineer.png" class="image partial nobig" title="Pinger Inc." alt="Pinger Inc." />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							Software Engineer
						</h3>
						<h4 class="text">
							Pinger, Inc.
						</h4>
						<p class="text">
							July 2017 - May 2019
						</p>
						<p class="text">
							Working part-time as a member of the web team, I took ownership of the build system and implemented the UI automation suite. I automated hundreds of test cases, allowing for quicker and more frequent deployments to production.
						</p>
					</div>
				</div>
				<div class="card">
					<div class="image-wrap">
						<img src="pinger-software-engineer-intern.png" class="image partial nobig" title="Pinger Inc." alt="Pinger Inc." />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							Software Engineer Intern
						</h3>
						<h4 class="text">
							Pinger, Inc.
						</h4>
						<p class="text">
							July 2016 - Nov. 2016
						</p>
						<p class="text">
							I contributed to the development of Textfree Web with AngularJS.
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
						<img src="devops-world-2020.png" class="image partial nobig" title="Pinger Inc." alt="Pinger Inc." />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							Presented at DevOps World (2020)
						</h3>
						<p class="text">
							Working at Pinger, I created a tool capable of launching endless amounts of production-like environments. The tool was adopted by several teams and used for parallelized automated  testing and manual feature branch testing. I demoed this tool at DevOps World 2020.
						</p>
						<p class="text">
							<a href="https://www.cloudbees.com/resources/40-second-production-environment" target="_blank">
								See the presentation on Cloudbees.com
							</a>
						</p>
					</div>
				</div>
				<div class="card">
					<div class="image-wrap">
						<img src="devops-radio.png" class="image partial nobig" title="Pinger Inc." alt="Pinger Inc." />
					</div>
					<div class="text-wrap">
						<h3 class="title">
							Featured on DevOps Radio (2019)
						</h3>
						<p class="text">
							Me and my boss Adam are interviewed on the DevOps Radio podcast. We make up the DevOps team at Pinger and won the Rising Star Award at DevOps World 2019.
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
						<a href="https://www.linkedin.com/in/kristian-windsor/" target="_blank" class="icon-link">
							<i class="icon icon-linkedin">&#xf0e1;</i>
							LinkedIn
						</a>
					</p>
					<p>
						<a href="https://github.com/KristianWindsor" target="_blank" class="icon-link">
							<i class="icon icon-github">&#xf300;</i>
							Github
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