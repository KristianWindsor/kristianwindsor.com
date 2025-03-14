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
			<a href="https://old.reddit.com/r/college/comments/olileh/its_honestly_disgusting_what_happened_to_easybib/h5fbr53/?context=3" target="_blank" class="image-link">
				<img src="<?php echo $imageUrl ?>" >
			</a>
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
			<img src="slack-redditbot.png" class="half" >
		</div>
		<div class="paragraph">
			<h2>
				Stage Two: Auto-Reply with Static Responses
			</h2>
			<p>
				Once I figured out which keywords were actually useful and which ones weren’t, I refined my list. Too many broad terms and my Slack would blow up with irrelevant Reddit threads; too specific and I'd miss chances to jump in. I was aiming for that sweet spot where I'd only get notified when there was something worth contributing (or at least wouldn't get downvoted to oblivion).
			</p>
			<p>
				Next, I took things to the next level by allowing my bot to post autonomously from a list of pre-written responses. When my script spotted a keyword match, it would post a comment, and I'd get a Slack message so I could verify that it was actually relevant to the conversation.
			</p>
			<p>
				Most of these comments were actually super simple – someone would mention EasyBib.com and my bot would reply with nothing more than a link to CiteThis. And it worked beautifully. People saw the link, clicked it, and even upvoted my comments – no fancy sales pitch needed.
			</p>
			<a href="https://old.reddit.com/r/WorkOnline/comments/ebe78m/can_someone_please_do_my_works_cited_list_i_have/fb4uqqr/?context=3" target="_blank" class="image-link">
				<img src="reddit-workonline.png" >
			</a>
		</div>
		<div class="paragraph">
			<h2>
				Stage Three: Auto-Reply with ChatGPT
			</h2>
			<p>
				I was curious about OpenAI's API and wanted to play around with it, and my Reddit bot was the perfect candidate. It felt like a natural evolution to upgrade from static, pre-written responses to dynamic ones that could adapt to different contexts and conversations.
			</p>
			<p>
				However, I will admit that I'm still figuring this out... I implemented this recently and haven't had time to fine-tune the prompts yet. The AI-generated comments often come across as overzealous, sound like cheesy infomercials, or just feel out of place among the other comments. Reddit users can smell inauthenticity from a mile away, and some of these responses definitely set off some alarms.
			</p>
			<p>
				But so far, I'm impressed with the API and plan on continuing to tweak the prompts until the responses consistently sound natural.
			</p>
			<a href="https://old.reddit.com/r/CuratedTumblr/comments/1hzrpnh/the_people_who_would_tell_me_not_to_use_wikipedia/m6taqhu/?context=3" target="_blank" class="image-link">
				<img src="reddit-curatedtumblr.png" >
			</a>
		</div>
		<div class="paragraph">
			<h2>
				The Results: Over 50,000 Clicks
			</h2>
			<p>
				In 2024 alone, Reddit drove 20,978 sessions to CiteThis.net, introducing 9,425 new users to the site. The other 30,000+ sessions accumulated between 2020 and 2023, with consistent YoY growth ranging from 42% to 49%.
			</p>
			<p>
				I'm thrilled with these results – for a niche tool with zero marketing budget, these numbers show incredible organic growth.
			</p>
			<canvas id="redditbotChart"></canvas>
			<p>
				You might notice a gap in the red line on the chart. Unfortunately, this data is permanently lost – it was stored in the old Google Analytics UA, which Google has since purged completely. The red line picks up in October 2021, which is right after I migrated to GA4.
			</p>
			<p>
				You'll also notice that the blue line flattens to zero for over a year. That line tracks my monthly Reddit comments, and yes, the flatline is accurate. My bot went offline during that period after I started a new job – most likely due to some technical issue that I prioritized below my new responsibilities, so I temporarily shut it down.
			</p>
			<p>
				During this zero-comment period, it's interesting to see traffic continuing to flow in. I don't have a solid explanation for this behavior, other than users discovering my links while browsing through older Reddit threads. I suppose it shows that content on Reddit has a surprisingly long lifespan.
			</p>
			<p>
				Lastly, you can see the upward surge in the red line toward the end. This could be the result of a compound effect after years of posting comments, or because <a href="https://boomcycle.com/blog/reddit-in-google-search-results-2024/" target="_blank">Reddit content began dominating Google Search results in 2024</a>, giving my older comments much more visibility.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				How it Works Under the Hood
			</h2>
			<p>
				I built this bot with Python, using libraries like <a href="https://praw.readthedocs.io/en/stable/" target="_blank">PRAW</a> and <a href="https://platform.openai.com/docs/quickstart?language=python" target="_blank">OpenAI</a>. It’s actually relatively simple – just a single 250-line python script!
			</p>
			<p>
				Here's roughly how the logic works:
			</p>
			<ol>
				<li>Stream all comments</li>
				<li>Check if each comment contains a matching keyword</li>
				<li>Decide which comment in the thread is best to respond to</li>
				<li>Generate a response with ChatGPT, providing the entire context</li>
				<li>Post the response</li>
				<li>Send a Slack notification with a link to the comment</li>
			</ol>
			<p>
				The script is packaged into a Docker container and deployed in my Kubernetes cluster where all my projects are hosted – including this website you're on now.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Why My Approach Works
			</h2>
			<p>
				Unlike generic ads that interrupt users, my bot steps in when people actually want help. When someone complains about EasyBib or Citation Machine on Reddit, they're essentially raising their hand and saying "I need a better solution." My bot simply introduces them to one at exactly the right moment. This perfect timing creates relevance that generic advertising can't match.
			</p>
			<p>
				The responses are meant to feel natural, not promotional. When I was posting manually, I tailored my approach to each subreddit – posing as a professor in /r/professors or a student in /r/college. This authenticity worked far better than blatant ads. People don't want a sales pitch – they want genuine advice from someone who understands their challenges.
			</p>
			<a href="https://old.reddit.com/r/Professors/comments/l90lt1/frustrating_emails/glhtyc2/" target="_blank" class="image-link">
				<img src="reddit-professors.png" >
			</a>
			<p>
				The bot also benefits from using my long-established Reddit account with plenty of karma. I'm sure that a fresh account spamming AI-generated comments would be automatically filtered out or just outright banned. But by using my main, high-karma account, my bot blended in and avoided detection.
			</p>
			<p>
				There's a funny story behind my account having so much karma – <a href="https://old.reddit.com/r/wallstreetbets/comments/l7feld/its_power_to_the_traders_now/" target="_blank">the 10th most upvoted post of all time in r/wallstreetbets</a> was actually posted through my account. During the historic <a href="https://www.businessinsider.com/wallstreetbets-gamestop-nathaniel-popper-book-excerpt-2024-6" target="_blank">GameStop short-squeeze frenzy of 2021</a>, my friend <a href="https://www.linkedin.com/in/patrickmoranmoran/" target="_blank">Patrick</a> created a hilarious video about the situation, but discovered he couldn't post it himself because the subreddit had temporarily restricted submissions to only high-reputation accounts. He ended up posting with my account, and the post absolutely exploded – gathering nearly a quarter million upvotes and likely reaching anywhere from 5 to 20 million viewers.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Could This Work for Your Business?
			</h2>
			<p>
				Absolutely – as long as relevant discussions are taking place somewhere on the platform. For this to work, people need to be naturally discussing a problem that your product solves, giving you an opportunity to jump in.
			</p>
			<p>
				Here are a few examples:
			</p>
			<ul>
				<li>If you’ve built a time management app, you could find opportunities to promote it in subreddits like r/ADHD by looking for discussions about "time blindness" or a "missed appointment".</li>
				<li>If you're a personal injury lawyer in the Bay Area, you could find potential clients by monitoring r/legaladvice for posts mentioning "car accident" along with a local city name like "San Francisco".</li>
				<li>If your company developed a cloud cost optimization tool, you could gain visibility in subreddits like r/devops and r/aws by mentioning it in posts containing phrases like "reducing cloud costs" or "huge bill from AWS".</li>
			</ul>
			<p>
				That said, not every business can – or should – try this approach. It worked well for my citation tool because Reddit has a constant stream of students seeking help with citations. But for a local construction company, there might only be a handful of relevant conversations each month, which wouldn't justify the effort. Ultimately, it depends on whether your target audience is active on Reddit and how often you’d have a chance to introduce your product or service.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Business Idea: AI Agents for Social Media
			</h2>
			<p>
				While this is just a side project, I could see it being scaled into a business – offering custom AI agents that help brands promote their products on platforms like Reddit, Instagram, X, and YouTube. Instead of traditional ads, these agents would jump into conversations only at perfect moments – when someone actually needs what you're offering or is annoyed with competitors.
			</p>
			<p>
				With all the AI buzz these days, a company selling "Social Media AI Agents" would probably do well just by riding on the industry excitement. A quick Google search even turned up <a href="https://gizmodo.com/oh-no-this-startup-is-using-ai-agents-to-flood-reddit-with-marketing-slop-2000548827" target="_blank">a startup selling "an AI marketer that works 24/7"</a> – proof that there's real demand for this kind of approach.
			</p>
		</div>
		<div class="paragraph">
			<h2>
				Final Thoughts
			</h2>
			<p>
				When I first started this project, I wasn't aiming to create an AI agent for Reddit or build a fancy traffic funnel. I was simply exploring the Reddit API out of curiosity, playing around with code to see what I could build. But what started as basic tinkering eventually evolved into something cool enough to warrant its own blog post.
			</p>
			<p>
				Thanks for reading and never stop tinkering!
			</p>
		</div>
	</section>
</article>
<?php
	include 'chart.php';
	include '../blogfiles/footer.php';
?>
