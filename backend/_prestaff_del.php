<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM prestaff_tbl WHERE stf_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM prestaff_tbl WHERE stf_id=$id");
	unlink("upload/".$row['staff_photo']);
	
	header("location: index.php?action=_prestaff_view");
	
}
else{
	header('location: index.php?action=_prestaff_view');
}


?>