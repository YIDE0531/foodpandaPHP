<?php
	$infoUrl=$_GET['infoUrl'];
    $output= callpy($infoUrl);
	$jsondata = shell_exec($output);

    $obj = json_decode($jsondata); 
	echo base64_decode($jsondata);
	
	function callpy($infoUrl2) {
        $jsondata= escapeshellcmd("py D:/FoodPanda/Python/info.py $infoUrl2");
        return $jsondata ;
    }
?>