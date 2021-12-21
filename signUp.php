<?php
include("includes/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign up Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link href="//fonts.googleapis.com/css?family=Roboto:700,500,400&amp;display=swap" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="css/maincss.css">
	<link rel="stylesheet" href="css/signUp.css">

	<?php include("includes/topNav.php"); ?>

<body>

	<!-- Sign up form -->

	<div class="sign-up-form">
		<img src="pics/blueUser-modified.png" height="50px">
		<h1>Sign Up Now</h1>


		<div class="box">

			<div class="page">

				<div id="errorMsg"></div>
				<div class="content">

					<form class="signup" name="signupForm" onsubmit="return validateSignupForm()" method="POST">
						<input type="email" class="input-box" name="email" id="signEmail" placeholder="Email">
						<input type="text" class="input-box" name="name" id="signName" placeholder="Username">
						<input type="password" class="input-box" name="password" id="signPassword" placeholder="Password">

						<br>

						<p class="question"> Terms </p>
						<label> I agree to the terms and conditions.</label>
						<input id="terms" required type="checkbox" onclick="return formTerms()" />
						<span id="error_terms"> </span>
						<input type="submit" class="input-box" id="signup-btn " value="Sign Up">
						<button class="input-box" type="reset" id="reset-btn" value="Reset" onclick="formReset()"> Reset </button>
					</form>
				</div>
			</div>
		</div>


		<br> <br>

		<hr>
		<p class="or-seperator"><b>OR</b></p>
		<p>Already Have an account?</p>
		<a href="logIn.php">

			<u>Login</u>
		</a>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script rel="stylesheet" href="js/logInSignUp.js"></script>
</body>

</html>