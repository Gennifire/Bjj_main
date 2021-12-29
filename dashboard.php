<?php

    session_start();

    if(isset($_SESSION['user_id']) =="") {
        header("Location: logIn.php");
		exit;
    }

?>
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
						<p class="card-text">Your Current Date of birth: <?php echo $_SESSION['Date_of_birth']?></p>
						<p class="card-text">Your Current Address: <?php echo $_SESSION['Address']?></p>
						<p class="card-text">Your Current county: <?php echo $_SESSION['county']?></p>
						<p class="card-text">Your Current country: <?php echo $_SESSION['country']?></p>
						<p class="card-text">Your Current Email: <?php echo $_SESSION['email']?></p>
						<p class="card-text">Your Current Mobile: <?php echo $_SESSION['contact']?></p>
						<p class="card-text">Your Current Password (hashed): <?php echo $_SESSION['password']?></p>
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                  </div>
                </div>
            </div>
        </div>       
    </div>

</body>
</html>
