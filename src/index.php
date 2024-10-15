<?php
	$title = "Home | Kristian Windsor";
	$description = "This is my website.";
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
					Hi, I'm Kristian Windsor.
				</h1>
				<p>
					This is my website.
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
							See my work experience
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
							See my portfolio
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
							See my blog
						</p>
					</div>
					<div class="image-wrap">
						<img src="/blog/custom-built-kitchen-for-my-lexus/cover.jpg" title="Lexus Kitchen" alt="Camping with my custom-built Lexus Kitchen" />
					</div>
				</a>
				<a href="/contact/" class="card">
					<div class="text-wrap">
						<h2>
							Get in touch!
						</h2>
						<p>
							Contact me
						</p>
					</div>
					<div class="image-wrap">
					<i class="icon icon-mail">&#xe802;</i>
					<i class="icon icon-phone">&#xe803;</i>
					</div>
				</a>
				<a href="/about/" class="card">
					<div class="text-wrap">
						<h2>
							About me.
						</h2>
						<p>
							See the about page
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