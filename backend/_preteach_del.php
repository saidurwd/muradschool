<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM preteach_tbl WHERE t_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM preteach_tbl WHERE t_id=$id");
	unlink("upload/".$row['tech_photo']);
	
	header("location: index.php?action=_preteach_view");
	
}
else{
	header('location: index.php?action=_preteach_view');
}


?>