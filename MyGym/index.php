<?php 

session_start();

if($_SESSION['user_email']==true){
	}
	else{
		header('location: login.php');
	}

include ("includes/db.php");
include ("functions/functions.php");
?>

<html>
<head>
	<title>MyGym | Index</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all" />
</head>
<body style="background-image:url(images/background.jpg);background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;">
	<!-- Main Container Start -->
	<div class="main_wrapper">
		
		<!-- Header Start -->
		<div class="header_wrapper">
			<a href="index.php"><img src="images/logo2.jpg"></a>
		</div>
		<!-- Header End -->
		
		<!-- NavBar Start -->
		<div id="navbar"style="background-color:black">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="my_account.php">My Account</a></li>
			</ul>

			<div id="login-btn-signup">
					<li><a href="logout.php">Logout</a></li>
			</div>
		</div>
		<!-- NavBar End -->
		
		<!-- Content Start -->
		<div class="content_wrapper">
			<div id="left_sidebar">
				<div id="sidebar_title">Days</div>
				<ul id="days">
					<?php  
						getDays();
					?>
				</ul>

				<div id="sidebar_title">Exercises</div>
				<ul id="days">
					<?php 
						getExercise();
					?>
				</ul>
			</div>
			<div id="right_content">
				<div id="headline">
					<div id="headline_content">
						<h1 style="color: white; text-align:center;"><center>BEAST MODE ON</center></h1>
					</div>
				</div>
					<!-- Product Display Box Start -->
					<div id="products_box" style="background-color:black;">
						<?php
							get_All_Exercises();
							get_Day_Exercises();
							get_Exer_Exercises();
						?>
					</div>
					<!-- Product Display Box End -->
			</div>
		</div>
		<!-- Content End -->

		<!-- footer Start -->
		<div class="footer">
			<h5 style="color:white; padding-top:30px; text-align:center; font-family: Verdana, Geneva, sans-serif"> 2023 | Developed By: Rohith,Sahana</h5>
		</div>
		<!-- Footer End -->

	</div>
	<!-- Main Container End -->
</body>
</html>