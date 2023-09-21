<?php 

include ("includes/db.php");

if (isset($_GET['edit_package'])) {
	$edit_package_id=$_GET['edit_package'];
	$sel_package="SELECT * FROM package WHERE package_id='$edit_package_id'";
	$run_package=mysqli_query($con, $sel_package);
	$row_package=mysqli_fetch_array($run_package);
	$package_up_id=$row_package['package_id'];
    $package_name=$row_package['package_name'];
	$number_of_months=$row_package['number_of_months'];
	$amount=$row_package['amount'];
}

?>
<html>
<head>
	<title>MyGym | Update Packages</title>
</head>
<body bgcolor="#999999">
	<form method="post" action="" enctype="multipart/form-data">
		<table width="794px" align="center" border="1" bgcolor="black">
			<tr>
				<td colspan="2" align="center"><h1 style="color:white">Update or Edit packages</h1></td>
			</tr>
			<tr>
				<td align="right"><b style="color:white">Name Of Package</b></td>
				<td><input type="text" name="package_name" value="<?php echo $package_name; ?>"></td>
			</tr>
			<tr>
				<td align="right"><b style="color:white">Package ID</b></td>
				<td><input type="text" name="package_id" value="<?php echo $package_up_id; ?>"></td>
			</tr>
            <tr>
				<td align="right"><b style="color:white">Number of Months</b></td>
				<td><input type="text" name="number_of_months" value="<?php echo $number_of_months; ?>"></td>
			</tr>
			
			<tr>
				<td align="right"><b style="color:white">Amount</b></td>
				<td><input type="text" name="amount" value="<?php echo $amount; ?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="update_package" value="Update Package"></td>
			</tr>
		</table>
	</form>
</body>
</html>


<?php 

	if (isset($_POST['update_package']))
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
        elseif ($amount=='') {
			echo "<script>alert('Please Fill All The Fields!')</script>";
			exit();
		}


		else{

			//Query For Inserting New Trainer Into Database.....
			$update_package = "UPDATE package SET package_name='$package_name',package_id='$package_id',number_of_months='$number_of_months',amount='$amount' WHERE package_id='$package_up_id'";
			$run_update = mysqli_query($con, $update_package);
			if ($run_update) {
				echo "<script>alert('Data Updated Successfully')</script>";
				echo "<script>window.open('index.php?view_packages','_self')</script>";
			}
			else
				echo "<script>alert('Error')</script>";
			}
			
		}
	
?>