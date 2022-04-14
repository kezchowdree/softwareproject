<html>
<head>

<title> Directors </title>

<style>

body {
	margin: 0;
	padding: 0;
	background-color: #778899;
}
.nav ul {
	list-style: none;
	background-color: #A9A9A9;
	text-align: center;
	padding: 0;
	margin: 0;
}

.nav li {
	display: inline-block;
}

.nav a {
	text-decoration: none;
	color: #ffff;
	width: 100px;
	dispay: block;
	padding: 30px;
	font-size: 22px;
	font-family: sans-serif;
}

.nav a: hover {
	background: #000;
	transition: 0.4s;
}
footer {
	position: absolute;
	bottom: 0;
	width: 100%
	height: 60px
	text-align: center;
	background-color: #778899;
	padding: 20px;
	
}

</style>

</head>

<body>

<div class = "nav">

	<ul>
		<li><a href = "index.php"> Home </a></li>
		<li><a href = "actors.php"> Actors </a></li>
		<li><a href = "movies.php"> Movies </a></li>
		<li><a href = "directors.php"> Directors </a></li>
		<li><a href = "writers.php"> Writers </a></li>
	</ul>

</head>

<body>

<div class = "style"> </div>
<div class = "container">
	<div class = "row">
	<div class = "col-md-6">
		<h1> Who is your favourite director? </h1>
		<h2> Here, you can view a director or add your favourite director to our database </h2>
		<h3> Add a director </h3>
		<form action = "insertDirector.php" method = "post">
		
		<div class = "form-group">
		<label> First Name </label>
		<input type = "text" name = "FirstName" class = "form-control" required>
		</div
		
		<div class = "form-group">
		<label> Last Name </label>
		<input type = "text" name = "LastName" class = "form-control" required>
		</div>
		
		<div class = "form-group">
		<label> Years Active </label>
		<input type = "int" name = "YearsActive" class = "form-control" required>
		</div>
		
		<button type = "submit" class = "btn btn-primary"> Submit </button>
		</form>
	</div>
	</div>
	<br><br>
	
<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db ($conn, 'moviedatabasemanager');

$sql = "SELECT * FROM directors";

$result = mysqli_query($conn, $sql);

echo "Below is the directors' name and how many years they've been active: <br><br>";


if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_array($result)) {
		echo $row[0].", ".$row[1]." ".$row[2].", ".$row[3];
		echo "<br>";
	}
}

mysqli_close ($conn);

?>
</html>