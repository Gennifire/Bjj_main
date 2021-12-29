<div class="sign-up-form">

	<div class="errorMsg"></div>

	<img src="pics/blueUser-modified.png" height="50px">
	<h1>Sign Up Now</h1>
	<form action="includes/signUpBounce.php" method="post" enctype="multipart/form-data" onSubmit="validateSignupForm()">
		<p class="hint-text">Create your account</p>
		<div class="form-group">
			
		<div class="form-group">
			<input type="email" class="input-box" name="email" id="email" placeholder="Email" required onChange="return emailValidation()">
			<span id="email-error"></span>
		</div>
		
		<div class="form-group">
			<input type="password" class="input-box" name="pass" id="pass" placeholder="Password" required min="8">
			<span id="PasserrorMsg"></span>
		</div>
		
		<div class="form-group">
			<input type="password" class="input-box" name="cpass" id="cpass" placeholder="Confirm Password" required min="8" onchange="return checkPassword()">
			<span id="CpasserrorMsg"></span>
		</div>

		<div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		
		<div class="form-group">
			<button type="submit" name="save" class="signup-btn">Register Now</button>
			<button type="reset" name="reset" class="reset-btn">Reset</button>
		</div>
		<hr>
		<div class="text-center">Already have an account? <a href="logIn.php">Sign in</a></div>
	</form>
</div>