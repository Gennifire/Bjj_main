<?php
	$dsn = 'mysql:host=localhost;dbname=D00169326';
	$username = 'D00169326';
	$psswrd = '948BsxFt';

	try {
		$db = new PDO($dsn, $username, $psswrd);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo "<h1>DATABASE PROBLEM: " . $error_message . ".</h1>";
		exit();
	}
//the above links the index to the database
?>
