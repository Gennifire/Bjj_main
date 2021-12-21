<!DOCTYPE html>
<html lang="en">

<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link href="//fonts.googleapis.com/css?family=Roboto:700,500,400&amp;display=swap" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="css/maincss.css">
	<link rel="stylesheet" href="css/login.css">

	<!--top nav php-->
	<?php
	include("includes/topNav.php");
	?>

<body>

	<div class="login-form">
		<img src="pics/blueUser-modified.png" height="50px">
		<h1>Log in Now</h1>
		<form>
			<form class="login" name="loginForm" onsubmit="return validateLoginForm()" method="POST">
				<input type="text" class="input-box" name="name" id="logName" placeholder="Username">
				<input type="password" class="input-box" name="password" id="logPassword" placeholder="Password">
				<div id="check">
					<input type="checkbox" id="remember">
					<label for="remember">Remember me</label>
				</div>

				<div id="errorMsg"></div>

				<br><br>

				<input class="input-box" id="login-btn" type="submit" value="Login">
				<a href="#">Forgot Password?</a>

			</form>



			<hr>
			<p class="or">OR</p>
			<p>Not a Member?</p>
			<button type="button" id="signup-btn" href="SignUp.php">Sign up</button>
		</form>
	</div>


	<script rel="stylesheet" href="js/logInSignUp.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
	</script>
</body>

</html>