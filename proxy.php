<?php

$domain="localhost";

header('Content-type: application/xml');
 
$referer=$_SERVER['HTTP_REFERER'];

if(!stripos($referer, $domain)){
	echo "BAD REQUEST";
	return;
}

$handle = fopen($_GET['url'], "r");
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>
