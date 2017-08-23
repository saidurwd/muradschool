<?php 
include('dbconnect.php');
include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Teacher Database</title>
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this data ?');
		}
	</script>
</head>
<body>
	<h2>প্রাক্তন প্রতিষ্ঠান প্রধানগনের তথ্যাবলী</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_archive_principal_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>Sl.No</th>
			<th>Name</th>
			<th>Duration</th>
			<th>Position</th>
			<th>Contact</th>
			<th>Photo</th>
			<th>Action</th>
		</tr>
		<?php
			$i=0;			
			$result= mysql_query("select * from arch_prin" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['arch_prin_nam'];?></td>
			<td><?php echo $row['arch_prin_yar'];?></td>
			<td><?php echo $row['arch_prin_pos'];?></td>
			<td><?php echo $row['arch_prin_mob'];?></td>
			<td><img src="upload/<?php echo $row['arch_prin_pto']; ?>" alt=""  width="50" height="50" /></td>
			<td>
				<a href="_archive_principal_edit.php?id=<?php echo $row['arch_prin_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_archive_principal_del.php?id=<?php echo $row['arch_prin_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>