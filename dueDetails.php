<?php
session_start();


include('dbconnection.php');

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
    <title>AVMS</title>

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
        <!-- HEADER MOBILE-->
      <?php include_once('includes/sidebar.php');?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
      
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header.php');?>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    
<h4 class="m-t-0 header-title">Between Dates Reports</h4>
                                    <?php

if (isset($_POST['username'])){
$username=$_POST['username'];}
									
if (isset($_POST['fromdate'])){
$fdate=$_POST['fromdate'];}

if (isset($_POST['todate'])){
$tdate=$_POST['todate'];}

$date_diff = abs(strtotime($tdate) -strtotime($fdate));
$years = floor($date_diff / (365*60*60*24));
$months = floor(($date_diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($date_diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
echo $months;
?>
<h5 align="center" style="color:blue">Report from <?php echo $fdate?> to <?php echo $tdate?></h5>
<hr/>
  
                                    <table class="table table-borderless table-striped table-earning">
                                         <thead>
                                        <tr>
                                            <tr>
                  <th>S.NO</th>
            
                  <th>Resident Name</th>
              
              <th>Contact Number</th>
             
                   <th>Action</th>
                </tr>
                                        </tr>
                                        </thead>
                                       <?php



if($months<2){
	$totaldue=100;
	$sql="select 100-SUM(amount) as sum,username from payment where date(payingTime) between '$fdate' AND '$tdate' AND username='$username' ";
	
}
else if($months<3){
	$totaldue=200;
$sql="select 200-SUM(amount) as sum,username from payment where date(payingTime) between '$fdate' AND '$tdate' AND username='$username' ";
}else if($months<4){
	$totaldue=300;
$sql="select 300-SUM(amount) as sum,username from payment where date(payingTime) between '$fdate' AND '$tdate' AND username='$username' ";
}
else if($months<5){
	$totaldue=400;
$sql="select 400-SUM(amount) as sum,username from payment where date(payingTime) between '$fdate' AND '$tdate' AND username='$username' ";
}
else if($months<6){
	$totaldue=500;
$sql="select 500-SUM(amount) as sum,username from payment where date(payingTime) between '$fdate' AND '$tdate' AND username='$username' ";
}
else if($months<7){
	$totaldue=600;
$sql="select 600-SUM(amount) as sum,username from payment where date(payingTime) between '$fdate' AND '$tdate' AND username='$username' ";
}
else{
	$sql="select 700-SUM(amount) as sum,username from payment where date(payingTime) between '$fdate' AND '$tdate' AND username='$username' ";
}
$ret=mysqli_query($con,$sql);

$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              
                <tr>
                  <td><?php echo $cnt?></td>
				  
                 <td><?php  echo $row['username'];?></td>
                  <td><?php  if ( $row['sum']==0){
				  echo "You have no due for this month."	; }else{ echo $row['sum'];}
	?></td>
          <td><a href="payment.php" title="View Full Details"><i class="fa fa-credit-card"></i></a></td>

            
                 
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
                                    </table>
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