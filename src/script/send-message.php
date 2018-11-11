<?php 
	// given data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messageToSend = $_POST['message'];

    // define mail
	$to      = "hello@kristianwindsor.com";
	$subject = "KW: Message from " . $name;
    $message = "Name: " . $name . "\nEmail: " . $email . "\nMessage:\n" . $messageToSend;
	$headers = 'From: hello@kristianwindsor.com' . "\r\n" .
	    'Reply-To: hello@kristianwindsor.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	// send mail
	mail($to, $subject, $message, $headers);
?>