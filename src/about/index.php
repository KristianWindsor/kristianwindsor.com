<?php
	$title = "About | Kristian Windsor";
	$description = "Kristian Windsor is a DevOps Engineer from San Martin, California.";
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
					Let me tell you who I am...
				</p>
			</div>
		</div>
		<div class="body">
			<div class="section about">
				<div class="card">
					<div class="text-wrap">
						<p class="text">
							Hello. My name is Kristian Windsor and I am a DevOps engineer based in San Jose, California. 
						</p>
						<p class="text">
							I’ve been programming since middle school and have always had a passion for it.
						</p>
						<p class="text">
							Outside of programming, I enjoy camping and photography. The Santa Cruz mountains are a goldmine for campsites and a longtime favorite of mine. Take a look at some of my adventures on Instagram and Flickr!
						</p>
						<p class="text">
							In the future I would love to start my own software company. One thing at a time though...
						</p>
					</div>
					<div class="image-wrap">
						<img src="/img/kristian_windsor.jpg" id="profile-photo" class="image partial nobig" alt="Kristian Windsor" />
					</div>
				</div>
				<div class="container">
					<p>
						<a href="https://github.com/KristianWindsor" target="_blank" class="icon-link">
							<i class="icon icon-github">&#xf300;</i> Github
						</a>
					</p>
					<p>
						<a href="https://www.linkedin.com/in/kristian-windsor/" target="_blank" class="icon-link">
							<i class="icon icon-linkedin">&#xf0e1;</i>
							<span>LinkedIn</span>
						</a>
					</p>
					<p>
						<a href="https://www.flickr.com/photos/kristianwindsor/" target="_blank" class="icon-link">
							<i class="icon icon-flickr">&#xf303;</i>
							<span>Flickr</span>
						</a>
					</p>
					<p>
						<a href="https://www.instagram.com/wind.so/" target="_blank" class="icon-link">
							<i class="icon icon-flickr">&#xf32d;</i> Instagram
						</a>
					</p>
					<p>
						<a href="https://www.youtube.com/channel/UCZ4fDjpML5yp6QQcdMkyoXg" target="_blank" class="icon-link">
							<i class="icon icon-flickr">&#xf16a;</i> YouTube
						</a>
					</p>
					<!--<p>
						<a href="https://www.reddit.com/user/kristianwindsor" target="_blank">
							<i class="icon icon-flickr">&#xf281;</i> Reddit
						</a>
					</p>
					<p>
						<a href="https://twitter.com/kristianwindsor" target="_blank">
							<i class="icon icon-flickr">&#xf309;</i> Twitter
						</a>
					</p>-->
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