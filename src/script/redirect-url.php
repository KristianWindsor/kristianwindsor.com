<?php
	if($_SERVER['SERVER_NAME'] == 'wnd.sr') {
		if($_SERVER['REQUEST_URI'] == '/lexus-kitchen') {
			$destination = 'https://kristianwindsor.com/blog/custom-built-kitchen-for-my-lexus/';
		} else {
			$destination = 'https://kristianwindsor.com/';
		}
		
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: " . $destination);
		exit();
	}
?>