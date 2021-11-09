<?php
	$dsn = 'mysql:host=localhost;dbname=gym_database';
	$username = 'root';
	$psswrd = '';

	try {
		$db = new PDO($dsn, $username, $psswrd);
	} catch (PDOException $e) {
		$error_message = $e->getMessage();
		echo "<h1>DATABASE PROBLEM: " . $error_message . ".</h1>";
		exit();
	}
//the above links the index to the database
?>
