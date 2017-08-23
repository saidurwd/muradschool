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
	<h2>Public exam/Student/Guardian Panel List</h2>
	<table border="1" id="mytable2" style="border-color: red;padding: 5px;font-size: 14px;">
		<?php
			$i = 0;				
			$result= mysql_query("select * from pnl_tbl order by pnl_id desc" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr style="">
			<td style="color: gold;width:120px;padding:5px;">Serial no: </td>
			<td style="font-weight: bold; color: blue; font-size: 30px;"><?php echo $i; ?></td>
			<td>
				<a style="padding:5px;" onClick="return confirm_del();" href="_panel_del.php?id=<?php echo $row['pnl_id'];?>">Delete</a>
			</td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Name: </td>
			<td><?php echo $row['pnl_nam'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Email: </td>
			<td><?php echo $row['pnl_email'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Panel List: </td>
			<td><?php echo $row['pnl_list'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Blog Title: </td>
			<td><?php echo $row['pnl_title'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Blog Details: </td>
			<td><?php echo $row['pnl_desc'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Date: </td>
			<td><?php echo $row['pnl_date'];?></td>
		</tr>
		<tr></tr><tr></tr><tr></tr><tr></tr>
		<?php } ?>
	</table>
</body>
</html>