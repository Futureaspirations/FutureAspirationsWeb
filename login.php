<?php 
	session_start();

	include 'connecttodb.php';

	$username = $_SESSION['user'];

	echo $username."<br>";  

	$qry = "SELECT * FROM user_data WHERE user = '$username'";

	echo $qry."<br>";

	$return = mysqli_query( $conn, $qry);

	if(!$return) echo "nooo"; else echo "yars!";

	while($rows = mysqli_fetch_array($return, MYSQLI_ASSOC)){
		echo 1;
		echo $rows['user']." ".$rows['pass']." <br>";
	}
	

?>