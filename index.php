<html>

<?php

session_start();

?>

<head>
<title> Homepage </title>
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

<div class = "container">

<a class = "float-right" href = "signout.php"> Sign Out </a>

<h3> Welcome to the database <?php echo $_SESSION ['username'] ?>, you can navigate using the menu at the top or sign out</h3>

<?php include ('footer.php'); ?>

</body>
</html>