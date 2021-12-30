<?php

include("includes/connection.php");
/*login */
/*if(isset($_POST['login_user'])){
	$username=$_POST['userEmail'];
	$password=$_POST['logPassword'];
	$query="select * from tbluser where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)==1){
		header("Location:admin-panel.php");
	}
	else {
		echo "<script>alert('error login')</script>";
		echo "<script>window.open('admin-panel.php','_self')</script>";
	}
}*/
	
/*register new user (user and admin)*/
if(isset($_POST['userSubmit'])) {
    $fname=$_POST['full_name'];
	$DOB=$_POST['DOB'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
	$address=$_POST['address']
	
    $query="INSERT INTO tbluser (
		Full_name,
		Date_of_birth,
		email,
		Contact,
		address
	)
		VALUES(
		'$fname',
		'$lname',
		'$email',
		'$contact'
		'$address'
		)";
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
       
        $Name=$_POST['instructor_name'];
        $phone=$_POST['phone'];
		$email=$_POST['email'] 
        $query="insert into tbleinstructor(instructor_name,instructor_phone, instructor_email)values('$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Instructor added.')</script>";
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



