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
       	echo "Could not find events." ."<br>";
    }else{
	    $event_id = array();
    	foreach(scandir($directory) as $file) {
       		if('.' === $file) continue;
       		if('..' === $file) continue;
       		array_push($event_id, explode('.', $file)[0]);
    	}
    	if($link =mysqli_connect($servername, $username, $password, $dbname)){
    		$event = array();
			foreach($event_id as $value) {
				if($str = file_get_contents("eventdata/". $value . ".json")){
					$event_data = json_decode($str, true);
					$event[(string)$event_data['name']] = $value;
				}
			}
			$sql = "SELECT * FROM `eventreg`";
			$result = mysqli_query($link,$sql);
			if($result && mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){
					if(isset($event[(string)$row['eveName']])){
						$event_name = $row['eveName'];
						$hash1 = ((int)$event[$event_name] * 10000 ) + (int)$row['uID']; 
						$hash = 1000000000+$hash1;	
						$sql1 = "UPDATE `eventreg` SET eveID=". $event[$event_name] . ", hash=". $hash ." WHERE regID=". $row['regID'];
						$result1 = mysqli_query($link,$sql1);
						if($result1){
							echo "done->". $hash1 ."<br>";
							//successfully updated.
    					}else{
    						echo "\n could not update->".$row['hash'] ."<br>";
   	    				}
					}
				}
			}else{
				echo "Could not fetch any row form table `eventreg`" ."<br>";
			}
			$sql = "SELECT * FROM `eventreg`";
			$result = mysqli_query($link,$sql);
			if($result && mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){
					if(isset($event[(string)$row['eveName']])){
						$event_name = $row['eveName'];
						$hash = ((int)$event[$event_name] * 10000 ) + (int)$row['uID']; 
						$sql1 = "UPDATE `eventreg` SET hash=". $hash ." WHERE regID=". $row['regID'];
						$result1 = mysqli_query($link,$sql1);
						if($result1){
							echo "done again->". $hash ."<br>";
							//successfully updated.
    					}else{
    						echo "\n could not update->".$row['hash'] ."<br>";
   	    				}
					}else{
						echo "Name did not match : eveID=". $row['eveID']. " AND uID=". $row['uID'] ."<br>";
					}
				}
			}else{
				echo "Could not fetch any row form table `eventreg` for 2nd query" ."<br>";
			}
		}else{
			echo "Could not connect to database." ."<br>";
		}	
	}

?>