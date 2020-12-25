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
			<div class="hi">
				<h1>
					Hi, I'm Kristian Windsor.
				</h1>
				<p>
					This is my website.
				</p>
			</div>
		</div>
		<div id="content" class="mainbody">
			<a href="/experience/" class="post-preview">
				<div class="text-wrap">
					<h2>
						I'm a DevOps Engineer.
					</h2>
					<p>
						See my work experience
					</p>
				</div>
				<div class="image-wrap">
					<img src="https://go.isostech.com/hubfs/classicdevops.png" alt="DevOps Infinity Circle" />
				</div>
			</a>
			<a href="/portfolio/" class="post-preview">
				<div class="text-wrap">
					<h2>
						I make websites for fun.
					</h2>
					<p>
						See my portfolio
					</p>
				</div>
				<div class="image-wrap">
					<img src="/img/citethis.png" alt="Team Block" />
				</div>
			</a>
			<a href="/blog/" class="post-preview">
				<div class="text-wrap">
					<h2>
						I write about my projects.
					</h2>
					<p>
						See my blog
					</p>
				</div>
				<div class="image-wrap">
					<img src="/blog/fullspeed.io-premium-car-videography/audi1.png" alt="Fullspeed.io" />
				</div>
			</a>
			<a href="/contact/" class="post-preview">
				<div class="text-wrap">
					<h2>
						Get in touch!
					</h2>
					<p>
						Contact me
					</p>
				</div>
				<div class="image-wrap">
				<i class="icon icon-mail">&#xe803;</i>
				<i class="icon icon-phone">&#xe804;</i>
				</div>
			</a>
			<a href="/about/" class="post-preview">
				<div class="text-wrap">
					<h2>
						About me.
					</h2>
					<p>
						See the about page
					</p>
				</div>
				<div class="image-wrap">
					<img src="/img/kristian_windsor.jpg" alt="kristian windsor face" />
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