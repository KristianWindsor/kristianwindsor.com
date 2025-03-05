<?php
	$articleTitle = "How I Got 50,000 Clicks for Free Using Reddit and ChatGPT";
	$articleDescription = "That's $50,000 worth of clicks, for free.";
	$articleUrl = "how-i-got-50k-clicks-for-free-using-reddit-and-chatgpt";
	$imageUrl = "reddit-college.png";
	$datePublished = "2025-03-02";
	include '../blogfiles/header.php';
?>
<article id="article">
	<header class="article-heading">
		<h1 class="article-title">
			<?php echo $articleTitle ?>
		</h1>
		<p class="article-info">
			By Kristian Windsor on March 2nd, 2025
		</p>
	</header>
	<section class="article-body">
		<div class="paragraph">
			<img src="<?php echo $imageUrl ?>" >
			<p>
				Rather than spending money on ads, I built a bot to automatically promote my website on Reddit using ChatGPT-generated responses. Over the past few years, this has brought in more than 50,000 visitors.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				First, Some Context
			</h2>
			<p>
				I got the idea to build my website, <a href="https://citethis.net/" target="_blank">CiteThis</a>, from Reddit. Every student needs to cite their sources, but most citation generators were frustrating to use and complaints about them were everywhere on Reddit – see for yourself in <a href="https://old.reddit.com/r/assholedesign/search?q=easybib&restrict_sr=on" target="_blank">/r/assholedesign</a>, a subreddit that showcases designs with intentionally terrible user experiences.
			</p>
			<p>
				Seeing a clear demand for a better alternative, I realized I could easily promote my site on Reddit by sharing it whenever someone complained about existing citation generators.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Stage One: Posting Manually
			</h2>
			<p>
				Originally, my bot wasn’t posting on Reddit – it was just a keyword alerting tool. It would scan for terms like "EasyBib" and "citation generator" in comments and send me a Slack notification with a link whenever it found a match. I’d then review the thread and, if relevant, casually drop a link to CiteThis.
			</p>
			<p>
				This approach worked surprisingly well. I had Slack and Reddit on my phone so I could quickly check notifications and post from anywhere, and this only took a few minutes each day.
			</p>
			<img src="slack-redditbot.png" style="width: 50%; margin-left: 25%" >
		</div>
		<div class="paragraph">
			<h2>
				Stage Two: Auto-Reply with Static Responses
			</h2>
			<p>
				Once I figured out which keywords were actually useful and which ones weren’t, I refined my list. Too many broad terms and my Slack would blow up with irrelevant Reddit threads; too specific and I'd miss chances to jump in. I was aiming for that sweet spot where I'd only get notified when there was something worth saying (or at least wouldn't get downvoted to oblivion).
			</p>
			<p>
				Next, I took things to the next level by setting up automatic replies from a list of pre-written responses. When my script spotted a keyword match, it would post a comment, and I'd get a Slack message so I could verify that it was actually relevant to the conversation.
			</p>
			<p>
				Most of these comments were actually super simple – someone would mention EasyBib.com and my bot would reply with nothing more than a link to CiteThis. And it worked beautifully. People saw the link, clicked it, and even upvoted my comments – no fancy sales pitch needed.
			</p>
			<img src="reddit-workonline.png" >
		</div>
		<div class="paragraph">
			<h2>
				Stage Three: Auto-Reply with ChatGPT
			</h2>
			<p>
				I was curious about OpenAI's API and wanted to play around with it, and my Reddit bot was the perfect candidate. It felt like a natural evolution to upgrade from static, pre-written responses to dynamic ones that could adapt to different contexts and conversations.
			</p>
			<p>
				Setting up the OpenAI API was surprisingly straightforward – just a few lines of code to authenticate and send prompts. Even better was the cost – mere pennies per response, which is ideal for a passion project that doesn't generate any revenue.
			</p>
			<p>
				However, I will admit that fine-tuning the responses has been quite a challenge. The AI-generated comments often come across as overzealous, sound like cheesy infomercials, and just feel out of place among the other comments. Reddit users can smell inauthenticity from a mile away, and some of these responses definitely set off some alarms.
			</p>
			<p>
				Despite the challenge, I'm impressed with the API and plan on continuing to tweak the prompts until the responses consistently sound natural – like a real person who wants to help rather than an eager sales pitch.
			</p>
			<img src="reddit-curatedtumblr.png" >
		</div>
	</section>
</article>
<?php
	include 'chart.php';
	include '../blogfiles/footer.php';
?>
