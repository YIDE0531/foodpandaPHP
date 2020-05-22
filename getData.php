<?php
    $output= callpy();
	$jsondata = shell_exec($output);
    $obj = json_decode($jsondata); 
	echo base64_decode($jsondata);

	function callpy() {
        $jsondata= escapeshellcmd("py D:/FoodPanda/Python/main.py");
        return $jsondata ;
    }
?>