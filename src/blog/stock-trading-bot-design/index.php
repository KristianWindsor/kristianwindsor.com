<?php
	$articleTitle = "Stock Trading Bot Design";
	$articleUrl = "stock-trading-bot-design";
	include '../blogfiles/header.php';
?>
<article id="article">
	<header class="article-heading">
		<h1 class="article-title">
			<?php echo $articleTitle; ?>
		</h1>
		<p class="article-info">
			By Kristian Windsor on July 21st, 2018
		</p>
	</header>
	<img src="moneybot.png" class="image" />
	<section class="article-body">
		<div class="paragraph">
			<p class="bold-text">
				Objective
			</p>
			<p>
				I want to create a bot that automatically buys and sells stocks for me. It would be running all day, every day, and have access to 100% of my savings.
			</p>
			<p>
				I believe that the fastest way to grow one's money is by swing trading on the stock market. I have been doing this and with some success, but it was taking up much of my time and mental energy. I want to automate my trading, so that my money will continue to rapidly grow without the expense of my time and energy.
			</p>
		</div>
		<div class="paragraph">
			<p class="bold-text">
				Tools and Technologies 
			</p>
			<p>
				I'll use <b><a href="https://aws.amazon.com/websites/" target="_blank">AWS</a></b> to host the server that the bot will run on. It'll be running on the same server that I use to host my websites, so there is no additional cost for me to host this bot.
			</p>
			<p>
				I'll use <b><a href="https://www.python.org/" target="_blank">Python</a></b> to write the script. Python is a fun language to work with and is very logical and mathematically driven.
			</p>
			<p>
				I'll use this unofficial <b><a href="https://github.com/Jamonek/Robinhood" target="_blank">Robinhood API</a></b> python framework to buy and sell stocks with my Robinhood account.
			</p>
			<p>
				I'll use the <b><a href="https://developer.etrade.com/ctnt/dev-portal/getContent?contentUri=Support-FAQs" target="_blank">E*TRADE API</a></b> to buy and sell stocks with my E*TRADE account.
			</p>
			<p>
				I'll use <b><a href="https://www.reddit.com/r/stocks/search?q=rate%20my%20portfolio%20quarterly%20thread&restrict_sr=1&sort=new&t=all" target="_blank">Reddit /r/stocks</a></b> to source a list of potential stocks to consider buying.
			</p>
		</div>
		<div class="paragraph">
			<p class="bold-text">
				The Stocks
			</p>
			<p>
				Reddit <a href="https://reddit.com/r/stocks" target="_blank">/r/stocks</a> has a quarter million subscribers, and stickied on the subreddit is a portfolio sharing thread. The comment stream looks like this:
				<img src="reddit-stocks.png" />
			</p>
			<p>
				I can write a script that calculates the average portfolio of all the shared portfolios in the reocurring thread. I believe that this is a great source of what stocks to consider buying.
			</p>
			<p>
				In order to test this without first writing the script, I manually calculated the average portfolio from 15 comments, each of which was shared within a 3 day timespan. You can see the full document here: 
				<a href="https://docs.google.com/spreadsheets/d/1ya7k_DoMqqb_3ZynSuFvEGITjQL4HudZBXJOIijQ6RM/?usp=sharing" target="_blank">https://docs.google.com/spreadsheets/d/1ya7k_DoMqqb_3ZynSuFvEGITjQL4HudZBXJOIijQ6RM</a>
			</p>
			<p>
				If I invested $100,000 on June 27th, 2018 according to the portfolio that I calculated, here's what the results would have been:
			</p>

			<table>
				<tr>
					<th>Stock Symbol</th>
					<th>Stock Quantity</th>
					<th>Price on 6/27/18</th>
					<th>Price now</th>
					<th>Total Gain</th>
					<th>Total Gain</th>
				</tr>
				<tr class="MU">
					<td>MU</td>
					<td class="quantity">173</td>
					<td class="pricePaid">$55.00</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="AAPL">
					<td>AAPL</td>
					<td class="quantity">50</td>
					<td class="pricePaid">$185.23</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="NVDA">
					<td>NVDA</td>
					<td class="quantity">26</td>
					<td class="pricePaid">$243.75</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="VTI">
					<td>VTI</td>
					<td class="quantity">46</td>
					<td class="pricePaid">$141.20</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="AMZN">
					<td>AMZN</td>
					<td class="quantity">3</td>
					<td class="pricePaid">$1708.11</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="ATVI">
					<td>ATVI</td>
					<td class="quantity">75</td>
					<td class="pricePaid">$75.77</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="SHOP">
					<td>SHOP</td>
					<td class="quantity">32</td>
					<td class="pricePaid">$155.52</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="SPY">
					<td>SPY</td>
					<td class="quantity">18</td>
					<td class="pricePaid">$272.26</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="DIS">
					<td>DIS</td>
					<td class="quantity">44</td>
					<td class="pricePaid">$104.50</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="FB">
					<td>FB</td>
					<td class="quantity">19</td>
					<td class="pricePaid">$199.18</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="AMAT">
					<td>AMAT</td>
					<td class="quantity">60</td>
					<td class="pricePaid">$46.92</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="HYGS">
					<td>HYGS</td>
					<td class="quantity">366</td>
					<td class="pricePaid">$7.30</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="JPM">
					<td>JPM</td>
					<td class="quantity">26</td>
					<td class="pricePaid">$104.68</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="JNJ">
					<td>JNJ</td>
					<td class="quantity">21</td>
					<td class="pricePaid">$122.13</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="SQ">
					<td>SQ</td>
					<td class="quantity">39</td>
					<td class="pricePaid">$63.85</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="V">
					<td>V</td>
					<td class="quantity">18</td>
					<td class="pricePaid">$133.01</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="VGT">
					<td>VGT</td>
					<td class="quantity">12</td>
					<td class="pricePaid">$183.08</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="ACN">
					<td>ACN</td>
					<td class="quantity">14</td>
					<td class="pricePaid">$157.16</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="LULU">
					<td>LULU</td>
					<td class="quantity">17</td>
					<td class="pricePaid">$126.50</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="GOOGL">
					<td>GOOGL</td>
					<td class="quantity">1</td>
					<td class="pricePaid">$1136.00</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="T">
					<td>T</td>
					<td class="quantity">60</td>
					<td class="pricePaid">$31.98</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="TWTR">
					<td>TWTR</td>
					<td class="quantity">47</td>
					<td class="pricePaid">$45.50</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="BA">
					<td>BA</td>
					<td class="quantity">6</td>
					<td class="pricePaid">$334.85</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="NFLX">
					<td>NFLX</td>
					<td class="quantity">6</td>
					<td class="pricePaid">$407.56</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="MSFT">
					<td>MSFT</td>
					<td class="quantity">18</td>
					<td class="pricePaid">$99.58</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="CSCO">
					<td>CSCO</td>
					<td class="quantity">36</td>
					<td class="pricePaid">$42.73</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="CGC">
					<td>CGC</td>
					<td class="quantity">49</td>
					<td class="pricePaid">$29.73</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="JD">
					<td>JD</td>
					<td class="quantity">38</td>
					<td class="pricePaid">$39.50</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="DFEN">
					<td>DFEN</td>
					<td class="quantity">26</td>
					<td class="pricePaid">$45.22</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr>
					<td>-</td>
					<td class="quantity"></td>
					<td class="pricePaid"></td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
				<tr class="total">
					<td>Total</td>
					<td class="quantity">-</td>
					<td class="pricePaid">$99993.43</td>
					<td class="priceNow"></td>
					<td class="totalGainD"></td>
					<td class="totalGainP"></td>
				</tr>
			</table>
			<p>
				This table is to validate /r/stocks as a reliable source of stocks to consider purchasing; not to mimic the functionality of the bot.
			</p>
		</div>
		<div class="paragraph">
			<p class="bold-text">
				Target Growth Rate
			</p>
			<p>
				In order to double my money each year, these are the returns per period that I need to achieve:
				<ul>
					<li>
						0.2% per day
					</li>
					<li>
						1.4% per week
					</li>
					<li>
						6% per month
					</li>
					<li>
						42% per 6 months
					</li>
					<li>
						100% per year
					</li>
				</ul>
			</p>
		</div>
		<div class="paragraph">
			<p class="bold-text">
				Entry Price and Exit Price
			</p>
			<p>
				This is super simple: buy low and sell high.
			</p>
			<p>
				My assumption is that the stocks I'm watching (from Reddit) will continue their long term trend of going up, even when it dips. 
			</p>
			<p>
				My strategty is to buy stocks when they are below their long term trend, and sell when they are above their long term trend.
			</p>
			<p>
				Here's an image showing how the script will look at stocks:
				<img src="fb.png" />
				Another example:
				<img src="v.png" />
			</p>
		</div>
		<div class="paragraph">
			<p class="bold-text">
				Target Exit Date
			</p>
			<p>
				Swing trading is generally done over periods of weeks or months. The most I want to hold stocks is 6 months, and at the least I'll hold it for a single day.
			</p>
			<p>
				Dividing my portfolio by the number of days that the stock market is open during a 6 month period, (100% / 126 days) results in an allocation of 0.79% of my portfolio for each trading-day within the next 6 months. 
			</p>
			<ul>
				<li>
					0.79% (100% / 126 days) of my portfolio should be bought and sold every day.
				</li>
				<li>
					0.79% of my portfolio should be bought and sold every other day.
				</li>
				<li>
					0.79% of my portfolio should be bought and sold every three days.
				</li>
				<li>
					15.08% (20 * 0.79%) of my portfolio should be traded more than once every 20 days.
				</li>
				<li>
					84.92% (100% - 15.08%) of my portfolio should have trading intervals of at least 20 days and at most 6 months.
				</li>
				<li>
					50% (100% / 2) of my portfolio should be bought and sold at least once every 3 months.
				</li>
				<li>
					50% of my portfolio should be held for at least 3 months at a time.
				</li>
			</ul>
			<p>
				These are <b>not hard numbers</b>, but merely weights used for evenly distributing the timeline-trajectories of how long to hold stocks for in the portfolio.
			</p>
		</div>
		<div class="paragraph">
			<p class="bold-text">
				Amount of Stock to Buy
			</p>
			<p>
				The amount of stock purchased is a simple equation consisting of these three variables:
				<ul>
					<li>
						Reddit Portfolio Value
					</li>
					<li>
						Estimated Growth Rate
					</li>
					<li>
						Estimated Timeline Diversity
					</li>
				</ul>
			<p>
				Example values of these would be like so:
				<ul>
					<li>
						Reddit Portfolio Value: 4% of reddit portfolio
					</li>
					<li>
						Estimated Growth Rate: 65% of target growth-rate 
					</li>
					<li>
						Estimated Timeline Diversity: 100% no overlap of other stock's exit dates
					</li>
				</ul>
			</p>
			<p>
				Let's say my portfolio is worth $1000
			</p>
			<ul>
				<li>
					$1000 * 4% * 65% * 100%
				</li>
				<li>
					$1000 * 4% * 65%
				</li>
				<li>
					$1000 * 2.6%
				</li>
				<li>
					$26
				</li>
			</ul>
			<p>
				If any of these values are 0, then the result will be $0.
			</p>
		</div>
		<div class="paragraph">
			<p class="bold-text">
				Cash Target
			</p>
			<p>
				5%-10%
			</p>
			<p>
				Selling stocks should be done independently from buying stocks. Meaning that a stock should not be sold in order to buy a stock, and a stock should not be bought because one was just sold.
			</p>
		</div>
	</section>
</article>
</div>
</body>
<script type="text/javascript" src="../../script/jquery.js"></script>
<script type="text/javascript" src="get-stock-prices.js"></script>
</html>