/* Login for validation */
function validateLoginForm() {
    var Email = document.getElementById("userEmail").value;
    var password = document.getElementById("logPassword").value;

    if (Email == "" || password == "") {
        document.getElementById("user_emailError").innerHTML = "Please fill the required fields"
        return false;
    } else if (password.length < 8) {
        document.getElementById("user_passwordError").innerHTML = "Your password must include atleast 8 characters"
        return false;
    } else {
        alert("Successfully logged in");
        return true;
    }
}

/* Sign up for validation */
function validateSignupForm() {
    var mail = document.getElementById("user_email").value;
    var checkpass = document.getElementById("user_pass").value;
    var password = document.getElementById("user_cpass").value;

    if (mail == "" || checkpass == "" || password == "") {
        document.getElementById("email-error").innerHTML = "Please fill the required fields"
        return false;
    } else if (password.length < 8) {
        document.getElementById("PasserrorMsg").innerHTML = "Your password must include atleast 8 characters"
        return false;
    } else if (checkpass != password){
		document.getElementById("CpasserrorMsg").innerHTML = "passwords do not match";
		return false;
	} else		{
        alert("Successfully signed up");
        return true;
    }
}

/*Email Validation*/
function emailValidation()
{
  /*  
	if @ is at beginning email invalid
	if char position between "@" and "." is less than 2 email invalid
	if difference between index of last char and "." i greater than 3 or less than 2 email invalid
	if input empty email invalid
  */
  
  value = document.getElementById('user_email').value;
  apos=value.indexOf("@"); 
  dotpos=value.lastIndexOf(".");
  lastpos=value.length-1;
  
  if (apos < 1 || dotpos-apos < 2 || lastpos-dotpos > 3 || lastpos-dotpos < 2 || value.length == 0){
      document.getElementById("email-error").innerHTML = "Invalid Email Address";
	  document.getElementById("email-error").style.backgroundColor = "orange";
      return false;
	  
    } else {
		document.getElementById("email-error").innerHTML = " &#10003; ";
		document.getElementById("email-error").style.backgroundColor = "lightgreen";
      return true;
  }
}




/*passwords confirm / match*/
function checkPassword() {
                password = document.getElementById("user_pass").value;
                cpassword = document.getElementById("user_cpass").value;
  
                // If password not entered
                if (password.length == 0){
                    document.getElementById("PasserrorMsg").innerHTML = "Please Enter a Password";
					document.getElementById("PasserrorMsg").style.backgroundColor = "orange";
                    return false;
				}
				
                // If confirm password not entered
                else if (cpassword == ''){
                    document.getElementById("CpasserrorMsg").innerHTML = "Please confirm Password";
					document.getElementById("CpasserrorMsg").style.backgroundColor = "orange";
                     return false;
				}
				
                // If Not same return False.    
                else if (password != cpassword) {
                    document.getElementById("CpasserrorMsg").innerHTML = "Passwords do not match";
					document.getElementById("CpasserrorMsg").style.backgroundColor = "orange";
                    return false;
                }
  
                // If same return True.
                else{
                    document.getElementById("CpasserrorMsg").innerHTML = " &#10003; ";
					document.getElementById("CpasserrorMsg").style.backgroundColor = "lightgreen";	
					//document.getElementById("submit").disabled = false;
                    return true;
                }
            }
			
			
//older code snippets//

/*$(window).on("hashchange", function () {
    if (location.hash.slice(1) == "signup") {
        $(".page").addClass("extend");
        $("#login").removeClass("active");
        $("#signup").addClass("active");
    } else {
        $(".page").removeClass("extend");
        $("#login").addClass("active");
        $("#signup").removeClass("active");
    }
});
$(window).trigger("hashchange");*/