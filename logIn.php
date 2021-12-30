<?php
	// NEED TO SET VARIABLES FIRST TIME PAGE LOADS (i.e. submit button not pressed yet)
	//                       ==========
		// isset(): checks if something was SET, in this case: was the submit button below the password field pressed
		// in this case we want to check if it WASN'T pressed/clicked/set, for FIRST-TIME load of this webpage
	if (isset($_POST['submit'])== NULL) {
		// first time this webpage loads, we shouldn't have an error message (see first <div> inside the <body>)
		$the_Error = '';
		
		// this variable will be set to 1 if either an invalid username or password was entered
		$baddata = 2;
	}

	// NOT THE FIRST TIME THE PAGE LOADS ... SO must be BOUNCED BACK from INVALID LOGIN ATTEMPT
		// (if not the first time to load, then the submit button would already have been pressed, so we wouldn't have gone into the previous if)
	// ==================
	if ($baddata==1) {
		$the_Error = 'One or more user details is incorrect';
	}
	
?>



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
		
			<form action="logInBounce.php" class="login" name="loginForm"  method="post">
			
				<input type="text" class="input-box" name="userEmail" id="userEmail" placeholder="Email" required autofocus onchange="return validateLoginForm()">
				<span id="user_emailError"></span>
				
				<input type="password" class="input-box" name="logPassword" id="logPassword" placeholder="Password" required>
				<span id="user_passwordError"></span>
				
				<div id="check">
					<input type="checkbox" id="remember">
					<label for="remember">Remember me</label>
				</div>
				
				<br>
				<!--error message-->
				<div id="errorDisplay"><?php echo $the_Error; ?></div>
				
				<br>

				<input class="input-box" id="login-btn" type="submit" value="Login" name="submit">
				<a href="#">Forgot Password?</a>
				
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