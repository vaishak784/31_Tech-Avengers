<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>


<?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">
       <h1 class="mt-4 mb-3">About</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
             <li class="breadcrumb-item active">About us</li>
        </ol>
     <div class="container">
  <div class="row">
    <div class="col">
        <img src="images/about-us.jpg" height="250" width="450" />
    </div>
    <div class="col">
    <p class="page">We collect blood and the collected blood is stored before it is used for transfusions. Blood banking takes place in the lab. This is to make sure thet donated blood and blood products are safe before they are used. Blood banking also determines the blood type. The blood is also tested for infectious diseases.</p>
    </div>
  </div>
</div>

        

    </div>

    <!-- Footer -->
   <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
