<?php
$ret = array();
$message = "";
	$directory = 'eventdata';
    if (!is_dir($directory)) {
    	$message = "directory not found";
    }else{
	    $event_id = "";
	    $catagory = array();
	    $files = array();
	    $exists = 0;
	    $event_data = array();
	    $event_id.= $_GET['file'];
	    $event_catagory = $_GET['catag'];
	    $catagory[$event_catagory]="";
	    $files[$event_catagory]=0; 
		foreach (scandir($directory) as $file) {
        	if ('.' === $file) continue;
        	if ('..' === $file) continue;
        	if($str = file_get_contents("eventdata/". $file)){
     			//$ret['1'] = var_dump($str);
				$event_data = json_decode($str, true);
				//$ret['2'] = var_dump($event_data);
				if($event_data['name']==$_GET['name']){
					$message = "This event name already exists in ". $file .".";
				}
				if($file[0]==$event_id){
					if($event_data['name']==$_GET['name']){
						$exists = 1;
						$ret['file'] = $file;
					}
					$catagory[$event_data['catagory']]=substr($file,1,2);
					$files[$event_data['catagory']]+=1;
				}
			}
    	}
    	if($exists==1){

    		$message.= "(This file name already exists)";
    	}else{
    		if($catagory[$event_catagory]==""){
    			$ret['used'] = 0;
  				$id = count($catagory);
  				$event_id.= (string)((int)($id/10));
  				$event_id.= (string)((int)($id%10));
    		}else{
    			$id = $catagory[$event_catagory];
  				$event_id.= $id;
    		}

    		$event_id.= (string)((int)(($files[$event_catagory]+1)/10));
    		$event_id.= (string)((int)(($files[$event_catagory]+1)%10));

			$filename = $event_id;
			$myFile = $filename. ".json";
			$ret['file'] = $myFile;
			foreach (scandir($directory) as $file) {
        		if ('.' === $file) continue;
        		if ('..' === $file) continue;
        		if($file==$myFile){
     				
				}
    		}
    	}
	}
$ret["message"] = $message;
echo json_encode($ret);
?>