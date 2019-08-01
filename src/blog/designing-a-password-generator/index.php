<?php
	$articleTitle = "Designing a Password Generator";
	$articleDescription = "A super minimal password generator made with JavaScript.";
	$articleUrl = "designing-a-password-generator";
	$imageUrl = "a-password-generator.png";
	$datePublished = "2018-05-08";
	include '../blogfiles/header.php';
?>
<article id="article">
	<header class="article-heading">
		<h1 class="article-title">
			Designing a Password Generator
		</h1>
		<p class="article-info">
			By Kristian Windsor on May 8th, 2018
		</p>
	</header>
	<img src="<?php echo $imageUrl; ?>" class="image" alt="Password Generator" />
	<section class="article-body">
		<p>
			You can view this finished project live at <a href="https://passgen.site/" target="_blank">passgen.site</a>.
		</p>
		<div class="paragraph">
			<h2>
				Getting the idea
			</h2>
			<p>
				I wanted to create a project that would be fun to work on and put my javascript skills to the test. Creating a password generator is a common beginner’s programming project, but this challenged me to create a password generator that was different and better than all others.
			</p>
			<p>
				I was inspired by this XKCD comic:
				<img src="https://imgs.xkcd.com/comics/password_strength.png" alt="XKCD Password Generator Comic" />
			</p>
			<p>
				From the comic, I got that sentence-based passwords are easier to remember and are more secure. I came across <a href="https://eth0za.github.io/password-generator" target="_blank">this password generator</a> on Github that does just that. It generated these two sentence-based passwords:
			</p>
			<ul>
				<li>
					Wherever-office-pocket-committee
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
					Wherever-office-pocket-committee
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
			<img src="a-password-generator-examples.png" alt="Password Generator screenshots" />
			<p>
				My website is capable of reproducing all of the different "recipes" of passwords: Sentence-based passwords, pronouncable passwords, alpha-numeric passwords, and random character passwords.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				How the script functions
			</h2>
			<p>
				The script functions by creating a sentence in the format "verb-adjective-adjective-adjective-noun-number", and is broken down into 11 "steps"; in each of which some characters are replaced. Each character is replaced twice from steps 0-10, chosen at random. 
			</p>
			<p>
				For example, in a 32-character password, each of the 32 character positions will hold 3 different characters depending on which step you are on (which is determined by the user-controlled slider). Here is a brief description of the passwords it generates:
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
					Step 10: Accuse-visual-dirty-huge-dinner0
				</li>
				<li>
					Step 9: Accosa-visoal-dirty-huga-dinnar0
				</li>
				<li>
					Step 8: Ackoza-visoal-derty-huga-denmar0
				</li>
				<li>
					Step 7: Askoza-vivoil-dergy-dola-denmar0
				</li>
				<li>
					Step 6: Yskoza5nivoil8deggubdolaydepmar0
				</li>
				<li>
					Step 5: Yskoza5nEvoiA8EeggubdolayKepmaL6
				</li>
				<li>
					Step 4: YskozafjEvo9j83egwubdolayxepmaL6
				</li>
				<li>
					Step 3: YskozafjElo9j83etwubdola2xe84aLw
				</li>
				<li>
					Step 2: Vs0od$fj8lo9j83etwubdola2xo84aLw
				</li>
				<li>
					Step 1: V&0{d$fj8li9j83etwubd@na2xo84/{w
				</li>
				<li>
					Step 0: V&0{d$fj8li9j-3,tw;%e@nk2xo84/{w
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
					32 chars: Accuse-visual-dirty-huge-dinner0
				</li>
				<li>
					31 chars: Accuse-visual-dirty-huge-012234
				</li>
				<li>
					30 chars: Accuse-visual-dirty-huge-01223
				</li>
				<li>
					29 chars: Accuse-visual-dirty-huge-0122
				</li>
				<li>
					28 chars: Accuse-visual-dirty-huge-012
				</li>
				<li>
					27 chars: Accuse-visual-dirty-huge-01
				</li>
				<li>
					26 chars: Accuse-visual-dirty-huge-0
				</li>
				<li>
					25 chars: Accuse-visual-dirty-huge3
				</li>
				<li>
					24 chars: Accuse-visual-dirty-8293
				</li>
				<li>
					23 chars: Accuse-visual-dirty-829
				</li>
				<li>
					22 chars: Accuse-visual-dirty-82
				</li>
				<li>
					21 chars: Accuse-visual-dirty-8
				</li>
				<li>
					20 chars: Accuse-visual-dirty7
				</li>
				<li>
					19 chars: Accuse-visual-01417
				</li>
				<li>
					18 chars: Accuse-visual-0141
				</li>
				<li>
					17 chars: Accuse-visual-014
				</li>
				<li>
					16 chars: Accuse-visual-01
				</li>
				<li>
					15 chars: Accuse-visual-0
				</li>
				<li>
					14 chars: Accuse-visual1
				</li>
				<li>
					13 chars: Accuse-415241
				</li>
				<li>
					12 chars: Accuse-41524
				</li>
				<li>
					11 chars: Accuse-4152
				</li>
				<li>
					10 chars: Accuse-415
				</li>
				<li>
					09 chars: Accuse-41
				</li>
				<li>
					08 chars: Accuse-4
				</li>
				<li>
					07 chars: Accuse3
				</li>
				<li>
					06 chars: Accus0
				</li>
				<li>
					05 chars: Accu0
				</li>
				<li>
					04 chars: Acc0
				</li>
				<li>
					03 chars: Ac0
				</li>
			</ul>
		</div>
		<div class="paragraph">
			<h2>
				User Experience (UX)
			</h2>
			<p>
				I decided to change the position of elements between mobile and desktop devices for the best user experience across platforms.
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
			<p>
				The three elements are positioned following the traditional direction of reading: left-to-right and top-to-bottom.
			</p>
			<img src="desktop-ux.png" alt="Password Generator User Experience Desktop Flow" />
			<p>
				However, accessbility is a higher priority on mobile devices. Here is an image of thumb-zone mapping that shows the accessibility of content on mobile devices:
				<img src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/496f7bc0-4c6c-4159-b731-ec3adcf91105/thumb-zone-mapping-opt.png" alt="Thumb Zone User Experience" />
				<span class="caption">
					If you are interested in learning more about mobile UX, this image is from <a href="https://www.smashingmagazine.com/2016/09/the-thumb-zone-designing-for-mobile-users/" target="_blank">The Thumb Zone: Designing For Mobile Users</a>.
				</span>
			</p>
			<p>
				In order to provide the best user experience, high-frequency-interaction elements should be the most accessible, while low-frequency-interaction elements should be the least accessible. 
			</p>
			<p>
				On mobile, the placement of elements is determined by the frequency of the element being used (anchored to the bottom):
			</p>
			<ul>
				<li>
					1. Generate button
				</li>
				<li>
					2. Slider controls
				</li>
				<li>
					3. Passwords
				</li>
			</ul>
			<span class="image-wrap">
				<img src="mobile-ux.png" class="small" alt="Password Generator User Experience Mobile Flow" />
			</span>
			<p>
				In this image, all elements are within the green-natural region, so the user doesn't have to scroll or extend their thumb to use the app. 
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Conclusion
			</h2>
			<p>
				My password generator has all of the functionality of other password generators but provides a better user experience. 
			</p>
			<p>
				It is the first password generator to use 2 sliders as the only UI controls, and the first to create both sentence-based passwords and random-character-based passwords.
			</p>
			<p>
				Working on this project got me thinking outside the box as I reimagined the way users interact with the app. I had fun while gaining valuable experience with javascript and UX.
			</p>
			<p>
				You can view all the code for this project on Github: <a href="https://github.com/KristianWindsor/passgen.site" target="_blank">github.com/KristianWindsor/passgen.site</a>
			</p>
			<p>
				Thanks for reading!
			</p>
		</div>
	</section>
</article>
<?php
	include '../blogfiles/footer.php';
?>