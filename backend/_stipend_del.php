<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM stipend_tbl WHERE n_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM stipend_tbl WHERE n_id=$id");
	unlink("upload/".$row['n_download']);
	
	header("location: index.php?action=_stipend_view");
	
}
else{
	header('location: index.php?action=_stipend_view');
}


?>