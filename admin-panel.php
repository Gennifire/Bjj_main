<?php
	session_start();

	if (empty($_SESSION['login_user'])) {
		header("Location: logIn.php");
		exit;
	}
?>

<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  
  
  <header>
 <nav>
     <div class="main-wrapper">
	    <div class="nav-login">
		   <?php
				if (isset($_SESSION['login_user'])) 
				  echo <form action="Logout.php" method="POST">
						<button type="submit" name="submit">logout</button>
						  </form>	
				
			?>
							
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
                <a href="trainer_details.php" class="list-group-item">Member details</a>
                <a href="package.php" class="list-group-item">Package details</a>
                <a href="payment.php" class="list-group-item">Payments</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="instructor.php" class="list-group-item active">Trainer Dashboard</a>
            </div>      
            
        </div>
		
		
            <div class="col-md-8">
		<div class="card">                
			<div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Register new members</h3>
            </div> 
                
                <form class="form-group" action="includes/functions.php" method="post">
                <label>first name:</label>
					<input type="text" name="full_name" class="form-control"><br>
					
                 <label>last name:</label>
					<input type="text" name="DOB" class="form-control"><br> 
					
				<label>email:</label>
                    <input type="text" name="email" class="form-control"><br>
					
                <label>Member ID</label>
				<input type="text" name="contact" class="form-control"><br>
				
				<label>Trainer ID </label> 
					<select class="form-control" name="instructor">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
                                        
			<input type="submit" class="btn btn-primary" name="pat_submit" value="Register">                  <a href="func.php" class="btn btn-light"></a>
                    
                    
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
   