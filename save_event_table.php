<?php
include 'apiLe/dbConfig.php';
session_start();
function SQLInjFilter(&$unfilteredString){
		$unfilteredString = mb_convert_encoding($unfilteredString, 'UTF-8', 'UTF-8');
		$unfilteredString = htmlentities($unfilteredString, ENT_QUOTES, 'UTF-8');
		// return $unfilteredString;
}
	$directory = 'eventdata';
    if (!is_dir($directory)) {
       	echo "Could not find events.";
    }else{
	    $event_id = array();
    	foreach(scandir($directory) as $file) {
       		if('.' === $file) continue;
       		if('..' === $file) continue;
       			array_push($event_id, explode('.', $file)[0]);
    	}
    	if($link =mysqli_connect($servername, $username, $password, $dbname)){
			foreach($event_id as $value) {
				if($str = file_get_contents("eventdata/". $value . ".json")){
					$event_data = json_decode($str, true);
					$ok = 1;
					$event_name = $event_data['name'];
					$catagory_name = $event_data['catagory'];

    				SQLInjFilter($value);
    				SQLInjFilter($event_name);
    				SQLInjFilter($catagory_name);
					$sql = "INSERT INTO `events` VALUES ('".$value."', '".$event_name."', '".$catagory_name."')";
					$result = mysqli_query($link,$sql);
					if($result){
						echo "\ndone -> ".$value;
						//successfully entered.
    				}else{
    					if(mysqli_errno($link)==1062){
    						echo "\n You are already registered to this event.->".$value;
   	    				}else{
   	    					echo "\n could not enter->".$value;
   	    				}
   	    			}
				}
			}
		}else{
			echo "Could not connect to database.";
		}	
	}

?>


