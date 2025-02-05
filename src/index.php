<?php
	$title = "Home | Kristian Windsor";
	$description = "This is my website.";

	include('script/redirect-url.php');
?>
<!DOCTYPE html>
<html lang="en">
	<?php
		include_once("html/head.php");
	?>
	<body>
		<div class="head">
			<?php
				include_once("html/nav.php");
			?>
			<div class="title-section">
				<h1>
					Hi, I'm Kristian!
				</h1>
				<p>
					Welcome to my website.
				</p>
			</div>
		</div>
		<div class="body">
			<div class="section home">
				<a href="/experience/" class="card">
					<div class="text-wrap">
						<h2>
							I'm a DevOps Engineer.
						</h2>
						<p>
							Working in Silicon Valley, I help engineering teams move faster by making deployments effortless and infrastructure resilient – here’s my journey in DevOps.
						</p>
					</div>
					<div class="image-wrap">
						<img src="/experience/devops-infinity-loop.png" title="DevOps Infinity Loop" alt="DevOps Infinity Loop" />
					</div>
				</a>
				<a href="/portfolio/" class="card">
					<div class="text-wrap">
						<h2>
							I make websites for fun.
						</h2>
						<p>
							A couple of side projects I built to sharpen my skills, experiment with new ideas, and just have fun. Take a look!
						</p>
					</div>
					<div class="image-wrap">
						<img src="/portfolio/citethis-screenshot.png" title="CiteThis.net" alt="CiteThis.net Citation Generator screenshot" />
					</div>
				</a>
				<a href="/blog/" class="card">
					<div class="text-wrap">
						<h2>
							I write about my projects.
						</h2>
						<p>
							From coding projects to business experiments to hands-on builds – here’s a look at the things I’ve created.
						</p>
					</div>
					<div class="image-wrap">
						<img src="/blog/custom-built-kitchen-for-my-lexus/cover.jpg" title="Lexus Kitchen" alt="Camping with my custom-built Lexus Kitchen" />
					</div>
				</a>
				<a href="/contact/" class="card">
					<div class="text-wrap">
						<h2>
							Let's get in touch!
						</h2>
						<p>
							I’m always happy to connect – shoot me an email or a quick text!
						</p>
					</div>
					<div class="image-wrap">
						<img src="/contact/phone.jpg" title="Telephone stock photo" alt="Telephone stock photo" />
					</div>
				</a>
				<a href="/about/" class="card">
					<div class="text-wrap">
						<h2>
							A little about me.
						</h2>
						<p>
							A quick intro to who I am, what I do, and where you can find me online.
						</p>
					</div>
					<div class="image-wrap">
						<img src="/about/kristian-windsor-profile-photo.jpg" title="Kristian Windsor" alt="Kristian Windsor profile photo" />
					</div>
				</a>
			</div>
		</div>
		<?php
			include_once("html/foot.php");
		?>
	</body>
	<?php
		include_once("html/footer.php");
	?>
</html>