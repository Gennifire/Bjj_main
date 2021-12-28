

<?php
  require_once "includes/connection.php"; //gets info from database

  if(isset($_SESSION['user_id'])!="") { 
    header("Location: dashboard.php"); //if not empty goes to dashboard
  }
//if variables are set 
    if (isset($_POST['signup'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
		
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 
		
		//validation full name
        if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
            $Fname_error = "Name must contain only alphabets and space";
        }
		
		
		//validation email
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please enter a valid email address";
        }
		
		//validation mobile
		if(strlen($mobile) < 10) {
            $mobile_error = "Mobile number must be minimum of 10 characters";
        }
		
		//validation password
        if(strlen($password) < 6) {
            $password_error = "Password must be minimum of 8 characters";
        }       
        
		//validation confirm password
        if($password != $cpassword) {
            $cpassword_error = "Passwords do not match";
        }
		
		//inset values: add here address county, country, dob and username
        if (!$error) {
            if(mysqli_query($conn, "INSERT INTO tbluser(Full_name, email, Contact ,password) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "', '" . md5($password) . "')")) {
             header("location: dashboard.php");
             exit();
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
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

	<div class="sign-up-form">


		<img src="pics/blueUser-modified.png" height="50px">
		<h1>Sign Up Now</h1>
		<form action="dashboard.php" method="post" enctype="multipart/form-data">
		
			
			<p class="hint-text">Create your account</p>
			<div class="form-group">
				<div class="row">
					<div class="col"><input type="text" class="input-box" name="first_name" placeholder="First Name" required="required"></div>
					<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>
			</div>
			
			<div class="form-group">
				<input type="email" class="input-box" name="email" placeholder="Email" required="required">
				<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
			</div>
			
			
			<div class="form-group">
                        <input type="text" name="mobile" class="input-box" placeholder="Mobile" maxlength="12" required="">
                        <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
                    </div>
			
			<div class="form-group">
				<input type="password" class="input-box" name="password" placeholder="Password" maxlength="8" required="required">
				<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
			</div>
			
			<div class="form-group">
				<input type="password" class="input-box" name="cpassword" placeholder="Confirm Password" required="required">
				<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
			</div>
			
			
			<div class="form-group">
				<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
			</div>
			<br> 
			<div class="form-group">
				<div class="row">
					<button type="submit" name="save" class="RegisterBtn">Register Now</button>
					<button type="submit" name="save" class="ResetBtn">Reset</button>
				</div>
			</div>
			<div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
		</form>
	</div>
	

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script rel="stylesheet" href="js/logInSignUp.js"></script>
</body>

</html>