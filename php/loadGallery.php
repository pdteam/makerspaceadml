<?php
	header("Access-Control-Allow-Origin: *");
	$externalIp = file_get_contents('https://docs.google.com/spreadsheets/d/1qG_7j1Yf7lBBO28IsBPWdKb7oc-iVEWSi0Km2m9gsjo/pub?gid=0&single=true&output=csv');
	$array = array_map("str_getcsv", explode("\n", $externalIp));
	$json = json_encode($array);
	echo $json;				
?>

