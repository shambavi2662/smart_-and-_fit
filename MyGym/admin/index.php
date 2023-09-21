<?php 

session_start();

if($_SESSION['admin_email']==true){
	}
	else{
		header('location: login.php');
	}

include ("includes/db.php");
?>
<html>
<head>
	<title>MyGym | Index</title>
	<link rel="stylesheet" type="text/css" href="styles/style2.css" media="all" />
</head>
<body style="background-image:url(images/background.jpg);background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;">
	<!-- Main Container Start -->
	<div class="wrapper">
		
		<!-- Header Start -->
		<div class="header">
			<a href="index.php"><img src="images/header12.jpg"></a>
			<!-- <img src="images/add2card.jpg" style="float: right"> -->
		</div>
		<!-- Header End -->


		<!-- Content Start -->
		<div class="content_wrapper">
			<div class="right" style="background-color:black">
			        <a href="dashboard.php">DashBoard</a>
					<a href="index.php?view_users">View Users</a>
				    <a href="index.php?view_trainers">View Trainers</a>
					<a href="index.php?add_trainers">Add Trainer</a>
					<a href="index.php?view_exercises">View Exercises</a>
					<a href="index.php?add_exercises">Add Exercise</a>
					<a href="index.php?add_package">Add Package</a>
					<a href="index.php?view_packages">View Packages</a>
					<a href="index.php?view_usershistory">View Users History</a>
					<a href="logout.php">Admin Logout</a>
			</div>
			
			<div class="left" style="background-color:black">
				<!-- Product Display Box Start -->
					<div id="products_box">
						<?php
							if (isset($_GET['view_users'])) {
								include("view_users.php");
							}
							if (isset($_GET['view_trainers'])) {
								include("view_trainers.php");
							} 
							
							if (isset($_GET['add_trainers'])) {
								include("add_trainers.php");
							}
							if (isset($_GET['view_exercises'])) {
								include("view_exercises.php");
							}
							if (isset($_GET['add_exercises'])) {
								include("add_exercises.php");
							}
							if (isset($_GET['edit_tran'])) {
								include("edit_tran.php");
							}
							if (isset($_GET['edit_exercise'])) {
								include("edit_exercises.php");
							}
							if (isset($_GET['delete_exercise'])) {
								include("delete_exercise.php");
							}
							if (isset($_GET['delete_tran'])) {
								include("delete_trainer.php");
							}
							if (isset($_GET['delete_user'])) {
								include("delete_user.php");
							}
							if (isset($_GET['add_package'])) {
								include("add_package.php");
							}
							if (isset($_GET['view_packages'])) {
								include("view_packages.php");
							} 
							if (isset($_GET['edit_package'])) {
								include("edit_package.php");
							}
							if (isset($_GET['delete_package'])) {
								include("delete_package.php");
							}
							if (isset($_GET['view_usershistory'])) {
								include("view_usershistory.php");
							}

						?>
					</div>
					<!-- Product Display Box End -->
			</div>
		</div>
		<!-- Content End -->

		<!-- footer Start -->
		<div class="footer">
			<h5 style="color:white;background-color:black; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif"> 2023 | Developed By: Rohith,Sahana</h5>
		</div>
		<!-- Footer End -->

	</div>
	<!-- Main Container End -->
</body>
</html>