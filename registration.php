<html>
<head>
</head>
<body>

<?php

session_start();

header ('location: signin.php');

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db ($conn, 'moviedatabasemanager');

$name = $_POST ['user'];
$pass = $_POST ['password'];
$passalert = "<script>alert('Your account has been created!');</script>";
$failalert = "<script>alert('This username is already in use. Try another username');</script>";

$s = " SELECT * FROM users WHERE username = '$name'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	echo $failalert;
	#echo "This username is already in use";
} else {
	$registration = "INSERT INTO users (username, password) values ('$name', '$pass')";
	mysqli_query ($conn, $registration);
	echo $passalert;
	#echo "Success";
}
?>

</body>
</html>