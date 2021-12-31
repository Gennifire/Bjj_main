<?php
include('includes/connection.php');

if(isset($_POST['submit']))
{-

$email_id = $_POST['user_email'];
$user_password = $_POST['user_cpass'];

$duplicate=mysqli_query($conn, "SELECT * from signup_Bounce where 
										email='$email_id' AND 
										password='$user_password'");
										
if (mysqli_num_rows($duplicate)>0)
{
header("Location: index.php?message=User name or Email id already exists.");
}
else{
try {
date_default_timezone_set("Asia/Calcutta");
$insertdate = date("Y-m-d H:i:s");
$conn = new PDO("mysql:host=localhost;dbname=gym_database", 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO signup_Bounce (email_id,
									user_name,
									password,
									date_time)
									
									VALUES (
										'$email_id', 
										'$user_name',
										'$user_password',
										'$insertdate')";
$conn->exec($sql);
header("Location: index.php?message=Thank you for register. Please login to continue.");
}
   catch(PDOException $e)
    {
          echo $sql . "
          " . $e->getMessage();
    }
$conn = null;
}
}
?>