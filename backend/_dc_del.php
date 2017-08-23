<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM dc_tbl WHERE dc_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM dc_tbl WHERE dc_id=$id");
	unlink("upload/".$row['dc_doc']);
	
	header("location: index.php?action=_dc_view");
	
}
else{
	header('location: index.php?action=_dc_view');
}


?>