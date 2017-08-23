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
	<h2>Curriculum activities</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_curact_add">Add New Data</a>
	<table border="1" id="mytable_curact">
		<tr>
			<th>Photo</th>
			<th>Caption</th>
			<th>Short Description</th>
			<th>Action</th>
		</tr>
		<?php			
			$result= mysql_query("select * from curact_tbl order by ca_id DESC" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
		?>
		<tr>
			<td>
				<img src="upload/<?php echo $row['ca_photo']; ?>" width="100px" height="100px">	
			</td>
			<td><?php echo $row['ca_cap'];?></td>
			<td><?php echo $row['ca_disc'];?></td>
			<td>
				<a href="_curact_edit.php?id=<?php echo $row['ca_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_curact_del.php?id=<?php echo $row['ca_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>