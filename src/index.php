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
					(I'm a DevOps Engineer)
				</p>
			</div>
		</div>
		<div class="body">
			<?php
				include_once("html/portfolio.php");
				include_once("html/experience.php");
			?>
			<div class="section blog">
				<div>
					<h2>
						Blog Posts
					</h2>
				</div>
				<div class="content">
					<a class="project" href="/blog/fullspeed.io-premium-car-videography/">
						<div class="image-wrap">
							<img src="/blog/fullspeed.io-premium-car-videography/audi1.png" alt="Fullspeed.io" />
						</div>
						<div class="text-wrap">
							<h3>
								Fullspeed.io – Premium Car Videography
							</h3>
							<p>
								Vroom vroom
							</p>
						</div>
					</a>
					<a class="project" href="/blog/how-i-learned-to-program/">
						<div class="image-wrap">
							<img src="/blog/how-i-learned-to-program/teamblock.png" alt="Team Block" />
						</div>
						<div class="text-wrap">
							<h3>
								How I Learned to Program
							</h3>
							<p>
								Once upon a time...
							</p>
						</div>
					</a>
					<a class="project" href="/blog/citethis.net/">
						<div class="image-wrap">
							<img src="/blog/citethis.net/citethis.png" alt="CiteThis" />
						</div>
						<div class="text-wrap">
							<h3>
								CiteThis.net
							</h3>
							<p>
								Take that, Chegg.
							</p>
						</div>
					</a>
					<a class="project" href="/blog/designing-a-password-generator/">
						<div class="image-wrap">
							<img src="/blog/designing-a-password-generator/a-password-generator.png" alt="Password Generator" />
						</div>
						<div class="text-wrap">
							<h3>
								Designing a Password Generator
							</h3>
							<p>
								The UX in this app will knock your socks off!
							</p>
						</div>
					</a>
					<a class="project" href="/blog/running-a-clothing-brand-lessons-learned/">
						<div class="image-wrap">
							<img src="/blog/running-a-clothing-brand-lessons-learned/mom-card.jpg" alt="MOM Clothing 2016" />
						</div>
						<div class="text-wrap">
							<h3>
								Running a Clothing Brand: Lessons Learned
							</h3>
							<p>
								Spoilers: don't run a clothing brand.
							</p>
						</div>
					</a>
				</div>
			</div>
			<?php
				include_once("html/about.php");
				include_once("html/contact.php");
			?>
		</div>
		<?php
			include_once("html/foot.php");
		?>
	</body>
	<?php
		include_once("html/footer.php");
	?>
</html>