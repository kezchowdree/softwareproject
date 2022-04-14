<?php

session_start();

header ('location: directors.php');

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db ($conn, 'moviedatabasemanager');

$FirstName = $_POST ['FirstName'];
$LastName = $_POST ['LastName'];
$YearsActive = $_POST ['YearsActive'];

$s = " SELECT * FROM directors WHERE FirstName = '$FirstName' && LastName = '$LastName'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	echo "This director is already in the database";
} else {
	$registration = "INSERT INTO directors (FirstName, LastName, YearsActive) values ('$FirstName', '$LastName', '$YearsActive')";
	mysqli_query ($conn, $registration);
	echo "This director has been added to the database";
}
?>