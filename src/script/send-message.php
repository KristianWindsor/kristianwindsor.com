<?php 
	// given data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $slackMessage = $_POST['name']."\n".$_POST['email']."\n".$_POST['message'];

    $url = 'https://hooks.slack.com/services/' . getenv('SLACK_TOKEN');
    
    $data = array (
        "text"=> $slackMessage
    );
    $postdata = json_encode($data);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch);
    curl_close($ch);
?>