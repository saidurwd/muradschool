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
	<h2>Gallery Photos</h2>
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_gal_add">Add New slider</a>
	<table border="1" id="mytable_curact">
		<tr>
			<th>Gallery Photo</th>
			<th>Caption</th>
			<th>Action</th>
		</tr>
		<?php	
			//$i = 0;
			$result= mysql_query("select * from gallary_tbl order by gal_id desc" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			//$i++;
		?>
		<tr>
			<td><img src="upload/<?php echo $row['gal_photo']; ?>" width="50px" height="50px"></td>
			<td><?php echo $row['gal_cap'];?></td>
			<td>
				<a href="_gal_edit.php?id=<?php echo $row['gal_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_gal_del.php?id=<?php echo $row['gal_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>