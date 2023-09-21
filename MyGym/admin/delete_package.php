<?php 

include ("includes/db.php");

	if (isset($_GET['delete_package'])) {
		$delete_id=$_GET['delete_package'];

		$delete_package="DELETE FROM package WHERE package_id='$delete_id'";
		$run_delete=mysqli_query($con,$delete_package);
		if ($run_delete) {
			echo "<script>alert('Deleted Successfully!')</script>";
			echo "<script>window.open('index.php?view_packages','_self')</script>";
		}

	}

?>