<?php
session_start();

if(isset($_SESSION['role'])){
	
	if($_SESSION['role'] != 'Admin'){
		header('Location: user.php');
	}
}
else{
	
	header('Location: login.php');
}
?>

<!doctype html>
	<html lang="en">
	
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="stil.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
   
	</head>

	<body>

	<div class="container">
	    <div class="row">
		    <div class="com-md-6">
			   <div class="jumbotron">
			       <h2>
				        Welcome <?php echo $_SESSION['AdminUser']; ?>
						</h2>
			   </div>
			</div>
			
		 </div>
	</div>
	
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="popper.min.js"></script>
	</body>

</html>