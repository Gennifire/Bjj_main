<?php
// CONNECT TO THE DATABASE FROM AN INCLUDE FILE
require_once('includes/connection.php');

/*Gets instructors details*/
$instructor_name = $_POST["instructor_name"];
$instructor_email = $_POST["instructor_email"];
$instructor_phone = $_POST["instructor_phone"];


$query = "INSERT INTO 
			tbleinstructor 	
				(instructor_name, 
				instructor_email,
				instructor_phone)
			VALUES
				(:instructor_name,
				:instructor_email,
				:instructor_phone)";
				
		
$statement = $db->prepare($query);


$statement->bindValue(":instructor_name", $instructor_name);
$statement->bindValue(":instructor_email", $instructor_email);
$statement->bindValue(":instructor_phone", $instructor_phone);

$statement->execute();
$statement->closeCursor();


/*Gets expertise*/
$instructor_expertise_id = $_POST["instructor_expertise_id"];

$query2 = "INSERT INTO 
				tbleinstructor
			VALUES
				instructor_expertise_id
			SELECT 		
				instructor_expertise_id
			FROM
				tblinstructor_expertise";
		
$statement = $db->prepare($query2);

$statement->bindValue("instructor_expertise_id", $instructor_expertise_id);


$statement->execute();
$statement->closeCursor();

header("location: admin-panel.php")


?>
