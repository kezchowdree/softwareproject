<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db ($conn, 'moviedatabasemanager');

$name = $_POST ['user'];
$pass = $_POST ['password'];

$s = " SELECT * FROM users WHERE username = '$name' && password = '$pass'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	$_SESSION ['username'] = $name;
	header ('location: index.php');
} else {
	header ('location: signin.php');
}
?>