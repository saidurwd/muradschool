<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM tech_detailinfo_tbl WHERE tech_detailinfo_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM tech_detailinfo_tbl WHERE tech_detailinfo_id=$id");
	unlink("upload/".$row['tech_detailinfo_pic']);
	
	header("location: index.php?action=_student_registry_view");
	
}
else{
	header('location: index.php?action=_student_registry_view');
}


?>