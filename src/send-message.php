<?php 
	require 'mailgun/vendor/autoload.php';
	use Mailgun\Mailgun;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "KW: Message from " . $name;
    $message = "Name: " . $name . "\nEmail: " . $email . "\nMessage:\n" . $_POST['message'];

	$mg = new Mailgun(getenv('MAILGUN_API_KEY'));
	$domain = "kristianwindsor.com";

	$mg->sendMessage($domain, array(
	'from'=>'mail@kristianwindsor.com',
	'to'=> 'kristianwindso@gmail.com',
	'subject' => $subject,
	'text' => $message
	    )
	);
?>