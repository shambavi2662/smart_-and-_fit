<html>
<head>
	<title>MyGym | View Users History</title>
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
		if(isset($_GET['view_usershistory'])) { 
	?>
	<table align="center" width="794" style="color:white;">
		<tr align="center">
			<td colspan="6"><h2>View All Users</h2><br></td>
		</tr>
		<tr>
			<th>User ID</th>
			<th>User Name</th>
			<th>Action</th>
			<th>Date Of Join</th>
			
		</tr>
		<?php 
		$i=0;
			$sel_logs="SELECT * FROM logs";
			$run_logs=mysqli_query($con, $sel_logs);
			while ($row_logs=mysqli_fetch_array($run_logs)) {
				$user_id=$row_logs['user_id'];
				$user_name=$row_logs['user_name'];
				$action=$row_logs['action'];
				$cdate=$row_logs['cdate'];

				$i++;
			
		?>
		<tr align="center">
			
			<td><?php echo $user_id ?></td>
			<td><?php echo $user_name; ?></td>
			<td><?php echo $action; ?></td>
            <td><?php echo $cdate; ?></td>
			
		</tr>
		<?php } ?>
	</table>
	<?php }
	?>
</body>
</html>