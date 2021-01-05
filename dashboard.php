<?php

include('dbconnection.php');

session_start();

  ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    
    <title>Dashboard</title>

  
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    
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
        
        

       
         <?php include_once('includes/sidebar.php');?>
        

        
        <div class="page-container">
           
            <?php include_once('includes/header.php');?>
            

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                  


                       <div class="container">
    <div class="row">
    	<div class="col">
    		<div class="col-md">
  				<div class="card text-center text-white  mb-3" style="background-color: #C8A2C8">
  					<div class="card-header">
  						<h5 class="card-title" style="color: white">Total Rooms on Lara Towers</h5>
  					</div>
  					<div class="card-body">
  						<h3 class="card-title" style="color: white">96</h3>
  					</div>
  				</div>
    		</div>
    	</div>

      <div class="col">
        <div class="col-md">
          <div class="card text-center text-white  mb-3" style="background-color: #4cb4c7">
            <div class="card-header">
              <h5 class="card-title" style="color: white">Rooms for Sale on Lara Towers</h5>
            </div>
            <div class="card-body">
              <h3 class="card-title" style="color: white">50</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="col-md">
          <div class="card text-center text-white  mb-3" style="background-color: #7CD1C0">
            <div class="card-header">
              <h5 class="card-title" style="color: white">Used Rooms on Lara Towers</h5>
            </div>
            <div class="card-body">
              <h3 class="card-title" style="color: white">46</h3>
            </div>
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
  
    <script src="vendor/jquery-3.2.1.min.js"></script>
  
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>

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

    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
  <?php  ?>