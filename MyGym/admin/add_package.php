<?php 

include ("includes/db.php");

?>
<html>
<head>
	<title>MyGym | Add Packages</title>
</head>
<body bgcolor="#999999">
	<form method="post" action="add_package.php" enctype="multipart/form-data">
		<table width="794px" align="center" border="1" bgcolor="black">
			<tr>
				<td colspan="2" align="center"><h1 style="color:white">Add New Package</h1></td>
			</tr>
			<tr>
				<td align="right"><b style="color:white">Name Of Package</b></td>
				<td><input type="text" name="package_name"></td>
			</tr>
			<tr>
				<td align="right"><b style="color:white">Package ID</b></td>
				<td><input type="text" name="package_id"></td>
			</tr>
			
			<tr>
				<td align="right"><b style="color:white">Number Of Months</b></td>
				<td><input type="text" name="number_of_months"></td>
			</tr>
            <tr>
				<td align="right"><b style="color:white">Amount</b></td>
				<td><input type="text" name="amount"></td>
			</tr>


			<tr>
				<td colspan="2" align="center"><input type="submit" name="add_package" value="Add Package"></td>
			</tr>
		</table>
	</form>
</body>
</html>


<?php 

	if (isset($_POST['add_package']))
	{

		//Text Data Variables
		$package_name= $_POST['package_name'];
		$package_id= $_POST['package_id'];
		$number_of_months= $_POST['number_of_months'];
        $amount= $_POST['amount'];

		//Validations
		if($package_name==''){
			echo "<script>alert('Please Fill All The Fields!')</script>";
			exit();
		}
		elseif ($package_id=='') {
			echo "<script>alert('Please Fill All The Fields!')</script>";
			exit();
		}
		elseif ($number_of_months=='') {
			echo "<script>alert('Please Fill All The Fields!')</script>";
			exit();
		}
        elseif ( $amount=='') {
			echo "<script>alert('Please Fill All The Fields!')</script>";
			exit();
		}

		else{

			//Query For Inserting New Trainer Into Database.....
			$insert_package = "insert into package(package_name, package_id, number_of_months, amount) values('$package_name','$package_id','$number_of_months','$amount')";
			$run_package = mysqli_query($con, $insert_package);
			if ($run_package) {
				echo "<script>alert('1 New Package Added Successfully')</script>";
				echo "<script>window.open('index.php?add_package','_self')</script>";
			}
			else{
				echo "<script>alert('Error')</script>";
			}
			
		}
	}
?>