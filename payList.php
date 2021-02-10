<?php
session_start();
error_reporting(0);
include('dbconnection.php');
$msg="";

  if(isset($_POST['submit']))
  {
$dueDetails = $_POST['payment'];
$query=mysqli_query($con,"update dues set isPaid=1 where dueID='".$_SESSION['dueID']."' and username='".$_SESSION['User']."' ");
$query2=mysqli_query($con,"insert into payment (username,amount,dueID) VALUES('".$_SESSION['User']."' ,'100','".$_SESSION['dueID']."') ");

if($query and $query2){
	 $msg="Thank you! Your payment has been added  ";
}
else{
	 $msg="no";
}

  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Lara Towers Visitors</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
     
      <?php include_once('includes/userSidebar.php');?>

        <div class="page-container">
           
            <?php include_once('includes/header.php');?>
          
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                      
										<thead>
                                        <tr>
                                            <tr>
                  <th>S.NO</th>
            
                  <th>Resident Name</th>
              
              <th>Contact Number</th>
              
                   <th>Date</th>
			  <th>Choose</th>
                </tr>  
				</tr>
				</thead>
										
<?php
$ret=mysqli_query($con,"select *from dues where username='".$_SESSION['User']."'  AND isPaid=0 ");

$cnt=1;
while ($row=mysqli_fetch_array($ret)){
$cnt++;
?>
                  <tr>
				
                  <td><?php echo $cnt; ?></td>     
                  <td><?php  echo $row['username'];?></td>
                  <td><?php  echo $row['due'];?></td>
                <td><?php  echo $row['dueDate'];?> </td>
				
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <td><input type="radio"name="payment" value="<?php $_SESSION['dueID']=$row['dueID']?>"><br><?php echo $row['dueID']?></td>
</form>
                   
                </tr>  
                 <?php 

}?>
 
                                    </table>
									<div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Pay
                                        </button></p>
                                        
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        
                       
          
<?php include_once('includes/footer.php');?>
          </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<?php  ?>
