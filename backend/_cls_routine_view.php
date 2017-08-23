<?php 
ob_start();
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
	<h2>Science Group Routine</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_cls_routine_add">Add New Data</a>
	<table border="1" id="mytable_curact">
		<tr>
			<th>Group</th>
			<th>Routine</th>
			<th>Action</th>
		</tr>
		<?php			
			$result= mysql_query("select * from cls_routain" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
		?>
		<tr>
			<td><?php echo $row['cr_title'];?></td>
			<td><img src="upload/<?php echo $row['cr_photo']; ?>" width="300px" height="300px"></td>
			<td>
				<a href="_cls_routine_edit.php?id=<?php echo $row['cr_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_cls_routine_del.php?id=<?php echo $row['cr_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>