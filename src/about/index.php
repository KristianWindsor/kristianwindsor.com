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
			<div class="hi">
				<h1>
					About Me
				</h1>
				<p>
					Let me tell you who I am...
				</p>
			</div>
		</div>
		<div class="body">
			<div class="section about">
				<div class="content">
					<div class="project">
						<div class="image-wrap">
							<img src="/img/me.jpg" id="profile-photo" class="image partial nobig" alt="Kristian Windsor" />
						</div>
						<div class="text-wrap">
							<p class="text">
								When I'm not programming, my free time is spent riding my bike around town, going on hikes, and hobbying in photography.
							</p>
							<p class="text">
								In the future, I plan on running my own technology oriented business.
							</p>
						</div>
					</div>
				</div>
				<div class="container">
					<p>
						<a href="https://github.com/KristianWindsor" target="_blank">
							<i class="icon icon-github">&#xf300;</i> Github
						</a>
					</p>
					<p>
						<a href="https://www.linkedin.com/in/kristian-windsor/" target="_blank">
							<i class="icon icon-linkedin">&#xf318;</i> LinkedIn
						</a>
					</p>
					<p>
						<a href="https://www.flickr.com/photos/kristianwindsor/" target="_blank">
							<i class="icon icon-flickr">&#xf303;</i> Flickr
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