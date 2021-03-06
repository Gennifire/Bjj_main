<?php 
//include("includes/functions.php");
include("includes/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Instructor details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>


 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
				<a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-3"><h3> Instructor details</h3></div>
             <div class="col-md-8">
         
		 </div>
		 </div>
		 </div>
    
		
	 
      <div class="card-body"></div>
            <form class="form-group" action="instructor-reg1.php" method="post">
                <label>Instructor Expertise:</label>
					<select class="form-control" id="instructor_expertise_id" name="instructor_expertise_id" required>
							<option class="form-control" value="">Select Expertise</option>

							<?php
							$query = "SELECT 
											instructor_expertise_id,  
											instructor_expertise_type
										FROM 
											tblinstructor_expertise 
										ORDER BY 
											instructor_expertise_type ASC"; //initalises query2 to all records from customer

							$statement = $db->prepare($query); //links query to connected database with $statement
							$statement->execute(); //executes the query on the database
							$all_queries = $statement->fetchAll(); //fetches "all records" stores them in an array call "all_queries2.
							$statement->closeCursor(); //releases memory used by "$statement" so it can be used again.

							$howManyRecords1 = 0; //keeps tabs of the amount of records

							foreach ($all_queries as $one_query) : //loops through and gives option for each product id and product name
								echo "<option class='form-control' value='"
									. $one_query['instructor_expertise_id'] . "'>"
									. $one_query['instructor_expertise_type'] .
									"</option>";
							endforeach;
							?>
						</select> <br>
					
					
					<label>Instructor Name</label>
						<input type="text" name="instructor_name" id="instructor_name" class="form-control"><br>
					<label>Instructor Email </label>
						<input type="text" name="instructor_email" id="instrctor_email" class="form-control"> <br>
                    <label>Phone</label>
						<input type="text" name="instructor_phone" id="instructor_phone" class="form-control"><br> 
						
						<input type="submit" class="btn btn-primary form-control" name="instructor_submit" value="Register">
			</form>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>