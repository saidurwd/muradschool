<?php	
include"dbconnect.php";
		
	$result= mysql_query("select * from hdr_tbl" ) or die (mysql_error());
	while ($row = mysql_fetch_array ($result)){
?>
<h2 class="title"><a href="#"><?php echo $row['hdr_en'];?></a></h2>
<p class="meta"><?php print  date("F j, Y, g:i a"); ?></p>
<div class="entry">
<p></p>
<p></p>
<p>
<?php //print_r($_SESSION); ?>
<?php if(empty($_SESSION['userName'])){ ?>
<form action="index.php?action=home" method="post" onsubmit="return checkLogin();">
<h2>User Login</h2><br />
<table width="400" border="1" cellspacing="0" cellpadding="4">
  <tr>
    <td><strong>Login Name</strong></td>
    <td><input type="text" name="userName" id="userName" value="" /></td>
  </tr>
  <tr>
    <td><strong>Password</strong></td>
    <td><input type="password" name="Password" id="Password" value="" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submitForm" value="Login" /></td>
  </tr>
</table>
</form>
<?php } else { ?>
<h2 style="text-align:center;">Now, You are loged in !</h2>
<h1 style="color: dodgerblue;font-size: 30px;text-align: center;text-transform: none;">Welcome to your control panel</h1>
<?php } ?>
</p>
</div>


<?php
if($_REQUEST['submitForm']=='Login'){
$query = mysql_query("SELECT * FROM userinfo WHERE userName='".$_REQUEST['userName']."' && Password= '".md5($_REQUEST['Password'])."' ");
$row = mysql_fetch_assoc($query);
$numrows = mysql_num_rows($query);
//print $numrows;
	if($numrows>=1){
	$_SESSION['userName'] = $row['userName'];
	$_SESSION['UserType'] = $row['UserType'];
	$_SESSION['Email'] = $row['Email'];
	$_SESSION['Name'] = $row['Name'];
	$_SESSION['userID'] = $row['userID'];
	panRedirect('index.php?action=home');
	} else {
	print '<h3 style="color:#FF0000; padding:20px 0px 20px 0px; font-size:15px; font-weight:bold; text-align:center;">আপনি ভুল লগিন নেম অথবা পাসওয়াড ব্যবহার করছেন, দয়া করে সঠিকটি ব্যবহার করুন</h3>';
	}
}
?>
<?php } ?>