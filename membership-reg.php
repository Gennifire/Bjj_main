<!DOCTYPE html>
<?php include("includes/connection.php");?>
<html>
<head>
	<title>Membership details</title>
	 <link rel="stylesheet" href="maincss.css">
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
            
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
		<tr>
            <th>Package Descriptions: </th>  
        </thead>
        <tbody>
          <?php
			$query2 = "SELECT 
									* 
								from 
									tblmembership_type
								ORDER BY 
									membership_type_id ASC"; //initalises query2 to all records from customer

			$statement = $db->prepare($query2); //links query to connected database with $statement
			$statement->execute(); //executes the query on the database
			$allqueries2 = $statement->fetchAll(); //fetches "all records" stores them in an array call "all_queries2.
			$statement->closeCursor(); //releases memory used by "$statement" so it can be used again.

			echo "<table class='content-table' id='userDetails' border='1'>
							<thead>
								<th>Membership type:</th>
								<th>Description</th>
								<th>Period:</th>
								<th>Amount:</th>
								
							</thead>
							
							"
							;

			$howManyRecords2 = 0;

			foreach ($allqueries2 as $one_query2) :
				echo "
					<tr>
						<td>" . $one_query2['membership_type_name'] . "</td>
						<td>" . $one_query2['membership_description'] . "</td>
						<td>" . $one_query2['membership_period'] . "</td>
						<td>" . $one_query2['membership_amount'] . "</td>
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