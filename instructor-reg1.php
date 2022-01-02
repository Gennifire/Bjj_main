<?php
// CONNECT TO THE DATABASE FROM AN INCLUDE FILE
require_once('includes/connection.php');

$instructor_expertise_id = $_POST["instructor_expertise_id"];
$instructor_name = $_POST["instructor_name"];
$instructor_email = $_POST["instructor_email"];
$instructor_phone = $_POST["instructor_phone"];


$query = "UPDATE tbleinstructor SET

			instructor_expertise_id = :instructor_expertise_id,
			instructor_name = :instructor_name,
			instructor_email = :instructor_email,
			instructor_phone = :instructor_phone
		
		WHERE 
			instructor_id = :instructor_id
		
		INNER JOIN 
			tblinstructor_expertise
		ON
			tblinstructor_expertise.instructor_expertise_id = tbleinstructor.instructor_expertise_id.";
		
		
		
$statement = $db->prepare($query);

$statement->bindValue(":instructor_expertise_id", $instructor_expertise_id);
$statement->bindValue(":instructor_name", $instructor_name);
$statement->bindValue(":instructor_email", $instructor_email);
$statement->bindValue(":instructor_phone", $instructor_phone);

$statement->execute();
$statement->closeCursor();

header("location: admin-panel.php")

?>
