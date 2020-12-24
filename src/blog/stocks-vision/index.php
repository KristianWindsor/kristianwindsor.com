<?php
	$articleTitle = "Stocks Vision";
	$articleDescription = "Once upon a time...";
	$articleUrl = "stocks-vision";
	$imageUrl = "teamblock.png";
	$datePublished = "2019-05-18";
	include '../blogfiles/header.php';
?>
<article id="article">
	<header class="article-heading">
		<h1 class="article-title">
			<?php echo $articleTitle ?>
		</h1>
		<p class="article-info">
			By Kristian Windsor on May 18th, 2019
		</p>
	</header>
	<section class="article-body">
		<div class="paragraph">
			<p>
				Stocks Vision is your friend when it comes to stock trading.
			</p>
			<p>
				Stocks Vision is a tool for scraping, analyzing, and visualizing data related to stock trading.
			</p>
			<p>
				The project is open source on <a href="https://github.com/KristianWindsor/stocks.vision" target="_blank">GitHub</a> and is currently live at <a href="https://stocks.vision/" target="_blank">stocks.vision</a>. 
			</p>
		</div>
		<div class="paragraph">
			<h2>
				The Idea
			</h2>
			<p>
				Stocks Vision is a tool for calculating and visualizing stock data from multiple sources, capable of completely automating your portfolio.
			</p>
			<p>
				This is the gist of how Stocks Vision works:
			</p>
			<ul>
				<li>
					Collect data from multiple sources and store it.
				</li>
				<li>
					Predict stock prices by analyzing the data.
				</li>
				<li>
					Visualize the predictions.
				</li>
				<li>
					Run simulations against past stock data to see how results would have been.
				</li>
				<li>
					Try different combinations of parameter configurations to see what would have worked best.
				</li>
			</ul>
		</div>
		<div class="paragraph">
			<h2>
			<!-- Part 1. -->Reddit Sentiment
</h2>
			<p>
			Reddit /r/stocks has a quarterly portfolio thread that is stickied and has about 21 new portfolios every week.
			</p>
<img src="reddit-stocks.png" />
			<p>
			I wrote a python script that crawled each comment and deciphers the exact positions. Using the comment’s date and karma score, the script can produce the average portfolio on any given day since 2017.
			</p>
<img src="average-portfolio.png" />
			<!-- <p>
			At one point in time, the moderators of the subreddit removed the stickied thread which resulted in less data, so I asked them to re-sticky it and they did.
			</p>
			<p>
			/r/wallstreetbets also has some interesting data, with the subreddit growing by 450% in the past year and 20,000+ daily comments. A python script could analyze each comment and produce a measurement for the general sentiment of a certain stock or the whole market.
			</p>
<img src="wallstreetbets-growth.png" /> -->
		</div>
		<div class="paragraph">
			<h2>
				<!-- Part 2. -->Technical analysis
			</h2>
			<p>
			My friend is a successful stock trader and I wanted to mimic his strategy. He does swing trading based on technical analysis.
			</p>
			<p>
			His top 3 indicators are these:
			</p>
			<ul>
				<li>
				MACD (moving average convergence divergence) 
				</li>
				<li>
					Momentum of volume
				</li>
				<li>
					Support/resistance (standard deviation)
				</li>
			</ul>
			<p>
				<b>MACD</b> (moving average convergence divergence) is when 2 moving average lines intersect. For example, the 50-day moving average line intersecting and passing above the 200-day moving average line could indicate an uptrend. <a href="https://www.investopedia.com/trading/macd/" target="_blank">Read more.</a>
			</p>
			<!-- <p>
			As you can see from the chart below, many traders will watch for a short-term moving average (blue line) to cross above a longer-term moving average (red line) and use this to signal increasing upward momentum
			</p> -->
<img src="moving-average.png" />
			<p><b>Momentum of volume</b> refers to the momentum of the number of shares being traded. For example, if the total number of shares that are being traded each day starts to decline after a 2-week rally, it could indicate a downtrend. <a href="https://www.investopedia.com/ask/answers/041015/why-trading-volume-important-investors.asp" target="_blank">Read more.</a>
			</p>
<img src="volume.png" />
			<p>Support/resistance is <a href="" target="_blank">Read more.</a>
			</p>
<img src="support-resistance.gif" />
		</div>
		<div class="paragraph">
			<!-- <h2>
				Two Sources and Strategies Combined
			</h2> -->
			<h2>
				Combining 
			</h2>
			<!-- <p>
			Stocks vision is a tool	 for calculating and visualizing stock data from an infinite amount of sources, capable of completing automating your portfolio.
			</p> -->
			<!-- <p>
				These technical indicators are easily computable – they're just numbers. And the Reddit comments can be reduced to numbers.
</p>
<p>
	Stocks Vision is a <i>platform</i> for collecting and analying data, and turning that data into actionable information.
</p> -->
		</div>
		<div class="paragraph">
			<h2>
			Indicators
</h2>
			<p>
			There a construct called an indicator. An indicator is a function that looks at any source of data and returns a value that represents a confidence level value. Where
			</p>
			<img src="indicators.png" />
			<p>

			So the average sentiment in /r/stocks could be reduced to a simple decimal number.
			</p>
			<p>
			The average sentiment in /r/wallstreetbets could be reduced to a single number – for any given stock.
			</p>
			<p>
			The moving average – a single number.
			</p>
			<p>
			The momentum of volume – a single number.
			</p>
			<p>
			The support/resistance – a single number.
			</p>
			<p>
				An indicator has the following characteristics
				<ul>
					<li>
						Is a python script that interprets raw data into usable numbers
					</li>
					<li>
						Looks at one or more sources of data
					</li>
					<li>
						Returns a confidence level value, between 100% and -100%
					</li>
				</ul>
			</p>
			<p>
			Average these numbers and you have a position.
			</p>
		</div>
		<div class="paragraph">
			<h2>
			Visualizing
</h2>
			<p>
			Add weights to each “indicator” and you can visualize the results of if you had followed the same decision making process with the same source of data over the past few weeks or few months.
			</p>
			<img src="simulation.png" />
		</div>
		<div class="paragraph">
			<h2>
			Simulation
</h2>
			<p>
			Which introduces another unit, a “simulation”. It’s like this: you have sources of data that go years back, and you have scripts to convert that data into a clear position – what would the results have been if I had been following this data with these scripts?
			</p>
			<p>
			I would call it machine learning, but it just combs all possibilities and tries random combinations to see what works best.
			</p>
			<p>
			A visualization of your portfolio history from the past x amount of time – your portfolio returns – every time you would have bought and sold a share – a detailed simulation using past data.
			</p>
			<p>
			Tweaking the weights of the different indicators, you can find which combination was most profitable.
			</p>
		</div>
		<div class="paragraph">
			<h2>
			The role of Stocks Vision
</h2>
			<p>
			The idea of stocks vision is it would be running these simulations 24/7 – trying different combinations of indicators in different timelines. And every morning, 15 minutes before market open, you would get an alert of what shares you need to buy and sell.
			</p>
<img src="phone.png" />
			<p>
			The idea is to have a strong portfolio, and at the same time swing trade the stable positions like FB and V.
			</p>
		</div>
		<div class="paragraph">
			<h2>
			Architecture
</h2>
			<p>
			Python backend (crawler) to crawl internet for data.
			</p>
			<p>
			MySQL database (db) to store the data.
			</p>
			<p>
			Python backend (backend) to analyze the data.
			</p>
			<img src="containers1.png" />
			<p>
			Python backend (crawlscheduler) to trigger crawler at consistent intervals to get more data.
			</p>
			<p>
			Apache frontend (webui) to visualize the data and configure the settings.
			</p>
			<img src="containers2.png" />
		</div>
		<div class="paragraph">
			<h2>
			Further dreaming
</h2>
			<p>
			Let’s say I want my portfolio positions to be like this:
			</p>
				<ul>
			<li>
				61% ETFs
			</li>
			<li>
				26% stocks
			</li>
			<li>
				9% options
			</li>
			<li>
				5% cash
			</li>
</ul>
			<p>
			E*Trade has an official API and robinhood has an unofficial API, so I could combine the values in my accounts to build a true reflection of my current portfolio.
			</p>
			<p>
			The idea was you could configure all settings through a webui. Risk, allocation, trade frequency and everything. A bot doing math and running simulations for you 24/7. The idea is this is your own personal portfolio manager, advisor, and trader.
			</p>
		</div>
		<div class="paragraph">
			<h2>
			Current state of the project
</h2>
			<p>
			Stocks Vision is currently open on GitHub, with both docker compose and Kubernetes deployment support. I am putting the project on hold so that I can focus on other work for the foreseeable future, which is why I’m writing this blog post.
			</p>
			<p>
			Do I think this can actually work? Well we won’t know unless we make it. Pretty much nothing is successful on the first try, so like all things it would take several iterations in order to succeed. 
			
			</p>
			<p>
				Success here is defined as consistently outperforming the market, and nothing more.
			</p>
			<img src="stocks.png" />
			<img src="vision.jpg" />
		</div>
		<div class="paragraph">
			<h2>
			My current strategy
</h2>
			<p>
			Until I find a strategy that works better than the market, I’ll just stick with the market – mostly ETFs.
			</p>
		</div>
	</section>
</article>
<?php
	include '../blogfiles/footer.php';
?>