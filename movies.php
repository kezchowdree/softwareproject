<html>
<head>

<title> Movies </title>

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
		<h1> What's your favourite movie? </h1>
		<h2> Here, you can view a film or add your favourite movie to our database </h2>
		<h3> Add a movie </h3>
		<form action = "insertMovie.php" method = "post">
		
		<div class = "form-group">
		<label> Movie Name </label>
		<input type = "text" name = "movie" class = "form-control" required>
		</div
		
		<div class = "form-group">
		<label> Release Year </label>
		<input type = "int" name = "year" class = "form-control" required>
		</div>
		
		<div class = "form-group">
		<label> Rating </label>
		<input type = "int" name = "rating" class = "form-control" required>
		</div>
		
		<div class = "form-group">
		<label> Main Actor </label>
		<input type = "text" name = "actor" class = "form-control" required>
		</div>
		
		<div class = "form-group">
		<label> Director </label>
		<input type = "text" name = "director" class = "form-control" required>
		</div>
		
		<div class = "form-group">
		<label> Writer </label>
		<input type = "text" name = "writer" class = "form-control" required>
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

$sql = "SELECT * FROM movies";

$result = mysqli_query($conn, $sql);

echo "Below is the movie name, the year of release, age rating, main actor, director and writer: <br><br>";

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_array($result)) {
		echo $row[0].", ".$row[1].", ".$row[2].", ".$row[3].", ".$row[4].", ".$row[5].", ".$row[6];
		echo "<br>";
	}
}

mysqli_close ($conn);

?>

</html>