<?php

include("includes/connection.php");


	// NEED TO SET VARIABLES FIRST TIME PAGE LOADS (i.e. submit button not pressed yet)
	//                       ==========
	if (isset($_POST['submit'])==NULL) {
		$show_Error = '';
		$baddata = 2;
	}

	// NOT THE FIRST TIME THE PAGE LOADS ... SO must be BOUNCED BACK from INVALID SIGNUP ATTEMPT
	if ($baddata==1) {
		$show_Error = 'This account already exists: try again';
	}
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
	<div id="errorDisplay"><?php echo $show_Error; ?></div>
	<?php include("includes/signUpForm.php") ?>

	<br> <br>

	
	</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/logInSignUp.js"></script>
</body>

</html>