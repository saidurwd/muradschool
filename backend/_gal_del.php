<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM gallary_tbl WHERE gal_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM gallary_tbl WHERE gal_id=$id");
	unlink("upload/".$row['gal_photo']);
	
	header("location: index.php?action=_gal_view");
	
}
else{
	header('location: index.php?action=_gal_view');
}


?>