<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM notice_tbl WHERE n_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM notice_tbl WHERE n_id=$id");
	unlink("upload/".$row['n_download']);
	
	header("location: index.php?action=_notice_view");
	
}
else{
	header('location: index.php?action=_notice_view');
}


?>