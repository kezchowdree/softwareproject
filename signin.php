<html>
<head>

<style>

body {
	background-color: #A9A9A9;
}

{
	width: 80%;
	background-color: red;
	margin: 0 auto;
	padding: 25px;
}

form {
	width: 250px;
	min-heigh: 300px;
	background: #F5FFFA;
	padding: 25px;
	border-radius: 10px;
	text-align: center;
}

label {
	display: inline-block;
	width: 125px;
	text-align: center;
}

input [type = 'text'], input [ type = 'password'] {
	display: inline-block;
	width: 100px;
}

</style>

<title> User Login </title>

</head>

<body>

<div class = "style"> </div>
<div class = "container">
	<div class = "row">
	<div class = "col-md-6">
		<h1> In order to use this database, you need to either log in or sign up </h1>
		<h2> Already have an account? </h2>
		<h3> Login here! </h3>
		<form action = "confirmation.php" method = "post">
		
		<div class = "form-group">
		<label> Username </label>
		<input type = "text" name = "user" class = "form-control" required>
		</div>
		
		<div class = "form-group">
		<label> Password </label>
		<input type = "password" name = "password" class = "form-control" required>
		</div>
		<button type = "submit" class = "btn btn-primary"> Login </button>
		</form>
	</div>
	</div>
	
	<div class = "col-md-6">
		<h2> Don't have an account? </h2>
		<h3>Register here! </h3>
		<form action = "registration.php" method = "post">
		<div class = "form-group">
		<label> Username </label>
		<input type = "text" name = "user" class = "form-control" required>
		</div>
		
		<div class = "form-group">
		<label> Password </label>
		<input type = "password" name = "password" class = "form-control" required>
		</div>
		<button type = "submit" class = "btn btn-primary"> Register </button>
		</form>
	</div>
	</div>

</html>