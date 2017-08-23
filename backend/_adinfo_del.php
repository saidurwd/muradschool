<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM adinfo_tbl WHERE adinfo_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM adinfo_tbl WHERE adinfo_id=$id");
	unlink("upload/".$row['adinfo_file']);
	
	header("location: index.php?action=_adinfo_view");
	
}
else{
	header('location: index.php?action=_adinfo_view');
}


?>