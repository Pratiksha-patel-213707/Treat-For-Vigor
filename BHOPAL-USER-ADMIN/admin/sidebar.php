<?php  
session_start();  
if(!isset($_SESSION["usname"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BHOPAL HEAD POLICE ADMIN </title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    <li><a href="mainadmin.php"><i class="fa fa-user fa-fw"></i>My Profile</a>
                    <!-- <li><a href="stationpasswordchange.php"><i class="fa fa-user fa-fw"></i>Station Profile</a> -->
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 



                    <li>
                        <a   href="home2.php"><i class="fa fa-dashboard"></i>Home</a>
                    </li>
                    <li>
                        <a   href="powerbi.php"><i class="fa fa-dashboard"></i>Working Satus </a>
                    </li>
                    <li>
                        <a   href="contact.php"><i class="fa fa-dashboard"></i>Contact Page to Admin</a>
                    </li>
                    <li>
                        <a   href="app-c.php"><i class="fa fa-dashboard"></i>Appoinment Book</a>
                    </li>

                    <li>
                        <a   href="dataviewofapoinmentform.php"><i class="fa fa-dashboard"></i>Data View Appoinment Form</a>
                    </li>
                    <li>

                        <a href="appointment_c.php"><i class="fa fa-bar-chart-o"></i>Confirm Appointment</a>

                    </li>
                     <!--<li>
                        <a   href="nekhnampurrecord.php"><i class="fa fa-dashboard"></i>PERFORMANCE OF STATION</a>
                    </li>

  
                    <li>
                        <a   href="contact.php"><i class="fa fa-dashboard"></i>CONTACT</a>
                    </li>
-->

                    <li> 
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                 
                </ul>

            </div>

        </nav>