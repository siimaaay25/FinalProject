<?php

include( "dbconnection.php");
session_start();

if(isset($_POST["btnLogin"])){
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	$query="SELECT * FROM doubleuser WHERE Username='$username' AND Password='$password' ";
	$result=mysqli_query($con,$query);
	
	if( mysqli_num_rows($result)> 0){
		while($row=mysqli_fetch_assoc($result))
		{
		
			if($row["Role"] == "Admin"){
			 $_SESSION['AdminUser']=$row["Username"];
			 $_SESSION['role']=$row["Role"];
		     header('Location: dashboard.php');
			
			}
			else{
				$_SESSION['User']=$row["Username"];
				$_SESSION['role']=$row["Role"];
			    header('Location: index.php');
			}
		
	    }

    }
	else{
	$_SESSION['errors'] = array("Your username or password was incorrect.");
    header("Location:login.php");
	}
}

?>