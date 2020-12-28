<?php
	$title = "Contact | Kristian Windsor";
	$description = "Get in touch with Kristian Windsor.";
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
			<div class="hi">
				<h1>
					Contact Me
				</h1>
				<p>
					Got an idea? Let's get in touch.
				</p>
			</div>
		</div>
		<div class="body">
			<div class="section contact">
				<div>
					<div class="project">
						<div class="left big-mobile">
							<form class="contact">
								<span id="name-label" class="contact-label">Name</span><br>
								<input type="input" id="name" class="input textbox" placeholder="Bruce Wayne" />

								<span id="email-label" class="contact-label">Email</span><br>
								<input type="input" id="email" class="input textbox" placeholder="batman321@hotmail.com" />

								<span id="message-label" class="contact-label">Message</span><br>
								<textarea id="message" rows="8" class="input textbox" placeholder="You look great today."></textarea>

								<input type="button" value="Send" id="send" class="input button"/>

								<span id="no-name-no-email">You didn't put your name or your email address. Send anyways?</span>
								<span id="no-name">You didn't put your name. Send anyways?</span>
								<span id="no-email">You didn't put an email address. Send anyways?</span>
								<span id="bad-email">Your email address doesn't look right. Send anyways?</span>
								<input type="button" value="Cancel" id="send-no" class="input button yesno"/>
								<input type="button" value="Send" id="send-yes" class="input button yesno"/>
							</form>
						</div>
						<div class="right">
							<div class="contact mobile-padding container-container">
								<div class="container">
									<p>
										<a class="contact-link gap" href="mailto:kristian@kristianwindsor.com">
											<i class="icon icon-mail">&#xe802;</i>
											kristian@kristianwindsor.com
										</a>
									</p>
									<p>
										<a class="contact-link gap" href="tel:14086834007">
											<i class="icon icon-phone">&#xe803;</i>
											(408) 683-4007
										</a>
									</p>
									<p>
										<a class="contact-link" href="https://www.google.com/maps/place/San+Jose,+CA/" target="_blank">
											<i class="icon icon-location">&#xe801;</i>
											San Jose, CA
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content" id="submitted">
					<p>
						<span class="big">Thanks<span id="firstName"></span>! </span><span class="green">Your message has been submitted.</span>
					</p>
					<p>
						I'll get back to you as soon as I can.
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