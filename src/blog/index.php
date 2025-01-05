<?php
	$title = "Blog | Kristian Windsor";
	$description = "Blog posts by Kristian Windsor.";
	$urlPath = "blog/";
?>
<!DOCTYPE html>
<html lang="en">
	<?php
		include_once("../html/head.php");
	?>
	<body id="blog" style="padding:0">
		<div class="head">
			<?php
				include_once("../html/nav.php");
			?>
			<div class="title-section">
				<h1>
					My Blog Posts
				</h1>
				<p>
					I write about the things that I build.
				</p>
			</div>
		</div>
		<div class="body">
			<div class="section blog">
				<a href="the-story-behind-my-unique-email-address" class="card">
					<div class="image-wrap">
						<img src="the-story-behind-my-unique-email-address/buzz-lightyear-disneyland.jpg" title="Buzz Lightyear's ride at Disneyland" alt="Entering email at Buzz Lightyear ride at Disneyland" />
					</div>
					<div class="text-wrap">
						<h2>
							The Story Behind My Unique Email Address
						</h2>
						<p>
							Involving a Dutch-speaking country in South America
						</p>
					</div>
				</a>
				<a href="custom-built-kitchen-for-my-lexus" class="card">
					<div class="image-wrap">
						<img src="custom-built-kitchen-for-my-lexus/cover.jpg" title="Lexus Kitchen" alt="Camping with my custom-built Lexus Kitchen" />
					</div>
					<div class="text-wrap">
						<h2>
							Custom-Built Kitchen for My Lexus
						</h2>
						<p>
							Inspired by the #VanLife trend
						</p>
					</div>
				</a>
				<a href="fullspeed.io-premium-car-videography" class="card">
					<div class="image-wrap">
						<img src="fullspeed.io-premium-car-videography/audi1.png" title="Audi S4" alt="Fullspeed.io Audi S4 rolling shot" />
					</div>
					<div class="text-wrap">
						<h2>
							Fullspeed.io – Premium Car Videography
						</h2>
						<p>
							Vroom vroom
						</p>
					</div>
				</a>
				<a href="how-i-learned-to-program" class="card">
					<div class="image-wrap">
						<img src="how-i-learned-to-program/teamblock.png" title="Team Block" alt="Team Block video game screenshot" />
					</div>
					<div class="text-wrap">
						<h2>
							How I Learned to Program
						</h2>
						<p>
							Once upon a time...
						</p>
					</div>
				</a>
				<a href="citethis.net" class="card">
					<div class="image-wrap">
						<img src="citethis.net/citethis.png" title="CiteThis.net" alt="CiteThis.net Citation Generator screenshot" />
					</div>
					<div class="text-wrap">
						<h2>
							CiteThis.net
						</h2>
						<p>
							Take that, Chegg.
						</p>
					</div>
				</a>
				<a href="designing-a-password-generator/" class="card">
					<div class="image-wrap">
						<img src="designing-a-password-generator/a-password-generator.png" title="PassGen.site" alt="PassGen.site Password Generator screenshot" />
					</div>
					<div class="text-wrap">
						<h2>
							Designing a Password Generator
						</h2>
						<p>
							The UX in this app will knock your socks off!
						</p>
					</div>
				</a>
				<a href="running-a-clothing-brand-lessons-learned" class="card">
					<div class="image-wrap">
						<img src="running-a-clothing-brand-lessons-learned/mom-card.jpg" title="MOM Clothing" alt="MOM Clothing 2016" />
					</div>
					<div class="text-wrap">
						<h2>
							Running a Clothing Brand: Lessons Learned
						</h2>
						<p>
							Spoilers: don't run a clothing brand.
						</p>
					</div>
				</a>
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