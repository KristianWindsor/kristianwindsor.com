#!/usr/local/bin/python
from pyquery import PyQuery as pq
import sys
import requests

def getStockPrice(stock):
	response = requests.get('https://finance.yahoo.com/quote/' + stock + '/')
	doc = pq(response.content)
	text = doc('#quote-header-info').text()
	textSplit = text.splitlines()
	price = textSplit[2].replace('$', '').replace(',', '')

	return price

stock = sys.argv[1]
returnData = getStockPrice(stock)

print(returnData)