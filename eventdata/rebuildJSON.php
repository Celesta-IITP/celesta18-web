<?php
include '../apiLe/defines.php';
// $eventsSheetUtl = 
// todo insert above variable as parameter in below function when things are ok.
$csvContents = file_get_contents($eventsSheetUtl);
$csvContents  = explode(";;;",$csvContents);

#fill different category IDs here
$eveCatID = [
        "Build IT!"=>1,
        "Treasure Hunt"=>2,
        "Non Tech"=>3,
        "Coding and Design"=>4,
        "Management"=>5,
        "Quiz"=>6,
        "Special Robotics"=>7
        // etc
];
$eveIndex = [0,0,0,0,0,0,0,0];
// $eligible = [
//     "School level" => 0,
//     "College level" => 1,
//     "Open to all" => 2
// ];

$attr = ["","name","about","venue","organised","contact","time","img","rules","eligibile","","date","catagory"];
function format($inpStr){
    $retStr = $inpStr;
    $retStr = str_replace("\n","<br>",$retStr);
    return $retStr;
}
foreach ($csvContents as $key => $value) {
    if ($key == 0)
    continue;
    // echo $key."> ";
    $row = str_getcsv($value);
    echo $row[1]."\n";
    if (!isset($row[12]))
        continue;
    $jsonDataOut = [];
    for ($i=0; $i < 13; $i++) { 
        if ($row[$i] && $row[$i]!="")
            $jsonDataOut[$attr[$i]] = format($row[$i]);
    }
    $eveIndex[$eveCatID[$row[12]]]++;
    unset($jsonDataOut[""]);
    $fileName = "1".str_pad($eveCatID[$row[12]], 2, "0",STR_PAD_LEFT).str_pad($eveIndex[$eveCatID[$row[12]]], 2, "0",STR_PAD_LEFT).".json";
    // print($fileName."\t".json_encode($row)."\t".$row[12]."\n");
    // DONOT UNCOMMENT BELOW LINES ALL IS WORKING
    //$fp = fopen( $fileName, 'w');
    //fwrite($fp, json_encode($jsonDataOut));
    //fclose($fp);
}

?>
