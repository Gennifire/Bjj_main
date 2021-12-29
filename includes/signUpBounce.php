<?php
	// Note that this webpage has no HTML: its purpose is to validate whether the username/password account exists.
		// if account ALREADY exists (BAD!), bounce back to signup1.php to display error message;
		// if account DOESN'T exist (GOOD!), insert a record and go to login1.php

	// CONNECT TO THE DATABASE FROM AN INCLUDE FILE
	require('includes/connection.php');
	
	// this variable will be set to 1 if either the username or password is incorrect. We initialise it at 0
	$baddata = 0;
	
	// data from the previous (signup1.php) page
	$signupUsername = $_POST['email'];
	$signupPassword = $_POST['cpass'];
	
	echo "<script>alert('Password='" . $signupPassword . ");</script>";
	
	//HASH the password 100 times so that it can be compared to other hashed passwords in the DB table
	for ($i=1 ; $i<=100 ; $i++) {
		$signupPassword = hash('sha512' , $signupPassword);
	}
	echo "<script>alert('Hashed password='" . $signupPassword . ");</script>";

	// check if username exists in the database table
	$query1 = "SELECT * FROM tbluser WHERE email = :signupUsername AND password = :signupPassword";
	$statement = $db->prepare($query1);
	$statement->bindValue(":signupUsername", $signupUsername);
	$statement->bindValue(":signupPassword", $signupPassword);
	
	$statement->execute();			
	$all_queries1 = $statement->fetchAll();			
	$statement->closeCursor();	

	// HOW MANY ARRAY ELEMENTS ARE THERE?
		// (there should be NONE here before SignUp because each username SHOULD BE UNIQUE)
	$arrayLength = count($all_queries1);
	
	// using PHP to write JavaScript
	echo ("<script>alert('number of records: " . $arrayLength . ".');</script>");
	
	// Does USERNAME exist? When we INSERT a new account (i.e. when someone signs up), we need to check that the user is not there
	if ($arrayLength != 0) {
		// USERNAME ALREADY EXISTS: PROBLEM
		$baddata = 1;
	} else {
		// USERNAME DOESN'T EXIST SO INSERT RECORD
        $query2 = "INSERT INTO tbluser (email, password, user_status) VALUES (:signupUsername, :signupPassword, '2')";

		$statement = $db->prepare($query2);
		$statement->bindValue(':signupUsername', $signupUsername);
		$statement->bindValue(':signupPassword', $signupPassword);
		$statement->execute();
		$statement->closeCursor();		
		
		// go to login1.php so this newly signed-up user can login/signin
		echo("<script>window.location.replace('logIn.php');</script>");  // redirects  			
	}	
	

	// if unsuccessful, back to signup1.php, but still URL shows signup2_insert.php
	if ($baddata == 1) {
		include ("signUp.php");
	}
?>