<?php
	
	// CONNECT TO THE DATABASE FROM AN INCLUDE FILE
	require_once('connection.php');
	
	// this variable will be set to 1 if either the username or password is incorrect. We initialise it at 0
	$baddata = 0;
	
	
	$username = $_POST['userEmail'];
	$password = $_POST['logPassword'];

	/*important to keep sign up and sign in hash loops the exact same*/
	for ($i=1 ; $i<=100 ; $i++) {
		$password = hash('sha512' , $password);
	}
	
	// check if username exists in the database
	$query = "SELECT * FROM tbluser WHERE email = :userEmail AND password = :logPassword";
	$statement = $db->prepare($query);
	$statement->bindValue(":username", $username);
	$statement->bindValue(":password", $password);
	
	$statement->execute();			
	$all_queries = $statement->fetchAll();			
	$statement->closeCursor();	

	// HOW MANY ARRAY ELEMENTS ARE THERE?
		// (there should be one here because each username SHOULD BE UNIQUE)
	$arrayLength = count($all_queries);
	
	
	
	if ($arrayLength != 1) {
		// INVALID USERNAME or USERNAME
		$baddata = 1;
		
	// If member exists: valid USERNAME AND PASSWORD
	} else {
		
		foreach ($all_queries as $one_query) : 
			$dbUserStatus = $one_query['user_status'];
		endforeach; 

		// start and write to the session
		session_start();
		$_SESSION['login_user'] = $username;

		// go to a particular webpage depending on the status of the account (show user in URL, from Session file):
		// if ADMIN user
		if ($dbUserStatus == 1) {
			header("Location: ../admin-panel.php?user=" . $_SESSION['login_user'] . "ADMINISTRATION");
		// if ORDINARY user
		} else if ($dbUserStatus == 0) {
			header("Location: ../dashboard.php?user=" . $_SESSION['login_user'] . "ORDINARY");
		// if STATUS UNDEFINED user
		} else {
			header("Location: ../dashboard.php?user=" . $_SESSION['login_user'] . "STATUS UNDEFINED");
		}
		exit; // exit login2.php if successful (login2.php is now NOT in the URL. Whatever is inside header() is)
	}

	
	if ($baddata == 1) {
		include ("../logIn.php");
		//exit;
	}
	
	// include() vs. header():
		// include(): the webpage which calls the include file is in the url
			// we need an include() in the if ($baddata==1) code block because want to use $baddata value to show an error message
			// if we had header() in the if ($baddata==1) code block, then we wouldn't be able to get into the if statement in login1.php for displaying the error.
		// header(): the webpage which calls the header file is NOT in the url 
			// we need headers if we have had a successful login because we want to leave the account validation behind and go to the desired webpage for whichever sort of user we are logged in as (administrator/ordinary/undefined status)
?>


