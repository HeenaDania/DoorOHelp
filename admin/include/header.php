<?php ob_start();
session_start();
include '/../config.php';
if (!isset($_SESSION['admin'])) {
   header("location:index.php?m=200");
 } ?>
 <!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Door O Help| Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="plugins/datatables/extensions/TableTools/css/dataTables.tableTools.css">
    <link rel="shortcut icon" href="../images/ico/favicon.ico">

 
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
    <script src="./dist/jquery-1.12.4.js"></script>
    
                    
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="main.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">DOH</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Door O Help</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <!-- User Account Menu -->
              <li class="user user-menu">
                <!-- Menu Toggle Button -->
                <a href="pages/logout.php" >
                  <!-- The user image in the navbar-->
                  <?php 
                  $img_query="select * from admin where username='$_SESSION[admin]'";
                  $img_exe=mysqli_query($con,$img_query);
                  $img_data=mysqli_fetch_array($img_exe);
                   ?>
                  <img src="<?php echo $img_data['image']; ?>" alt="<?php echo $img_data['username']; ?>" class="user-image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Sign Out</span>
                </a>
                
              </li>
              
            </ul>
          </div>
        </nav>
      </header>