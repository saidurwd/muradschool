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
	<h2>Document Application List</h2>
	<table border="1" id="mytable2" style="border-color: red;padding: 5px;font-size: 14px;width: 690px;">
		<?php
			$i = 0;				
			$result= mysql_query("select * from doc_tbl order by doc_id desc" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td style="color: #00aede;width:50px;padding:5px;">Serial no: <span style="font-weight: bold; color: red; font-size: 30px;"><?php echo $i; ?></span></td>
			<td style="padding:5px;"><a onClick="return confirm_del();" href="_documentation_del.php?id=<?php echo $row['doc_id'];?>">You can Delete <?php echo $row['doc_st_nam'];?> Document's information in here...</a></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Student Name: </td>
			<td><?php echo $row['doc_st_nam'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Father's name: </td>
			<td><?php echo $row['doc_ft_nam'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Mother's name: </td>
			<td><?php echo $row['doc_mt_nam'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Roll no: </td>
			<td><?php echo $row['doc_roll'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Class: </td>
			<td><?php echo $row['doc_cls'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Group: </td>
			<td><?php echo $row['doc_group'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Year: </td>
			<td><?php echo $row['doc_yar'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Document Type: </td>
			<td><?php echo $row['doc_type'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Date: </td>
			<td><?php echo $row['doc_date'];?></td>
		</tr>
		<tr>
			<td style="color: #00aede;width:120px;padding:5px;">Contact no: </td>
			<td><?php echo $row['doc_mob'];?></td>
		</tr>
		<tr></tr><tr></tr><tr></tr><tr></tr>
		<?php } ?>
	</table>
</body>
</html>