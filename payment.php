<!DOCTYPE html>
<?php include("includes/connection.php");?>
<html>
<head>
	<title>Payment details</title>
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
           </div>
		   
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
			<table class="table table-hover">
				<thead>
			 <tr>
					 <th><h3>Make new Payment</h3></th>
				 
				</tr>   
				</thead>
				
				</table>
			
                <div class="card-body"></div>
                <form class="form-group" action="payment-bounce.php" method="post">
                <label>Payment ID</label>
					<input type="text" name="payment_id" id="payment_id" class="form-control"><br>
 
                    <label>Amount</label>
                    <input type="text" name="Amount" id="Amount" class="form-control"><br>
                    <label>Payment time:</label>
                    <input type="date" name="payment_time" id="payment_time" class="form-control"><br>
                   <!-- <label>Customer Name</label>
                    <input type="text" name="customer_name" class="form-control"><br>-->
                    <label>Payment Type</label>
                    <input type="text" name="payment_type" id="payment_type" class="form-control"><br> 
					
					<input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
					</form>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>