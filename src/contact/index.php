<?php
	$title = "Contact | Kristian Windsor";
	$description = "Get in touch with Kristian Windsor.";
	$urlPath = "contact/"
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
					<div class="card">
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
									<a href="mailto:k@wnd.sr" target="_blank" class="icon-link">
										<p><i class="icon">&#xe802;</i></p>
										<p>k@wnd.sr</p>
									</a>
									<a href="tel:14086834007" class="icon-link">
										<p><i class="icon">&#xe803;</i></p>
										<p>(408) 683-4007</p>
									</a>
									<a href="https://www.google.com/maps/place/San+Francisco,+CA/" target="_blank" class="icon-link">
										<p><i class="icon">&#xe801;</i></p>
										<p>San Francisco, CA</p>
									</a>
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