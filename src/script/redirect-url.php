<?php
	if($_SERVER['SERVER_NAME'] == 'wnd.sr') {
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: https://kristianwindsor.com/");
		exit();
	}
?>