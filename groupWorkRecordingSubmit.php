
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

echo $_POST['sessionHow'];
echo $_POST['femaleParticipants'];
echo $_POST['femaleParticipants'];

$i = 0;
$form[$i] = $_POST['groupName']; $i++;
$form[$i] = $_POST['dateDay']; $i++;
$form[$i] = $_POST['dateMonth']; $i++;
$form[$i] = $_POST['dateYear']; $i++;
$form[$i] = $_POST['venue']; $i++;
$form[$i] = $_POST['workers']; $i++;
$form[$i] = $_POST['purpose']; $i++;
for($j=1; $j<12; $j++){
	if($_POST['select'.$j]=='Achieved'){
		$form[$i]=$form[$i].'2';
	} else if($_POST['select'.$j]=='Not Achieved'){
			$form[$i]=$form[$i].'1';
		} else if($_POST['select'.$j]=='Not an Objective'){
			$form[$i]=$form[$i].'0';
		}
}$i++;
$form[$i] = $_POST['sessionHow']; $i++;
$form[$i] = $_POST['maleParticipants']; $i++;
$form[$i] = $_POST['femaleParticipants']; $i++;

for($j=1; $j<10; $j++){
	if($_POST['selectLearning'.$j]=='yes'){
		$form[$i]=$form[$i].'1';
	} else if($_POST['selectLearning'.$j]=='no'){
			$form[$i]=$form[$i].'0';
		}
}$i++;

$form[$i] = $_POST['selectImpact']; $i++;
$form[$i] = $_POST['mainCapacityTheme']; $i++;

for($j=1; $j<6; $j++){
	$form[$i] = $form[$i].$_POST['methods'.$j];
}$i++;

for($j=1; $j<7; $j++){
	$form[$i] = $form[$i].$_POST['evidence'.$j];
}$i++;

$form[$i] = $_POST['nextChanges']; $i++;
$form[$i] = $_POST['nextActions']; $i++;




$sql = "INSERT INTO groupWorkRecording (groupName, sessionDate, venue, worker, purpose, outcomes, sessionHow, maleParticipants, femaleParticipants, learning, impact, mainCapacityTheme, methods, evidence, nextChanges, nextActions) VALUES ('$form[0]', '$form[1]-$form[2]-$form[3]', '$form[4]', '$form[5]', '$form[6]', '$form[7]', '$form[8]', '$form[9]', '$form[10]', '$form[11]', '$form[12]', '$form[13]', '$form[14]', '$form[15]', '$form[16]', '$form[17]')";


if($conn->query($sql) === TRUE) {
	echo "done!";
} else {
	echo "error: ".$sql. "<br>". $conn->error;
}

$conn->close();
?>  