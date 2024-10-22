<?php
	$title = "Portfolio | Kristian Windsor";
	$description = "Websites designed and developed by Kristian Windsor.";
	$urlPath = "portfolio/"
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
					My Portfolio
				</h1>
				<p>
					I design, develop, and operate websites in my spare time.
				</p>
			</div>
		</div>
		<div class="body">
			<div class="section portfolio">
				<div class="card">
					<div class="image-wrap left image-container hoverable big-mobile">
						<div class="website-image">
							<img src="citethis-screenshot.png" title="CiteThis.net" alt="CiteThis.net Citation Generator screenshot" />
						</div>
						<div class="website-info">
							<div class="centered">
								<div>
									<a class="website-link" href="https://citethis.net/" target="_blank">
										<i class="icon icon-export">&#xf081;</i>
										Visit Website
									</a>
								</div>
								<div class="website-link-container">
									<a class="website-link" href="/blog/citethis.net/">
										<i class="icon icon-book-open">&#xe800;</i>
										Read About It
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="text-wrap right">
						<h3 class="title">
							CiteThis
						</h3>
						<p class="url">
							<a href="https://citethis.net/" target="_blank">
								citethis.net
							</a>
						</p>
						<p class="text">
							A citation generator to help students create bibliographies.
						</p>
					</div>
				</div>
				<div class="card">
					<div class="image-wrap left image-container hoverable big-mobile">
						<div class="website-info">
							<div class="centered">
								<div class="website-link-container">
									<a class="website-link" href="https://passgen.site/" target="_blank">
										<i class="icon icon-export">&#xf081;</i>
										Visit Website
									</a>
								</div>
								<div class="website-link-container">
									<a class="website-link" href="/blog/designing-a-password-generator/">
										<i class="icon icon-book-open">&#xe800;</i>
										Read About It
									</a>
								</div>
								<div class="website-link-container">
									<a class="website-link" href="https://github.com/KristianWindsor/passgen.site" target="_blank">
										<i class="icon icon-github">&#xf300;</i>
										View On Github
									</a>
								</div>
							</div>
						</div>
						<img src="password-generator-screenshot.png" title="PassGen.site" alt="PassGen.site Password Generator screenshot" />
					</div>
					<div class="text-wrap right text">
						<h3 class="title">
							Password Generator
						</h3>
						<p class="url">
							<a href="https://passgen.site/" target="_blank">
								passgen.site
							</a>
						</p>
						<p class="text">
							A minimal password generator.
						</p>
					</div>
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