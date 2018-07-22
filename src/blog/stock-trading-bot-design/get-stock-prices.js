//
// Variables
//
var stockPrices = {};
var totalPriceNow = 0,
	totalGainTotal = 0;
var i = 0;
var stockArray = [];
var stockObject = {
		'MU': {
			'price': 55.00,
			'quantity': 173
		},
		'AAPL': {
			'price': 185.23,
			'quantity': 50
		},
		'NVDA': {
			'price': 243.75,
			'quantity': 26
		},
		'VTI': {
			'price': 141.20,
			'quantity': 46
		},
		'AMZN': {
			'price': 1708.11,
			'quantity': 3
		},
		'ATVI': {
			'price': 75.77,
			'quantity': 75
		},
		'SHOP': {
			'price': 155.52,
			'quantity': 32
		},
		'SPY': {
			'price': 272.26,
			'quantity': 18
		},
		'DIS': {
			'price': 104.50,
			'quantity': 44
		},
		'FB': {
			'price': 199.18, 
			'quantity': 19
		},
		'AMAT': {
			'price': 46.92, 
			'quantity': 60
		},
		'HYGS': {
			'price': 7.30, 
			'quantity': 366
		},
		'JPM': {
			'price': 104.68, 
			'quantity': 26
		},
		'JNJ': {
			'price': 122.13, 
			'quantity': 21
		},
		'SQ': {
			'price': 63.85, 
			'quantity': 39
		},
		'V': {
			'price': 133.01, 
			'quantity': 18
		},
		'VGT': {
			'price': 183.08, 
			'quantity': 12
		},
		'ACN': {
			'price': 157.16, 
			'quantity': 14
		},
		'LULU': {
			'price': 126.50, 
			'quantity': 17
		},
		'GOOGL': {
			'price': 1136.00, 
			'quantity': 1
		},
		'T': {
			'price': 31.98, 
			'quantity': 60
		},
		'TWTR': {
			'price': 45.5, 
			'quantity': 47
		},
		'BA': {
			'price': 334.85, 
			'quantity': 6
		},
		'NFLX': {
			'price': 407.56, 
			'quantity': 6
		},
		'MSFT': {
			'price': 99.58, 
			'quantity': 18
		},
		'CSCO': {
			'price': 42.73, 
			'quantity': 36
		},
		'CGC': {
			'price': 29.73, 
			'quantity': 49
		},
		'JD': {
			'price': 39.50, 
			'quantity': 38
		},
		'DFEN': {
			'price': 45.22,
			'quantity': 26
		}
	};

//
// Get Stock Prices (python)
//
function getStockPrice(stock) {
	$.ajax({
		url: "get-stock-prices.php?stock=" + stock,
		type: "post",
		datatype:"json",
		success: function(stockPrice){
			console.log(stock + ": $" + stockPrice);
			var priceNow = Number(stockPrice);
			var pricePaid = Number($("." + stock + " .pricePaid").html().substring(1));
			var quantity = stockObject[stock]["quantity"];
			var initialInvestment = quantity * pricePaid;
			var totalGainD = Number(quantity * (priceNow - pricePaid)).toFixed(2);
			var totalGainP = Number(100 * (totalGainD / initialInvestment)).toFixed(2);

			// price now
			stockObject[stock]["price"] = priceNow;
			$("." + stock + " .priceNow").html("$" + priceNow).fadeIn();

			// total gain $ dollars
			var color = "#090";
			if (totalGainD < 0) {
				color = "#c00";
				totalGainD = (totalGainD * -1)
				totalGainD = "-$" + totalGainD;
			} else {
				totalGainD = "$" + totalGainD;
			}
			$("." + stock + " .totalGainD").html(totalGainD).css("color", color).fadeIn();

			// total gain % percent
			color = "#090";
			if (totalGainP < 0) {
				color = "#c00";
				totalGainP = (1 - totalGainP).toFixed(2);
				totalGainP = "-" + totalGainP + "%";
			} else {
				totalGainP = totalGainP + "%";
			}
			$("." + stock + " .totalGainP").html(totalGainP).css("color", color).fadeIn();

			// update totals
			updateTotals();
			
			// call next stock
			i++;
			if (i === stockArray.length) {
				i = 0;
			}
			getStockPrice(stockArray[i]);
		}
	});
}

//
// Recalculate the totals
//
function updateTotals() {
	var totalWorthThen = Number($(".total .pricePaid").html().substring(1));
	var totalWorth = 0;
	var totalGainD = 0;
	var totalGainP = 0;
	for (var stock in stockObject) {
		if (stockObject.hasOwnProperty(stock)) {
			var price = stockObject[stock]["price"];
			var quantity = stockObject[stock]["quantity"];
			var pricePaid = Number($("." + stock + " .pricePaid").html().substring(1));
			totalWorth += quantity * price;
			totalGainD += quantity * (price - pricePaid);
		}
	}
	totalGainP = 100 * (totalGainD / totalWorthThen);

	$(".total .priceNow").html("$" + totalWorth.toFixed(2));
	$(".total .totalGainD").html("$" + totalGainD.toFixed(2)).css("color","#090");
	$(".total .totalGainP").html(totalGainP.toFixed(2) + "%").css("color","#090")
}

//
// Build stock array
//
for (var stock in stockObject) {
	if (stockObject.hasOwnProperty(stock)) {
		stockArray.push(stock);
	}
}
console.log(stockArray);

//
// Start script
//
getStockPrice(stockArray[i]);
updateTotals();


