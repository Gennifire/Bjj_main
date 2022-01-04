<!DOCTYPE html>
<?php include("includes/connection.php"); ?>
<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	 <link rel="stylesheet" href="css/maincss.css">
</head>
<body>


<div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
				<input type="button" value="Back" onclick="window.history.back()" /> 
             </div>
			 
             <div class="col-md-3"><h3>Members Details</h3></div>
             <div class="col-md-8">
			 

				<form class="form-group" action="dashboard.php" method="post">
					<div class="row">
						<div class="col-md-10"><input type="text" name="search" id="search" class="form-control" placeholder="enter contact">
						</div>
						
						<!--search for current member-->
						<div class="col-md-2">
							<input type="submit" name="member_search_submit" class="btn btn-light" value="Search"> 
						</div>
					</div>           
                 </form>
				 </div>
		</div>
		</div>
		
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Member details</th>
						
					</tr>   
				</thead>
			
			<tbody>
				<?php
			$query2 = "SELECT 
									* 
								from 
									tbluser 
								ORDER BY 
									users_id ASC"; //initalises query2 to all records from customer

			$statement = $db->prepare($query2); //links query to connected database with $statement
			$statement->execute(); //executes the query on the database
			$allqueries2 = $statement->fetchAll(); //fetches "all records" stores them in an array call "all_queries2.
			$statement->closeCursor(); //releases memory used by "$statement" so it can be used again.

			echo "<table class='content-table' id='userDetails' border='1'>
							<thead>
								<th>Member ID:</th>
								<th>Users name:</th>
								<th>Password:</th>
								<th>User status:</th>
								<th>DOB:</th>
								<th>Full name:</th>
								<th>Address:</th>
								<th>County:</th>
								<th>Country:</th>
								<th>Join date:</th>
								
							</thead>
							
							"
							;

			$howManyRecords2 = 0;

			foreach ($allqueries2 as $one_query2) :
				echo "
					<tr>
						<td>" . $one_query2['users_id'] . "</td>
						<td>" . $one_query2['user_email'] . "</td>
						<td>" . $one_query2['user_password'] . "</td>
						<td>" . $one_query2['user_status'] . "</td>
						<td>" . $one_query2['Date_of_birth'] . "</td>
						<td>" . $one_query2['Full_name'] . "</td>
						<td>" . $one_query2['Address'] . "</td>
						<td>" . $one_query2['county_id'] . "</td>
						<td>" . $one_query2['country_id'] . "</td>
						<td>" . $one_query2['join_date'] . "</td>
					</tr>
					";
					

				$howManyRecords2++;
			endforeach;

			echo "</table>";

			if ($howManyRecords2 == 1) {
				echo "<p class='postGrid'>There is "
					. $howManyRecords2 . " record in this table.</>";
			} else {
				echo "<p class='postGrid'>There are "
					. $howManyRecords2 . " records in this table.</>";
			}

			?>
			</tbody>
			</table>
		</div>
	</div>
   </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

   </div>
    </body>
</html>