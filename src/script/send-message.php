<?php 
	// given data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messageToSend = $_POST['message'];

    // write to file
    $filename = '/var/www/html/messages/logs.txt';
	file_put_contents($filename, '---'.PHP_EOL, FILE_APPEND | LOCK_EX);
	file_put_contents($filename, $name.PHP_EOL, FILE_APPEND | LOCK_EX);
	file_put_contents($filename, $email.PHP_EOL, FILE_APPEND | LOCK_EX);
	file_put_contents($filename, $messageToSend.PHP_EOL, FILE_APPEND | LOCK_EX);


?>