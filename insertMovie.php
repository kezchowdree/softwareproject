<?php

session_start();

header ('location: movies.php');

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db ($conn, 'moviedatabasemanager');

$movie = $_POST ['movie'];
$year = $_POST ['year'];
$rating = $_POST ['rating'];
$actor = $_POST ['actor'];
$director = $_POST ['director'];
$writer = $_POST ['writer'];


$s = " SELECT * FROM movies WHERE name = '$movie'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	echo "This movie is already in the database";
} else {
	$registration = "INSERT INTO movies (Name, ReleaseYear, Rating, Actor, Director, Writer) values ('$movie', '$year', '$rating', '$actor','$director', '$writer')";
	mysqli_query ($conn, $registration);
	echo "This movie has been added to the database";
}
?>