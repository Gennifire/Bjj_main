<?php
// CONNECT TO THE DATABASE FROM AN INCLUDE FILE
require_once('includes/connection.php');

$users_id = $_POST["users_id"];
$user_email = $_POST["user_email"];
$user_password = $_POST["user_password"];
$user_status = $_POST["user_status"];
$Contact = $_POST["Contact"];
$Full_name = $_POST["Full_name"];
$Date_of_birth = $_POST["Date_of_birth"];
$Address = $_POST["Address"];
$county_id = $_POST["county_id"];
$country_id = $_POST["country_id"];
$join_date = $_POST["join_date"];


$query = "UPDATE tbluser 
			SET
				users_id = :users_id,
				user_email = :user_email,
				user_password = :user_password,
				user_status = :user_status,
				Contact = :Contact,
				Full_name = :Full_name,
				Date_of_birth = :Date_of_birth,
				Date_of_birth = :Date_of_birth,
				Address = :Address,
				county_id = :county_id,
				country_id = :country_id,
				join_date = :join_date		
		
			WHERE 
				users_id=:users_id";
		
$statement = $db->prepare($query);

$statement->bindValue(":users_id", $users_id);
$statement->bindValue(":user_email", $user_email);
$statement->bindValue(":user_password", $user_password);
$statement->bindValue(":user_status", $user_status);
$statement->bindValue(":Contact", $Contact);
$statement->bindValue(":Full_name", $Full_name);
$statement->bindvalue(":Date_of_birth", $Date_of_birth);
$statement->bindValue(":Address", $Address);
$statement->bindValue(":county_id", $county_id);
$statement->bindValue(":country_id", $country_id);
$statement->bindValue(":join_date", $join_date);

$statement->execute();
$statement->closeCursor();

header("location: member-dashboard.php")

?>
