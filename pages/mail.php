<?php
	function mailTo($to, $subject='', $message='') {
		$sender_email = "team@celesta.org.in";
		$sender_name = "Celesta IIT Patna";
		$headers = "From: $sender_name <$sender_email>"."\r\n".'X-Mailer: PHP/' . phpversion()."\r\n";
		$headers .= 'Content-type: text/html;charset=ISO-8859-1'."\r\n";
		$headers .= 'MIME-Version: 1.0'."\r\n\r\n";
		$isSuccess = mail($to,$subject,$message,$headers);
		if($isSuccess)
			echo 1;
	}
	/*$to = 'raj75092@gmail.com';
	$subject = 'Test';
	$message = 'This is a test.';
	mailTo($to, $subject, $message);*/
?>