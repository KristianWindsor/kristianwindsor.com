<?php
	$title = "About | Kristian Windsor";
	$description = "Kristian Windsor is a DevOps Engineer from San Martin, California.";
	$urlPath = "about/";
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
					About Me
				</h1>
				<p>
					Who is Kristian Windsor?
				</p>
			</div>
		</div>
		<div class="body">
			<div class="section about">
				<div class="card">
					<div class="image-wrap">
						<img src="kristian-windsor-profile-photo.jpg" id="profile-photo" class="image partial nobig" title="Kristian Windsor" alt="Kristian Windsor profile photo" />
					</div>
					<div class="text-wrap">
						<p class="text">
							Hi, my name is Kristian Windsor and I work as a DevOps engineer in San Francisco.
						</p>
						<p class="text">
							Apart from building cool software, I enjoy hiking, riding my motorcycle, playing board games, and trying out new restaurants with friends.
						</p>
						<p class="text">
							In the future I would love to start my own software company. One thing at a time though...
						</p>
					</div>
				</div>
				<div class="links">
					<a href="https://github.com/KristianWindsor" target="_blank" class="icon-link">
						<p><i class="icon">&#xf300;</i></p>
						<p>Github</p>
					</a>
					<a href="https://www.linkedin.com/in/kristian-windsor/" target="_blank" class="icon-link">
						<p><i class="icon">&#xf0e1;</i></p>
						<p>LinkedIn</p>
					</a>
					<a href="https://www.flickr.com/photos/kristianwindsor/" target="_blank" class="icon-link">
						<p><i class="icon">&#xf303;</i></p>
						<p>Flickr</p>
					</a>
					<a href="https://www.instagram.com/wind.so/" target="_blank" class="icon-link">
						<p><i class="icon">&#xf32d;</i></p>
						<p>Instagram</p>
					</a>
					<a href="https://www.youtube.com/@kristianwindsor" target="_blank" class="icon-link">
						<p><i class="icon">&#xf16a;</i></p>
						<p>YouTube</p>
					</a>
					<a href="https://www.reddit.com/user/kristianwindsor" target="_blank" class="icon-link">
						<p><i class="icon">&#xf281;</i></p>
						<p>Reddit</p>
					</a>
					<a href="https://twitter.com/kristianwindsor" target="_blank" class="icon-link">
						<p><i class="icon">&#xf309;</i></p>
						<p>Twitter</p>
					</a>
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