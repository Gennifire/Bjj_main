<?php
// CONNECT TO THE DATABASE FROM AN INCLUDE FILE
require_once('includes/connection.php');


session_start();

	if (empty($_SESSION['login_user'])) {
		header("Location: logIn.php");
		exit;
	}
	
	$userToBeUpdated = $_POST["selectUser"];
?>

<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  
  
<header>
 <nav>
	<h4>Welcome, <span class="userEmail"><?php echo $_SESSION['login_user'] ?></span>! You have successfully signed in as ADMINISTRATOR</h4>
		
     <div class="main-wrapper">
	    <div class="nav-login">
		   
		 <a href="logout.php" class="btn btn-primary">Logout</a>	
				<br><br>	
	   </div>
	 </div>
 </nav>

</header>
  
  
<body>
      
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="" class="list-group-item active"
                   >Members</a>
                <a href="member_details.php" class="list-group-item">Member details</a>
                <a href="membership-reg.php" class="list-group-item">Package details</a>
                <a href="payment.php" class="list-group-item">Payments</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="instructor.php" class="list-group-item active">Instructor Dashboard</a>
            </div>      
            
        </div>
		
		
      <div class="col-md-8">
		<div class="card">                
			<div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Edit Customer details</h3>
            </div> 
			
			<?php 
						$query = "SELECT * FROM tbluser WHERE users_id = :userToBeUpdated";
						$statement = $db->prepare($query);
						$statement->bindValue(":userToBeUpdated", $userToBeUpdated);
						$statement->execute();
						$userDetails = $statement->fetch();
						$statement->closeCursor();						
					?>

					<form action="admin-reg.php" class="form-control"  method="post">


						<label>User ID:</label>
						<input type="text" id="users_id" name="users_id" class="form-control" readonly value="
						<?php echo $userDetails['users_id']; ?>"> <br><br>
						
						<label>Name:</label>
						<input type="text" name="Full_name" id="Full_name" class="form-control"  readonly value="
						<?php echo $userDetails['Full_name']; ?>"> <br><br>
						
						<label>Date of Birth </label>
						<input type="date" id="Date_of_birth" name="Date_of_birth" class="form-control" readonly value="
						<?php echo $userDetails['Date_of_birth']; ?>"> <br><br>
						
						<label>Email</label>
						<input type="text" id="user_email" name="user_email" class="form-control" readonly value="
						<?php echo $userDetails['user_email']; ?>"> <br><br>
						
						<label>Password:</label>
						<input type="text" id="user_password" name="user_password" class="form-control" readonly value="
						<?php echo $userDetails['user_password']; ?>"> <br><br>
						
						<label>User Status:</label>
						<input type="text" id="user_status" name="user_status" class="form-control"  value="
						<?php echo $userDetails['user_status']; ?>"> <br><br>
												
						
						<label>Contact:</label>
						<input type="text" id="Contact" name="Contact" class="form-control"  value="
						<?php echo $userDetails['Contact']; ?>"> <br><br>
						
						<label>Address</label>
						<input type="text" id="Address" name="Address" class="form-control"  value="
						<?php echo $userDetails['Address']; ?>"> <br><br>
						
						<label>County:</label>
						<input type="text" id="county_id" name="county_id" class="form-control"  readonly value="
						<?php echo $userDetails['county_id']; ?>"> <br><br>
						
						<label>Country</label>
						<input type="text" id="country_id" name="country_id" class="form-control" readonly value="
						<?php echo $userDetails['country_id']; ?>"> <br><br>
						
						<label>When did Customer join:</label>
						<input type="date" id="join_date" name="join_date" class="form-control" readonly value="
						<?php echo $userDetails['join_date']; ?>"> <br><br>
						
						<input type="reset" class="form-control" value="Reset the form">
						<br><br>
						<input type="submit" class="form-control" value="update customer record">
						<br><br>
					<!--Add warning here !!-->
						<form action="delete.php" class="form-control"  method="post">
							<input type="submit" class="form-control" value="Delete User">
						</form>
					
					</form>	
		
              
       
                    
      </div>
      </div>
      </div>
      <!--<div class="col-md-1"></div>-->
      </div>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   