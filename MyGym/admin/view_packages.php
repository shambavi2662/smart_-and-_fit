<html>
<head>
	<title>MyGym | View Packages</title>
<style type="text/css">
	table{
		background-color: black;
	}
	tr,th{
		border: 2px solid white;
	}
</style>
</head>
<body>
	<?php
		if(isset($_GET['view_packages'])) { 
	?>
	<table align="center" width="794" style="color:white;">
		<tr align="center">
			<td colspan="6"><h2>View All Packages</h2><br></td>
		</tr>
		<tr>
            <th>Package Number</th>
			<th>Package ID</th>
			<th>Package Name</th>
			<th>Number of Months</th>
			<th>Amount</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php 
		$i=0;
			$sel_package="SELECT * FROM package";
			$run_package=mysqli_query($con, $sel_package);
			while ($row_package=mysqli_fetch_array($run_package)) {
				$package_id=$row_package['package_id'];
				$package_name=$row_package['package_name'];
				$number_of_months=$row_package['number_of_months'];
				$amount=$row_package['amount'];

				$i++;
			
		?>
		<tr align="center">
			<td><?php echo $i; ?></td>
            <td><?php echo $package_id; ?></td>
			<td><?php echo $package_name; ?></td>
			<td><?php echo $number_of_months; ?></td>
			<td><?php echo $amount; ?></td>
			<td><a href="index.php?edit_package=<?php echo $package_id; ?>">Edit</a></td>
			<td><a href="index.php?delete_package=<?php echo $package_id; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
	<?php }
	?>
</body>
</html>