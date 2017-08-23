<?php 
include('dbconnect.php');
include('_admin_session.php');

if(isset($_POST['form1'])){
	$acc_date = $_POST['acc_date'];
	$acc_desc = $_POST['acc_desc'];
	$acc_amo = $_POST['acc_amo'];
	$acc_dr_cr = $_POST['acc_dr_cr'];
	$acc_total = $_POST['acc_total'];
	
	$result = mysql_query("insert into accounts (acc_date, acc_desc, acc_amo, acc_dr_cr, acc_total) values('$acc_date','$acc_desc','$acc_amo','$acc_dr_cr','$acc_total')")or die(mysql_error());
	
	if ($result) {
		echo ("<p style='font-size:20px;'>Accounts Data input successfully</p>");
	} else {
		echo ("<p style='font-size:20px;'>Accounts Data input Failed</p>");
	}
}
//header("location: index.php?action=_accounts_view");

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>প্রতিষ্ঠানের একাউন্টস</title>
	<script type="text/javascript">
		function confirm_del() {
			return confirm('Do you want to delete this data ?');
		}
	</script>
</head>
<body>
	<h2>প্রতিষ্ঠানের একাউন্টস</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>তারিখ: </td>
				<td><input type="text" name="acc_date" placeholder="ex: ১২/০৯।২০১৫ " required /></td>
			</tr>
			<tr>
				<td>টাকার বিবরণ: </td>
				<td><input type="text" name="acc_desc" placeholder="ex: টাকার বিবরণ লিখুন " required /></td>
			</tr>
			<tr>
				<td>পরিমান: </td>
				<td><input type="text" name="acc_amo" placeholder="ex: ৪,০০০ /=" required /></td>
			</tr>
			<tr>
				<td>জমা/ খরচ: </td>
				<td>
					<select name="acc_dr_cr" id="">
						<option value="--Select--">--Select A Option--</option>
						<option value="জমা">জমা</option>
						<option value="খরচ">খরচ</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>মোট পরিমাণ: </td>
				<td><input type="text" name="acc_total" placeholder="ex: ১২,০০০ /=" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="সেভ করুন" name="form1"/></td>
			</tr>
		</table>
	</form>
	<br />
	<table border="1" id="mytable">
		<tr>
			<th>ক্রমিক নং</th>
			<th>তারিখ</th>
			<th>টাকার বিবরণ</th>
			<th>পরিমান</th>
			<th>জমা/ খরচ</th>
			<th>মোট পরিমাণ</th>
			<th>নিয়ন্ত্রণ করুন</th>
		</tr>
		<?php
			$i = 0;				
			$result= mysql_query("select * from accounts" ) or die (mysql_error());
			while ($row = mysql_fetch_array ($result)){
			$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $row['acc_date'];?></td>
			<td><?php echo $row['acc_desc'];?></td>
			<td><?php echo $row['acc_amo'];?>/=</td>
			<td><?php echo $row['acc_dr_cr'];?></td>
			<td><?php echo $row['acc_total'];?>/=</td>
			<td>
				<a href="_accounts_edit.php?id=<?php echo $row['acc_id'];?>">এডিট </a> | 
				<a onClick="return confirm_del();" href="_accounts_del.php?id=<?php echo $row['acc_id'];?>">ডিলিট </a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>