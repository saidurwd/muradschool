<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM clg_strc WHERE clg_str_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM clg_strc WHERE clg_str_id=$id");
	unlink("upload/".$row['clg_str_photo']);
	
	header("location: index.php?action=_clg_strc_view");
	
}
else{
	header('location: index.php?action=_clg_strc_view');
}


?>