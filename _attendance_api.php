<?php

include('dbconnect.php');

//formating date
//$date = new DateTime();
//$date = new DateTime('now', new DateTimezone('Asia/Dhaka'));
$date = new DateTime('now', new DateTimezone('UTC'));
$date->setTimestamp(@$_REQUEST['date_time']);

$user_did = @$_REQUEST['card_no'];
$log_time = $date->format('Y-m-d H:i:s');
$device_id = @$_REQUEST['device_id'];
if (!empty($_REQUEST['card_no']) && !empty($log_time) && !empty($device_id)) {
    $sql = "INSERT INTO `attendance_api` (`user_did`,`log_time`,`device_id`) VALUES ($user_did,'" . $log_time . "','" . $device_id . "')";
    $rs_result = mysql_query($sql);
}

//$query = "SELECT * FROM `attendance_api`";
//$result = mysql_query($query);
//while ($row = mysql_fetch_array($result)) {
//    echo $row['user_did'] . "<br />";
//}

//http://www.gazirhaths.edu.bd/sw/_attendance_api.php?device_id=1&card_no=100003&date_time=1503595833-> Fail  
//5. make sure your api is http:///URL?device_id=xxx&card_no=xxxxxxxx&date_time=xxxxxxx(unixdatetime)
//http://localhost:8888/muradschool/_attendance_api.php?card_no=10001&date_time=1171502725&device_id=1
//http://www.jorabarighs.edu.bd/sw/_attendance_api.php?card_no=10001&date_time=1171502725&device_id=1
?>