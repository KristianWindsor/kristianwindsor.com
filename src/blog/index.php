<?php
	$title = "Blog | Kristian Windsor";
	$description = "Blog posts by Kristian Windsor.";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			<?php echo $title; ?>
		</title>
		<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
		<link rel="stylesheet" href="../style.css">
		<link rel="apple-touch-icon" sizes="180x180" href="../icon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../icon/favicon-16x16.png">
		<link rel="manifest" href="../icon/manifest.json">
		<link rel="mask-icon" href="../icon/safari-pinned-tab.svg" color="#61cae9">
		<link rel="shortcut icon" href="../icon/favicon.ico">
		<meta name="msapplication-config" content="../icon/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
	</head>
	<body id="blog" style="padding:0">
		<div class="head">
			<?php
				include_once("../html/nav.php");
			?>
			<div class="title-section">
				<h1>
					Blog Posts
				</h1>
				<p>
					By me
				</p>
			</div>
		</div>
		<div class="body">
			<div class="section blog">
				<a href="fullspeed.io-premium-car-videography" class="card">
					<div class="image-wrap">
						<img src="fullspeed.io-premium-car-videography/audi1.png" alt="Fullspeed.io" />
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
						<img src="how-i-learned-to-program/teamblock.png" alt="Team Block" />
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
						<img src="citethis.net/citethis.png" alt="CiteThis" />
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
						<img src="designing-a-password-generator/a-password-generator.png" alt="Password Generator" />
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
						<img src="running-a-clothing-brand-lessons-learned/mom-card.jpg" alt="MOM Clothing 2016" />
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