<?php
// CONNECT TO THE DATABASE FROM AN INCLUDE FILE
require_once('includes/connection.php');
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
                <a href="package.php" class="list-group-item">Package details</a>
                <a href="payment.php" class="list-group-item">Payments</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="" class="list-group-item active">Instructor</a>
			  <a href="instructor-details.php" class="list-group-item">Instructor List</a>
			  <a href="instructor.php" class="list-group-item">Add New Instructor</a>
            </div>    
            
        </div>
		
		
      <div class="col-md-8">
		<div class="card">                
			<div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Edit Member Details</h3>
            </div> 
			
			<!--Below is my form-->
                <form action="admin-reg1.php" method="post">
               <label>Pick a Member:</label>
						<select class="form-control" id="selectUser" name="selectUser" required>
							<option value="">Pick a Member:</option>

							<?php
							$query = "SELECT 
											users_id, 
											Full_name, 
											user_email
										FROM 
											tbluser 
										ORDER BY 
											Full_name ASC"; //initalises query to all records from customer

							$statement = $db->prepare($query); //links query to connected database with $statement
							$statement->execute(); //executes the query on the database
							$all_queries = $statement->fetchAll(); //fetches "all records" stores them in an array call "all_queries.
							$statement->closeCursor(); //releases memory used by "$statement" so it can be used again.

							$howManyRecords1 = 0; //keeps tabs of the amount of records

							foreach ($all_queries as $one_query) : //loops through and gives option for each product id and product name
								echo "<option value='"
									. $one_query['users_id'] . "'>"
									. $one_query['Full_name'] . ", "
									. $one_query['user_email'] .
									"</option>";
							endforeach;
							?>
						</select>
						
						<br><br>
						<input type="reset" class="form-control" value="Reset the List">
						<br><br>
						<input type="submit" class="form-control" name="submit" value="Update customer data">

      </div>
      </div>
      </div>
      <!--<div class="col-md-1"></div>-->
      </div>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   