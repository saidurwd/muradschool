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
	<h2>Position information</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_pos_add">Add New Data</a>
	<table border="1" id="mytable">
		<tr>
			<th>Position Title</th>
			<th>Download File</th>
			<th>Position information</th>
			<th>Action</th>
		</tr>
		<?php	
			//$i = 0;
			$result= mysql_query("select * from pos_tbl" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			//$i++;
		?>
		<tr>
			<td><?php echo $row['pos_title'];?></td>
			<td>
				<a target="_blank" href="upload/<?php echo $row['pos_file']; ?>">Download</a>
			</td>
			<td><?php echo $row['pos_info'];?></td>
			<td>
				<a href="_pos_edit.php?id=<?php echo $row['pos_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_pos_del.php?id=<?php echo $row['pos_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>