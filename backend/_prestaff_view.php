<?php
include('dbconnect.php');
include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Staff Database</title>
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this staff\'s data ?');
		}
	</script>
</head>
<body>
	<h2>Present Staff's Information</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_prestaff_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>S.No</th>
			<th>Name</th>
			<th>Designation</th>
			<th>Index No</th>
			<th>Contact No</th>
			<th>Photo</th>
			<th>Action</th>
		</tr>
		<?php
			$i = 0;				
			$result= mysql_query("select * from prestaff_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['staff_name'];?></td>
			<td><?php echo $row['staff_designation'];?></td>
			<td><?php echo $row['staff_indxno'];?></td>
			<td><?php echo $row['staff_contact'];?></td>
			<td>
				<?php if($row['staff_photo'] != ""): ?>
					<img src="upload/<?php echo $row['staff_photo']; ?>" width="50px" height="50px" style="border:1px solid #333333;">
				<?php else: ?>
					<img src="images/default.png" width="50px" height="50px" style="border:1px solid #333333;">
				<?php endif; ?>
			</td>
			<td>
				<a href="_prestaff_edit.php?id=<?php echo $row['stf_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_prestaff_del.php?id=<?php echo $row['stf_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>