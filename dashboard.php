
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Info Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Welcome <?php echo $_SESSION['Full_name']?></h5>
						<?php
			$query = "SELECT *	FROM tbluser WHERE user_email = :theMember"; //initalises query to 1 records from customer
			$statement = $db->prepare($query); //links query to connected database with $statement
			$statement->bindValue("theCustomer", $theCustomer); //binds this value to the customer
			$statement->execute(); //executes the query on the database
			$all_queries = $statement->fetchAll(); //fetches "all records" stores them in an array call "all_queries2.
			$statement->closeCursor(); //releases memory used by "$statement" so it can be used again.

			$howManyRecords = 0;

			//table for displaying customers in 
			//could be used for displaying info on users own page
			//could be used for displaying a single customer to admin
			echo "<table id='filteredProductDetails' border='1'>";

			foreach ($all_queries as $one_query) :
				echo "<tr><td class='description topRow'><b> User ID:</b></td>
					  	<td class='description topRow'> <b>" . $one_query['users_id'] . "</b>
					  	</td></tr>";

				echo "<tr><td class='description'><b> Email Address: </b></td>
						<td class='description topRow'> <b>" . $one_query['user_email'] . "</b>
						</td></tr>";

				echo "<tr><td class='description'><b> Password: </b></td>
					 <td class='description topRow'> <b>" . $one_query['user_password'] . "</b>
					 </td></tr>";

				echo "<tr><td class='description'><b> Status: </b></td>
					 <td class='description topRow'> <b>" . $one_query['user_status'] . "</b>
					 </td></tr>";

				echo "<tr><td class='description'><b> First name: </b></td>
					 <td class='description topRow'> <b>" . $one_query['Full_name'] . "</b>
					 </td></tr>";


				echo "<tr><td class='description'><b> Address: </b></td>
					 <td class='description topRow'> <b>" . $one_query['Address'] . "</b>
					 </td></tr>";

				
				echo "<tr><td class='description'><b> County </b></td>
					 <td class='description topRow'> <b>" . $one_query['county_id'] . "</b>
					 </td></tr>";

				echo "<tr><td class='description'><b> Country </b></td>
					 <td class='description topRow'> <b>" . $one_query['country_id'] . "</b>
					 </td></tr>";

				echo "<tr><td class='description'><b>Join Date: </b></td>
					 <td class='description topRow'> <b>" . $one_query['join_date'] . "</b>
					 </td></tr>";

				$howManyRecords++;
			endforeach;

			echo "</table>";

			if ($howManyRecords == 1) {
				echo "<p class='postGrid'>There is " . $howManyRecords . " record in this table.</>";
			} else {
				echo "<p class='postGrid'>There are " . $howManyRecords . " records in this table.</>";
			}



			?>
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                  </div>
                </div>
            </div>
        </div>       
    </div>

</body>
</html>
