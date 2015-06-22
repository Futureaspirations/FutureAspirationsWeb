<?php
ini_set('display_errors',1);


$servername = "mysql3.clusterdb.net";
$username = "Group-m67";
$password = "gwrfa2015";
$dbname = "Group-m67";



$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
	echo "ohnoes!";
	die("connection failed: ".$conn->connect_error);
} else echo "yay!\r\n";

?>