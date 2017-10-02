<?php
include("./connect.php");
$hash = $_GET['hash'];
$clstid = $_GET['clstid'];
$fsql = "SELECT * FROM test WHERE hash = '$hash'";
$result = mysqli_query($conn, $fsql);
$rows = mysqli_num_rows($result);
$confirm = $rows["confirm"];
if ($rows == 1 && $confirm == 0){
	$sql = "UPDATE user SET confirm=1 WHERE hash='$hash' AND clstid = '$clstid'";
	$res = mysqli_query($conn, $sql);
	if($res){
		echo "Your Registration is Completed Succesfully ! Thank You !";
	} else {
		echo "Error ! ";
	}
} else if($confirm == 1){
	echo "You Have Registered Already !";
}
else {
	echo "Sorry, Link has Expired or You have Not Registered !";
}
?>