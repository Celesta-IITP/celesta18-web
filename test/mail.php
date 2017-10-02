<?php

	function mailTo($to, $subject='', $message='', $from, $name='') {

		$sender_email = $from;

		$sender_name = $name;

		$headers = "From: $sender_name <$sender_email>"."\r\n".'X-Mailer: PHP/' . phpversion()."\r\n";

		$headers .= 'Content-type: text/html;charset=ISO-8859-1'."\r\n";

		$headers .= 'MIME-Version: 1.0'."\r\n\r\n";

		$isSuccess = mail($to,$subject,$message,$headers);

		if($isSuccess){

			return 1;

		}

		else {

			return 0;

		}

	}



	?>
<!DOCTYPE html>
<html>
<head>
	<title>Mail Send</title>
	<link rel="stylesheet" type="text/css" href="mail.css">
</head>
<body>
	<form method="POST" action="">

	<input type="text" name="to" placeholder="Send to ...">

	<input type="text" name="from" placeholder="from email ...">

	<input type="text" name="name" placeholder="from Name ...">

	<input type="text" name="subject" placeholder="Subject ..."><br>

	<textarea name="msg" placeholder="Message ..." rows="20" cols="50"></textarea>

	<br>

	<button name="submit" value="ok">Send</button>

	</form>
</body>
</html>
	<?php

	if (isset($_POST['submit'])&&isset($_POST['to'])&&isset($_POST['from'])&&isset($_POST['subject'])&&isset($_POST['msg'])) {

		$to = $_POST['to'];

		$from = $_POST['from'];

		$name = $_POST['name'];

		$subject = $_POST['subject'];

		$msg = $_POST['msg'];

		$con = mailTo($to, $subject, $msg, $from, $name);

		/*if ($con) {

			$err = "Email Sent Failed !";

			echo '<script type="text/javascript">alert("' . $err . '")</script>';

		} else {

			$err = "Email Sent Failed !";

			echo '<script type="text/javascript">alert("' . $err . '")</script>';

		}*/

		header("Location: ./mail.php");

	}

?>
