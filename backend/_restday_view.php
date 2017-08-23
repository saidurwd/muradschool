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
	<h2>শিক্ষক/কর্মচারীদের ছুটি ব্যবস্হাপনা</h2>
	<table border="1" id="mytable2" style="border-color: red;padding: 5px;font-size: 14px;width: 100%;">
		<?php
			$i = 0;				
			$result= mysql_query("select * from restday order by rd_id desc" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr style="">
			<td style="color: gold;width:120px;padding:5px;">ক্রমিক নং : </td>
			<td style="font-weight: bold; color: blue; font-size: 30px;"><?php echo $i; ?></td>
			<td>
				<a style="padding:5px;" onClick="return confirm_del();" href="_restday_del.php?id=<?php echo $row['rd_id'];?>">Delete</a>
			</td>
		</tr>
		<tr>
			<td style="color: gold;width:160px;padding:5px;">কর্মকর্তা/ কর্মচারীর নাম : </td>
			<td><?php echo $row['rd_nam'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">পদবী: </td>
			<td><?php echo $row['rd_pos'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">বিভাগ: </td>
			<td><?php echo $row['rd_section'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">ছুটির ধরন : </td>
			<td><?php echo $row['rd_type'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">ছুটির কারন: </td>
			<td><?php echo $row['rd_cause'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">হতে: </td>
			<td>প্রাথির ছুটির সময় <?php echo $row['rd_from'];?> তারিখ হতে</td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">পর্যন্ত: </td>
			<td>প্রাথির ছুটির সময় <?php echo $row['rd_to'];?> তারিখ পর্যন্ত</td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">মোট ছুটির দিন : </td>
			<td><?php echo $row['rd_total'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">ছুটিকালীন সময়ে যোগাযোগের ঠিকানা  : </td>
			<td><?php echo $row['rd_adrs'];?></td>
		</tr>
		<tr>
			<td style="color: gold;width:120px;padding:5px;">মোবাইল/ টেলিফোন নম্বর : </td>
			<td><?php echo $row['rd_mob'];?></td>
		</tr>
		<tr></tr><tr></tr><tr></tr><tr></tr>
		<?php } ?>
	</table>
</body>
</html>