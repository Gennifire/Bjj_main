<?php

    session_start();

    if(isset($_SESSION['user_id']) =="") {
        header("Location: login.php");
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
                    <p class="card-text">Your Current Email: <?php echo $_SESSION['email']?></p>
                    <p class="card-text">Your Current Mobile: <?php echo $_SESSION['user_mobile']?></p>
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                  </div>
                </div>
            </div>
        </div>       
    </div>

</body>
</html>