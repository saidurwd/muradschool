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
	<h2>Library Book Details</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_lib_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>ID</th>
			<th>ISBN</th>
			<th>Publisher</th>
			<th>Title</th>
			<th>Description</th>
			<th>Shot note</th>
			<th>Action</th>
		</tr>
		<?php
			//$i = 0;				
			$result= mysql_query("select * from lib_tbl order by lib_id desc" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			//$i++;
		?>
		<tr>	
			<td><?php echo $row['lib_id_no'];?></td>
			<td><?php echo $row['lib_isbn'];?></td>
			<td><?php echo $row['lib_pub'];?></td>
			<td><?php echo $row['lib_title'];?></td>
			<td><?php echo $row['lib_desc'];?></td>
			<td><?php echo $row['lib_sd'];?></td>
			<td>
				<a href="_lib_edit.php?id=<?php echo $row['lib_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_lib_del.php?id=<?php echo $row['lib_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>