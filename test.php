    <?php
    if(isset($_POST['submit']))
    {
require_once('includes/connection.php');
	
    $username = $_POST['user_email'];
	
    $query1 = mysql_query("SELECT 
										* 
								FROM 
									tbluser 
								WHERE 
									email ='".$user_email."' ") 
								or die(mysql_error());
								
    $count = mysql_num_rows($query1);
       if($count == 0)
        {
           $resultset_2 = mysql_query("INSERT INTO 
												tbluser 
											VALUES ('".$user_email."')")  or
           die(mysql_error());
        }else{
           echo "The user is already present";
        }
    }
    ?>