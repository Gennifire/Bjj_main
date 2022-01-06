<?php
// CONNECT TO THE DATABASE FROM AN INCLUDE FILE
require_once('includes/connection.php');

$payment_id = $_POST["payment_id"];
$payment_time = $_POST["payment_time"];
$payment_type = $_POST["payment_type"];



$query = "INSERT INTO 
			tblpayment (
				payment_id,
				payment_time,
				payment_type)
			VALUES (
				:payment_id,
				:payment_time,
				:payment_type)";
		
$statement = $db->prepare($query);

$statement->bindValue(":payment_id", $payment_id);
$statement->bindValue(":payment_time", $payment_time);
$statement->bindValue(":payment_type", $payment_type);

$statement->execute();
$statement->closeCursor();

header("location: payment.php")

?>
