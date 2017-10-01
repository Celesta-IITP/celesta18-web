<?php

 // this will avoid mysql_connect() deprecation error.

 //error_reporting( ~E_DEPRECATED & ~E_NOTICE );

 //error_reporting(0);

 // but I strongly suggest you to use PDO or MySQLi.

 

 define('DBHOST', 'localhost');

 define('DBUSER', 'id56814_raj75092');

 define('DBPASS', 'raj75092');

 define('DBNAME', 'id56814_all');

 $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

 if(!$conn){

 	die("Connection failed: " . mysqli_connect_error());

 }

?>