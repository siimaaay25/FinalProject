<?php

include("dbconnection.php");
session_start();

?>

	<!doctype html>
	<html lang="en">
	
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css1/bootstrap.min.css">
	<link rel="stylesheet" href="stil.css">
	</head>

	<body>

	<div class="contain row">
	<div class= "com-md-6" >
	<form action="insert.php" method="POST">
	
	<?php if (isset($_SESSION['errors'])): ?>
    <div class="form-errors">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <p><?php echo $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
	
	<div class="form-group">
	<label> Username </label>
	<input type="text" name="username" class="form-control" placeholder="Enter a username">
	</div>
	<div class="form-group">
	<label> Password </label>
	<input type="password" name="password" class="form-control" placeholder="Enter your password">
	</div>
	
	<div class="form-group">
	<input type="submit" name="btnLogin" class="btn btn-primary" value="Login">
	</div>
	</form>
	</div>
	</div>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="popper.min.js"></script>
	</body>

</html>
<?php
    unset($_SESSION["errors"]);
?>
