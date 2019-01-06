<?php 
	// given data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $messageToSend = $_POST['message'];

    // define mail
	/*$to      = "hello@kristianwindsor.com";
	$subject = "KW: Message from " . $name;
    $message = "Name: " . $name . "\nEmail: " . $email . "\nMessage:\n" . $messageToSend;
	$headers = 'From: mail@kristianwindsor.com' . "\r\n" .
	    'Reply-To: mail@kristianwindsor.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	// send mail
	mail($to, $subject, $message, $headers);*/
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require './PHPMailer/src/Exception.php';
	require './PHPMailer/src/PHPMailer.php';
	require './PHPMailer/src/SMTP.php';

	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(false);
	$mail->Username = "kristianwindsor2011@gmail.com";
	$mail->Password = getenv('GMAIL_LOGIN');
	$mail->SetFrom("kristianwindsor2011@gmail.com");
	$mail->Subject = "Message from " . $name;
	$mail->Body = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $messageToSend;
	$mail->AddAddress("hello@kristianwindsor.com");

	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message has been sent";
	}
?>