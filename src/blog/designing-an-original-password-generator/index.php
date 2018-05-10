<?php
	$articleTitle = "Designing an Original Password Generator";
	$articleUrl = "designing-an-original-password-generator";
	include '../blogfiles/header.php';
?>
<article id="article">
	<header class="article-heading">
		<h1 class="article-title">
			Designing an Original Password Generator
		</h1>
		<p class="article-info">
			By Kristian Windsor on May 8th, 2018
		</p>
	</header>
	<img src="a-password-generator.png" class="image" />
	<section class="article-body">
		<p>
			You can view this finished project live at <a href="http://apassgen.site/" target="_blank">apassgen.site</a> or <a href="https://www.apasswordgenerator.website/" target="_blank">apasswordgenerator.website</a>.
		</p>
		<p class="bold-text">
			Getting the idea
		</p>
		<p>
			I wanted to create a project that would test my javascript skills and that would be fun to work on. Creating a password generator is a common beginner’s programming project, but this challenged me to create a password generator that was different and better than all others.
		</p>
		<p>
			I was inspired by this XKCD comic:
			<img src="https://imgs.xkcd.com/comics/password_strength.png" />
		</p>
		<p>
			We learn from this that full-sentence-based passwords are easier to remember. Here’s a password generator that does just that: <a href="https://eth0za.github.io/password-generator" target="_blank">eth0za.github.io/password-generator</a>
		</p>
		<p>
			So to start off, we have some sentence-based passwords:
		</p>
		<ul>
			<li>
				correct-horse-battery-staple
			</li>
			<li>
				Pincushion-science-without-civilization
			</li>
		</ul>
		<p>
			However, most password generators I came across generated a random string of characters.
			Some consisted of only letters and numbers, for example <a href="https://www.random.org/passwords/" target="_blank">random.org</a> generated these:
		</p>
		<ul>
			<li>
				MB3VsXU3
			</li>
			<li>
				YLSMYYDN
			</li>
		</ul>
		<p>
			And some websites additionally used symbols, non-alphabetic, non-numeric characters. For example, <a href="https://www.random.org/passwords/" target="_blank">passwordsgenerator.net</a> generated these:
		</p>
		<ul>
			<li>
				-n&7y&9$]85K{t9c
			</li>
			<li>
				~Zau;U/]Q5\&L4H6
			</li>
		</ul>
		<p>
			I also came across a few pronounceable password generators. These don't use actual words, but are constructed of pronouncable syllables. For example, <a href="https://lastpass.com/generatepassword.php" target="_blank">lastpass.com</a> generated these:
		</p>
		<ul>
			<li>
				QuInDurafToN
			</li>
			<li>
				quiShAnisEpo
			</li>
		</ul>
		<p>
			Now, if I align all these passwords, you might see a trend:
		</p>
		<ul>
			<li>
				Correct-horse-battery-staple
			</li>
			<li>
				Pincushion-science-without-civilization
			</li>
			<li>
				QuInDurafToN
			</li>
			<li>
				quiShAnisEpo
			</li>
			<li>
				MB3VsXU3
			</li>
			<li>
				YLSMYYDN
			</li>
			<li>
				-n&7y&9$]85K{t9c
			</li>
			<li>
				~Zau;U/]Q5\&L4H6
			</li>
		</ul>
		<p>
			I would describe the trend as a transition from a complete sentence to a random combination of characters. This is how I designed my password generator to function. I created a slider (HTML input range) that deteriorates sentence-based passwords, allowing the user to choose any "recipe" for the password with a single UI control.
		</p>
		<p class="bold-text">
			How the script functions
		</p>
		<p>
			The script functions by creating a sentence in the format "verb-adjective-adjective-adjective-noun-number", and is broken down into 11 "steps"; in each of which some characters are replaced. Each character is replaced twice from steps 0-10, chosen at random. So each of the 32 character positions in a 32-character password will hold 3 different characters depending on which step you are on (which is determined by the user-controlled slider). Here is a brief description of the passwords it generates:
		</p>
		<ul>
			<li>
				Step 10: Full sentence.
			</li>
			<li>
				Steps 7-9: Pronouncable sentence.
			</li>
			<li>
				Steps 4-6: Random letters and numbers.
			</li>
			<li>
				Steps 0-3: Random symbols, letters, and numbers.
			</li>
		</ul>
		<p>
			Here is an example of a generated password:
		</p>
		<ul>
			<li>
				10. provide-used-known-tough-potato9
			</li>
			<li>
				9. provide-used-known-toogh-potato9
			</li>
			<li>
				8. provade-esed-known-toogh-putatu9
			</li>
			<li>
				7. gf0wape-esed-kmowm-m0onb-futatu9
			</li>
			<li>
				6. gf0wapaceqidbvmowmmm0onb-futavu9
			</li>
			<li>
				5. gf0wapaceqiUbvmUKmmm0onbDfuLYvuM
			</li>
			<li>
				4. af0wapaweqiUbv9UKmmm9bqbDfuLY3uM
			</li>
			<li>
				3. a@0wap1weviUbu9UKmmm9bqdD!uLY3uM
			</li>
			<li>
				2. a@0wap1wdvijbu9UKmym9bqdn!u@w3uM
			</li>
			<li>
				1. a@9w/c1wdv!jbu9UK}ym9bqdn!u@w39b
			</li>
			<li>
				0. a@9z/c1wdv!j\u97b}yb9bqdn!/@w39b
			</li>
		</ul>
		<p>
			This is the functionality of the word structure slider. The other slider determines the length, which has some requirements:
			<ul>
				<li>
					Pronounceable passwords should be kept pronounceable.
				</li>
				<li>
					At least one uppercase letter.
				</li>
				<li>
					At least one number.
				</li>
			</ul>
		</p>
		<p>
			To keep pronounceable passwords pronounceable, the script replaces the cut-off word with a set of numbers:
		</p>
		<ul>
			<li>
				32 chars: Provide-used-known-tough-potato9
			</li>
			<li>
				31 chars: Provide-used-known-tough-901410
			</li>
			<li>
				25 chars: Provide-used-known-tough8
			</li>
			<li>
				24 chars: Provide-used-known-10298
			</li>
			<li>
				19 chars: Provide-used-known2
			</li>
			<li>
				18 chars: Provide-used-52032
			</li>
			<li>
				13 chars: Provide-used0
			</li>
			<li>
				12 chars: Provide-2530
			</li>
			<li>
				8 chars: Provide3
			</li>
			<li>
				3 chars: Pr9
			</li>
		</ul>
		<p>
			But of course, it only generates full-sentence, 32-character passwords if the length is set to 32 characters. The script will generate a sentence that fits the length inputted by the user:
		</p>
		<ul>
			<li>
				32 chars: Provide-used-known-tough-potato9
			</li>
			<li>
				28 chars: Propose-slow-annual-content1
			</li>
			<li>
				18 chars: Throw-wild-scared0
			</li>
			<li>
				12 chars: Buy-anxious5
			</li>
			<li>
				8 chars: Approve3
			</li>
			<li>
				4 chars: Eat1
			</li>
		</ul>
		<p class="bold-text">
			Designing the UI
		</p>
		<p>
			I decided to change the order of elements between mobile and desktop for the best usability across platforms.
		</p>
		<p>
			On a laptop or desktop, the placement of elements is determined by the logical flow of events:
		</p>
		<ul>
			<li>
				1. Adjust the sliders.
			</li>
			<li>
				2. Click generate.
			</li>
			<li>
				3. Review or copy the password.
			</li>
		</ul>
		<img src="desktop-ux.png" />
		<p>
			However, accessbility is more important on mobile devices. Here is an image of thumb-zone mapping:
			<img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/496f7bc0-4c6c-4159-b731-ec3adcf91105/thumb-zone-mapping-opt.png" />
			(If you are interested in learning more about mobile UX, this image is from <a href="https://www.smashingmagazine.com/2016/09/the-thumb-zone-designing-for-mobile-users/" target="_blank">The Thumb Zone: Designing For Mobile Users</a>.)
		</p>
		<p>
			The user will likely click the generate button multiple times, but will only select and copy the password one time. To account for this, the generate button and slider controls are placed below the passwords. 
			<span class="image-wrap">
				<img src="mobile-ux.png" class="small" />
			</span>
		</p>
		<p class="bold-text">
			Conclusion
		</p>
		<p>
			My password generator is the first ever to use 2 sliders as the only UI controls, and the first ever to create both sentence-based passwords and random-character-based passwords.
		</p>
		<p>
			You can view all the code for this project on Github: <a href="https://github.com/Windso/apasswordgenerator.website" target="_blank">github.com/Windso/apasswordgenerator.website</a>
		</p>
		<p>
			Thanks for reading!
		</p>
	</section>
</article>
<?php
	include '../blogfiles/footer.php';
?>