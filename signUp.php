<?php
include("includes/register.php");
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

		<div class="errorMsg"></div>

		<img src="pics/blueUser-modified.png" height="50px">
		<h1>Sign Up Now</h1>
		<form action="register_a.php" method="post" enctype="multipart/form-data">
			<h2>Register</h2>
			<p class="hint-text">Create your account</p>
			<div class="form-group">
				<div class="row">
					<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
					<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
				</div>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Email" required="required">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="pass" placeholder="Password" required="required">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
			</div>
			<div class="form-group">
				<input type="file" name="file" required>
				<!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
			</div>
			<div class="form-group">
				<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
			</div>
			<div class="form-group">
				<button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
			</div>
			<div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
		</form>
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