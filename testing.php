<?php
  	  include "apiLe/dbConfig.php";
      $url = $_SERVER['REQUEST_URI'];
      $param = explode("?",$url);
      $event_id = $param[1];
      $event_data = array();
      $ok = 0;
      $error = "";
		$sql = "SELECT * FROM events WHERE id=". $event_id ;
        if($link =mysqli_connect($servername, $username, $password, $dbname)){
			$result = mysqli_query($link,$sql);
			if(!$result || mysqli_num_rows($result)<1){
				$error="Error fetching result.";
			}else{
				if($str = file_get_contents("//". $_SERVER['HTTP_HOST'] . "/eventdata/". $event_id . ".json");){
					$event_data = json_decode($str, true);
					if($row = mysqli_fetch_assoc($result)){
						if($event_data['name'] == $row['name']){
							$ok = 1;
							echo $event_data['name'];
						}
					}
				}
        	}
        }else{
        	$error.= "Error Connetiong to db";
       	}
  ?>
