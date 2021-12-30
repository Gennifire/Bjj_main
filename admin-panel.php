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
	<h4>Welcome, <span class="userEmail"><?php echo $_SESSION['login_user'] ?></span>! You have successfully signed in as ADMINISTRATOR</h4>
		
     <div class="main-wrapper">
	    <div class="nav-login">
		   
		 <form action="Logout.php" method="POST">
			<button type="submit" name="submit">logout</button>
		</form>	
					
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
              <a href="instructor.php" class="list-group-item active">Instructor Dashboard</a>
            </div>      
            
        </div>
		
		
      <div class="col-md-8">
		<div class="card">                
			<div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                <h3>Register new members</h3>
            </div> 
                
                <form class="form-group" action="includes/functions.php" method="post">
                <label>full name:</label>
					<input type="text" name="full_name" class="form-control"><br>
					
                 <label>Date of birth</label>
					<input type="date" name="DOB" class="form-control"><br> 
					
				<label>Email:</label>
                    <input type="text" name="email" class="form-control"><br>
					
                <label>Phone</label>
				<input type="text" name="contact" class="form-control"><br>
				
				<label>Address line 1 </label> 
					<input type="text" class="form-control" name="address">
				
				
				<label> County </label>
					<select class="form-control" name="county">
					
					</select>
				
				<label> Country </label>
					<select class="form-control" name="country">
					
					</select>
				
				<!-- change user from ordinary to admin etc-->
				<label> User Status </label>
					<select class="form-control" name="status">
						<option id="admin"> 1 </option>
						<option id="member"> 2 </option>
					</select>
						
				

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
                                        
			<input type="submit" class="btn btn-primary" name="userSubmit" value="Register">                  <a href="func.php" class="btn btn-light"></a>
                    
                    
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
   