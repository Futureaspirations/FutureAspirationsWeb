
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
} else echo "yay! <br>";



$i = 0;
$form[$i] = $_POST['user']; $i++;
$form[$i] = $_POST['pass']; $i++;
$form[$i] = "n"; $i++; //n stands for normal account

echo $form[0]."<br>";
echo $form[1]."<br>";




$sql = "INSERT INTO user_data (user, pass, type) VALUES ('$form[0]', '$form[1]', '$form[2]')";


if($conn->query($sql) === TRUE) {
	echo "done!";
} else {
	echo "error: ".$sql. "<br>". $conn->error;
}

$conn->close();
?>  