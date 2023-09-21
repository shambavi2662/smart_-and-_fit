<?php 

session_start();
include ("includes/db.php");

?>
<html>
<head>
	<title>MyGym | Admin Login</title>
	<link rel="stylesheet" type="text/css" href="styles/login2.css">
  
</head>
<body style="background-image: url(images/conquer.jpg);
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;">
	<h1 style="color: rgba(129,230,217,1);">ADMIN LOGIN</style></h1>
  
  
<div>
  <form action="login.php" method="post">
    <label for="Aemail">Email</label>
    <input type="email" id="Aemail" name="admin_email" placeholder="Your Email...">

    <label for="Apass">Password</label>
    <input type="password" id="Apass" name="admin_pass" placeholder="Your Password...">

    
    <input type="submit" name="Admin_login" value="LOGIN">
   
    
  </form>
</div>
<button class="button" style="margin-left:450px" onclick="location.href='http://localhost/MyGym/MyGym/index1.php?' ">MAIN PAGE</button>
</body>
</html>

<?php 

	//Login Script Start
  if (isset($_POST['Admin_login'])){
    $admin_email= ($_POST['admin_email']);
    $admin_password= ($_POST['admin_pass']);
    $select_admin="SELECT * FROM admin WHERE admin_email='$admin_email' AND admin_pass='$admin_password'";
    $run_admin=mysqli_query($con, $select_admin);
    $row_count=mysqli_num_rows($run_admin);
    if ($row_count==1) {
      $_SESSION['admin_email']=$admin_email; //create session variable
      header('location: dashboard.php');
    }
    else{
      echo "<script>alert('Invalid Email or Password')</script>";
    }
  }  //Login Script End

?>