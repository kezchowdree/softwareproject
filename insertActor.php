<?php

session_start();

header ('location: actors.php');

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db ($conn, 'moviedatabasemanager');

$FirstName = $_POST ['FirstName'];
$LastName = $_POST ['LastName'];
$YearsActive = $_POST ['YearsActive'];

$s = " SELECT * FROM actors WHERE FirstName = '$FirstName' && LastName = '$LastName'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	echo "This actor is already in the database";
} else {
	$registration = "INSERT INTO actors (FirstName, LastName, YearsActive) values ('$FirstName', '$LastName', '$YearsActive')";
	mysqli_query ($conn, $registration);
	echo "This actor has been added to the database";
}
?>