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
					Engineer. Creator. Explorer.
				</p>
			</div>
		</div>
		<div class="body">
			<div class="section about">
				<h2>
					Hello, I'm Kristian
				</h2>
				<div class="card">
					<div class="image-wrap big">
						<img src="kristian-windsor-profile-photo.jpg" id="profile-photo" class="partial" title="Kristian Windsor" alt="Kristian Windsor profile photo" />
					</div>
					<div class="text-wrap">
						<p class="text">
							Hi, my name is Kristian Windsor, and I work as a DevOps engineer in San Francisco.
						</p>
						<p class="text">
							I’ve always loved building things. Growing up on a small farm just south of San Jose, I had plenty of time and space to explore – whether that meant playing outside in the dirt, building with Lego, designing worlds in Minecraft, or, eventually, writing code. I started programming when I was 12, guided by my brother, <a href="https://kristopherwindsor.com/" target="_blank">Kristopher</a>, who set me up with the tools I needed, helped whenever I got stuck, and even hosted my first websites so I could share them with friends.
						</p>
						<p class="text">
							Outside of coding, I love spending time outdoors – camping under the stars in Joshua Tree, soaking in the coastal air of Big Sur, or unwinding around a campfire in Lake Tahoe. I also enjoy walking through San Francisco’s many scenic streets, playing board games with friends, and indulging in great food (especially ramen, pho, and a good curry).
						</p>
						<p class="text">
							One day, I’d love to start my own technology business. I don’t know exactly what that will look like yet, but I know I want to build something meaningful. Until then, I’ll keep learning, creating, and preparing for whatever comes next.
						</p>
					</div>
				</div>
			</div>
			<div class="section about">
				<h2>
					Connect with me
				</h2>
				<div class="icon-wrap">
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