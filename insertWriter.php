<?php

session_start();

header ('location: writers.php');

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db ($conn, 'moviedatabasemanager');

$FirstName = $_POST ['FirstName'];
$LastName = $_POST ['LastName'];
$YearsActive = $_POST ['YearsActive'];

$s = " SELECT * FROM writers WHERE FirstName = '$FirstName' && LastName = '$LastName'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	echo "This writer is already in the database";
} else {
	$registration = "INSERT INTO writers (FirstName, LastName, YearsActive) values ('$FirstName', '$LastName', '$YearsActive')";
	mysqli_query ($conn, $registration);
	echo "This writer has been added to the database";
}
?>