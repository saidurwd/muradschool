<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM curact_tbl WHERE ca_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM curact_tbl WHERE ca_id=$id");
	unlink("upload/".$row['staff_photo']);
	
	header("location: index.php?action=_curact_view");
	
}
else{
	header('location: index.php?action=_curact_view');
}


?>