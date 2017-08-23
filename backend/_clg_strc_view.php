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
	<a style="float:right;color:aqua;font-size:15px;padding:10px;" href="index.php?action=_clg_strc_add">Add New Data</a>
	<table border="1" id="mytable_curact">
		<tr>
			<th style="width:600px">College structure information</th>
			<th style="width:100px">Action</th>
		</tr>
		<?php			
			$result= mysql_query("select * from clg_strc order by clg_str_id desc" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
		?>
		<tr>
			<td>
				<h2>Title: <?php echo $row['clg_str_title'];?></h2>
				<p>Date: <?php echo $row['clg_str_date'];?></p>
				<p>Photo:</p>
				<img src="upload/<?php echo $row['clg_str_photo']; ?>" width="550px" height="300px">
				<p>Caption: <?php echo $row['clg_str_cap'];?></p>
				<p style="line-height:20px">Description: <?php echo $row['clg_str_desc'];?></p>
			</td>
			<td>
				<a href="_clg_strc_edit.php?id=<?php echo $row['clg_str_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_clg_strc_del.php?id=<?php echo $row['clg_str_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>