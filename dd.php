<?php

require_once 'credential.php';

/**
 * Created by PhpStorm.
 * User: Muhammad Uzair
 * Date: 5/7/2019
 * Time: 6:42 PM
 */

$con= new credential();
$con= $con->get_db_connection();

?>

<!doctype html>
<html class="no-js" lang="en-US">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Scheduling App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!-- CSS File for Bootstrap Datepicker -->

    <link rel="stylesheet" href="datepicker/css/bootstrap-datepicker.min.css">

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <script src="js/main.js"></script>

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap3.3.7.min.js"></script>
    <!-- JS File for Bootstrap Datepicker -->

    <script src="datepicker/js/bootstrap-datepicker.min.js"></script>

</head>


<body class="fixed-sn blue-skin">
<!--Navigation-->
<header>
<!-- Breadcrumb-->
<div class="breadcrumb-dn navbar">
    <strong><span style="font-size:30px;cursor:pointer;margin-top:0.7%;" onclick="openNav()" class="pull-left" >&#9776; </span></strong>
    <h1 id ="adminnav">Assignment 2</h1>
</div>

        <!-- / Top Nav -->
    <nav class="navbar  breadcrumb" style="width: 100%; margin-top: -1.7%;">
        <div class="container-fluid ">
            <ul class="nav navbar-nav pull-right">
                <li><a href="manageStudents.php">Student Record</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php
            $name=$name['teacher'];
            $name=ucwords($name);
            echo $name ?>Student Availability<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#addStdTime">Add TimeSlots</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#updateStdTime">Update TimeSlots</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#removeStdTime">Remove TimeSlots</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
    
</body>
</html>
