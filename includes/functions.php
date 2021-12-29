<?php


/*login */
if(isset($_POST['login_user'])){
	$username=$_POST['user'];
	$password=$_POST['password'];
	$query="select * from tbluser where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)==1){
		header("Location:admin-panel.php");
	}
	else {
		echo "<script>alert('error login')</script>";
		echo "<script>window.open('admin-panel.php','_self')</script>";
	}
}
	
/*register new user (user and admin)*/
if(isset($_POST['pat_submit'])) {
    $fname=$_POST['full_name'];
	$DOB=$_POST['DOB'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $query="insert into (fname,lname,email,contact)values('$fname','$lname','$email','$contact')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    } 

/*resgister new instuctor (admin only)*/
    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
      } 
		
/*make payment (user and admin)*/
        if(isset($_POST['pay_submit']))
        {
            $Payment_id=$_POST['Payment_id'];
            $Amount=$_POST['Amount'];
            $customer_id=$_POST['customer_id'];
            $payment_type=$_POST['payment_type'];
            $customer_name=$_POST['customer_name'];
            $query="insert into Payment(Payment_id,Amount,customer_id,payment_type,customer_name)values('$Payment_id','$Amount','$customer_id','$payment_type','$customer_name')";
             $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('admin-panel.php','_self')</script>";
            }
            } 
			
/*get membership type*/
function get_package(){
    global $con;
    $query="select * from membership_type";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['membership_id'];
        $Package_name=$row['membership_type_name'];
		$Package_details=$row['membership_description'];
        $Amount=$row['membership_amount'];
        echo"<tr>
			<td>$membership_id</td>
			<td>$membership_type_name</td>
			<td>$membership_description</td>
            <td>$membership_amount</td>
            
        </tr>";

    }
}

/*search for trainer*/
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}

/*get and allow to make payments*/
function get_payment(){
    global $con;
    $query="select * from Payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['Payment_id'];
        $Amount=$row['Amount'];
        $payment_type=$row['payment_type'];
        $customer_id=$row['customer_id'];
        /*$customer_name=$row['customer_name'];*/
        
        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount</td>
        <td>$payment_type</td>
        <td>$customer_id</td>
        
            </tr>";

    }
}


?>



