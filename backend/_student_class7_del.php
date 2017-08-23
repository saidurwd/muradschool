<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];

	$result = mysql_query("SELECT * FROM std_class7_tbl WHERE s_id=$id");
	$row = mysql_fetch_array($result);
	mysql_query("DELETE FROM std_class7_tbl WHERE s_id=$id");
	unlink("upload/".$row['std_photo']);
	
	header("location: index.php?action=_student_class7_view");
}
else{
	header('location: index.php?action=_student_class7_view');
}


?>