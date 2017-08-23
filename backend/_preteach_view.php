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
			return confirm('Do you want to delete this teacher\'s data ?');
		}
	</script>
</head>
<body>
	<h2>Present Teacher's Information</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_preteach_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>S.No</th>
			<th>Teacher ID</th>
			<th>Name</th>
			<th>Designation</th>
			<th>Index No</th>
			<th>Contact No</th>
			<th>Subject</th>
			<th>Photo</th>
			<th>Action</th>
		</tr>
		<?php
			$i = 0;				
			$result= mysql_query("select * from preteach_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['tech_id'];?></td>
			<td><?php echo $row['tech_name'];?></td>
			<td><?php echo $row['tech_designation'];?></td>
			<td><?php echo $row['tech_indxno'];?></td>
			<td><?php echo $row['tech_contact'];?></td>
			<td><?php echo $row['tech_sub'];?></td>
			<td>
				<?php if($row['tech_photo'] != ""): ?>
					<img src="upload/<?php echo $row['tech_photo']; ?>" width="50px" height="50px" style="border:1px solid #333333;">
				<?php else: ?>
					<img src="images/default.png" width="50px" height="50px" style="border:1px solid #333333;">
				<?php endif; ?>
			</td>
			<td>
				<a href="_preteach_edit.php?id=<?php echo $row['t_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_preteach_del.php?id=<?php echo $row['t_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>