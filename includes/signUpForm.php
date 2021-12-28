<div class="sign-up-form">

	<div class="errorMsg"></div>

	<img src="pics/blueUser-modified.png" height="50px">
	<h1>Sign Up Now</h1>
	<form action="register_a.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
		<div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="input-box" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="input-box" name="last_name" placeholder="Last Name" required="required"></div>
			</div>
		</div>
		<div class="form-group">
			<input type="email" class="input-box" name="email" placeholder="Email" required="required">
		</div>
		<div class="form-group">
			<input type="password" class="input-box" name="pass" placeholder="Password" required="required">
		</div>
		<div class="form-group">
			<input type="password" class="input-box" name="cpass" placeholder="Confirm Password" required="required">
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