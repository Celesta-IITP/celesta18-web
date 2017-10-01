<?php

require("./connect.php");
require("./mail.php");
$link = 'http://celesta.org.in';
$message = "
This is a test.
";
$fname = $_POST['fname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$college = $_POST['college'];
$clstid = "CLST";
$fsql = "SELECT * FROM user";
$fres = mysqli_query($conn, $fsql);
/*
while ($row = mysqli_fetch_assoc($fres)) {
	//if(strcasecmp($row['email'], $email) == 0){
		echo $row['email'];
	//}
}*/

$num = mysqli_num_rows($fres) + 1;

$num = sprintf('%03d', $num); 

$clstid .= $num;

$msg = "<em>Your Registration Detils</em><hr><code>Full Name: $fname<br/>Celesta ID : <b>$clstid</b><br />College : $college<br />D.O.B. : $dob<br />Phone : $phone<br />City : $city<br /></code>";

$sql = "INSERT INTO user (fname, email, city, college, phone, clstid) VALUES ('$fname', '$email', '$city', '$college', '$phone','$clstid')";

if(mysqli_query($conn, $sql)){

    echo "<b>Thank You For Registration !</b>";//sendmail($email,$fname,$clstid, $msg);
    mailTo($email, "Registration Confirmation", $msg);

} else {
	echo "Error!";
}

mysqli_close($conn);

?>