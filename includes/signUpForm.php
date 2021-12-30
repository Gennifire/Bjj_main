<div class="sign-up-form">

	<div class="errorMsg"></div>

	<img src="pics/blueUser-modified.png" height="50px">
	<h1>Sign Up Now</h1>
	<form action="signUpBounce.php" method="post" >
		<p class="hint-text">Create your account</p>
		<div class="form-group">
			
		<div class="form-group">
			<input type="email" class="input-box" name="user_email" id="email" placeholder="Email" required onChange="return emailValidation()">
			<span id="email-error"></span>
		</div>
		
		<div class="form-group">
			<input type="password" class="input-box" name="user_pass" id="pass" placeholder="Password" required min="8">
			<span id="PasserrorMsg"></span>
		</div>
		
		<div class="form-group">
			<input type="password" class="input-box" name="user_cpass" id="cpass" placeholder="Confirm Password" required min="8" onchange="return checkPassword()">
			<span id="CpasserrorMsg"></span>
		</div>

		<div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		
		<div class="form-group">
			<input type="submit" name="submit" class="signup-btn" value="Register Now">
			<input type="reset" name="reset" class="reset-btn" value="reset">
		</div>
		<hr>
		<div class="text-center">Already have an account? <a href="logIn.php">Sign in</a></div>
	</form>
</div>