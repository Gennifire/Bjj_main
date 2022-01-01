<?php
	require_once('includes/connection');
	
	$userToBeUpdated = $_POST["userToBeUpdated"];
	
	$query = "DELETE FROM tbluser WHERE users_id = :userToBeUpdated";
	
	$statement = $db->prepare($query);
	
	$statement->bindValue(":users_id", $users_id);
	
	$statement->execute();
	$statement->closeCursor();
	
	header("Location: instuctor-details.php");

?>