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
	<h2>Complain List</h2>
	<table border="1" id="mytable2" style="border-color: red;padding: 5px;font-size: 14px;">
		<?php
			$i = 0;				
			$result= mysql_query("select * from compln_tbl order by compln_id desc" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr style="">
			<td style="color: gold;width:120px;padding:5px;">Serial no: </td>
			<td style="font-weight: bold; color: blue; font-size: 30px;"><?php echo $i; ?></td>
			<td>
				<a style="padding:5px;" onClick="return confirm_del();" href="_compln_del.php?id=<?php echo $row['compln_id'];?>">Delete</a>
			</td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Student Name: </td>
			<td><?php echo $row['compln_st_nam'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Father's name: </td>
			<td><?php echo $row['compln_fath_nam'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Class: </td>
			<td><?php echo $row['compln_cls'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Group: </td>
			<td><?php echo $row['compln_grp'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Year: </td>
			<td><?php echo $row['compln_yer'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Complain Title: </td>
			<td><?php echo $row['compln_title'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Complain Description: </td>
			<td><?php echo $row['compln_desc'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">Date: </td>
			<td><?php echo $row['compln_date'];?></td>
		</tr>
		<tr></tr><tr></tr><tr></tr><tr></tr>
		<?php } ?>
	</table>
</body>
</html>