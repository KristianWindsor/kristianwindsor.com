<?php
	$stock = $_GET['stock'];

	$command = escapeshellcmd('/Users/kristianwindsor/Documents/websites/kristianwindsor.com/src/blog/stock-trading-bot-design/get-stock-prices.py ' . $stock);
	$output = shell_exec($command);

	header("Content-Type: application/json");
	echo json_encode($output);
?>