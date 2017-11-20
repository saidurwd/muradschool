<?php
include('dbconnect.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function get_date_time($date) {
    if (empty($date) || $date == '0000-00-00' || $date == '0000-00-00 00:00:00') {
        return null;
    } else {
        return date("M j, Y, g:i:s A", strtotime($date));
    }
}

$ts = strtotime(date('Y-m-d'));
$start = (date('w', $ts) == 0) ? $ts : strtotime('last sunday', $ts);
$start_date = date('Y-m-d', $start);
$end_date = date('Y-m-d', strtotime('next saturday', $start));
if (empty($_POST['start_date'])) {
    $start_date = $start_date;
} else {
    $start_date = $_POST['start_date'];
}
if (empty($_POST['end_date'])) {
    $end_date = $end_date;
} else {
    $end_date = $_POST['end_date'];
}
if (empty($_POST['class'])) {
    $class = 1;
} else {
    $class = $_POST['class'];
}
?>
<!DOCTYPE HTML>
<html lang="bn-BD">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="dshe0000.css" />
        <link rel="stylesheet" href="mystyle.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <title>School Internal Result</title>
        <script type="text/javascript">
            function PrintDiv() {
                var divToPrint = document.getElementById('divToPrint');
                var popupWin = window.open('', '_blank');
                popupWin.document.open();
                popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
                popupWin.document.close();
            }
        </script>
        <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#attendance').DataTable();
            });
        </script>
    </head>
    <body bgcolor="#FFFFFF">
        <div  id="one" style="position:absolute; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"> 
        </div>
        <p align="right">
            <input type="button" value="Close Window" onClick="javascript:window.close()" style="font-size: 14pt; font-family: Verdana; color: #000000">
        </p>
        <div align="center"> 
            <?PHP include("pdf/head.php"); ?>
            <?php include("pdf/motionmenu.php"); ?>
            <div class="maincontent" id="">
                <h2>Search  Attendance</h2>
                <p style="float: right; margin: 7px;"><a href="#" onClick="PrintDiv();"><img src="images/Print-Icon1.png" alt="" style="float: right;" />Print this mark-sheet by click in here...</a></p>
                <form method="post" action="">
                    <table>
                        <tr>
                            <td>
                                Class: 
                                <select name="class" id="class" style="width: 100px;">
                                    <option value="99" <?php
                                    if ($class == 99) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Teacher's</option>
                                    <option value="1" <?php
                                    if ($class == 1) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Class 1</option>
                                    <option value="2" <?php
                                    if ($class == 2) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Class 2</option>
                                    <option value="3" <?php
                                    if ($class == 3) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Class 3</option>
                                    <option value="4" <?php
                                    if ($class == 4) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Class 4</option>
                                    <option value="5" <?php
                                    if ($class == 5) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Class 5</option>
                                    <option value="6" <?php
                                    if ($class == 6) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Class 6</option>
                                    <option value="7" <?php
                                    if ($class == 7) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Class 7</option>
                                    <option value="8" <?php
                                    if ($class == 8) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Class 8</option>
                                    <option value="9" <?php
                                    if ($class == 9) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Class 9</option>
                                    <option value="10" <?php
                                    if ($class == 10) {
                                        echo 'selected="selected"';
                                    }
                                    ?> >Class 10</option> 
                                </select>
                            </td>
                            <td>From: <input type="text" name="start_date" id="start_date" value="<?php echo $start_date; ?>" size="15"></td>
                            <td>To: <input type="text" name="end_date" id="end_date" value="<?php echo $end_date; ?>" size="15"></td>
                            <td><input type="submit" value="Search"></td>
                        </tr>
                    </table>
                </form>
                <?php
                if ($class == 99) {                                
                    $query = mysql_query("SELECT rc.`t_id`,rc.`tech_id`,rc.`tech_name`,rc.`tech_designation`,rc.`tech_indxno`,rc.`tech_contact`,rc.`tech_sub`,ap.`log_time`, MIN(ap.`log_time`) AS intime, MAX(ap.`log_time`) AS outtime FROM `preteach_tbl` rc
                                                            LEFT OUTER JOIN `attendance_api` ap ON rc.`device_id` = ap.`user_did` 
                                                            WHERE DATE(ap.log_time) BETWEEN '$start_date' AND '$end_date' 
                                                            GROUP BY ap.`user_did`, DATE_FORMAT(ap.`log_time`, '%Y-%m-%d') 
                                                            ORDER BY rc.`t_id` ASC, ap.`log_time` ASC ") or die('could not search');
                    $output = 'No result found. <a href="_attendance_search.php">Please Again search</a>';
                    ?>               
                    <div id="divToPrint" class="resulttbl">
                        <table id="attendance" class="display" width="100%" cellspacing="0">
                            <thead>
                                <tr>  	 	 	 	 	 	
                                    <th>S.No</th>
                                    <th>Teacher ID</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Index No</th>
                                    <th>Contact No</th>
                                    <th>Subject</th>
                                    <th>In Time</th>
                                    <th>Out Time</th>
                                </tr>
                            </thead>
                            <tbody>                                                                                            
                                <?php
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['t_id']; ?></td>
                                        <td><?php echo $row['tech_id']; ?></td>
                                        <td><?php echo $row['tech_name']; ?></td>
                                        <td><?php echo $row['tech_designation']; ?></td>
                                        <td><?php echo $row['tech_indxno']; ?></td>
                                        <td><?php echo $row['tech_contact']; ?></td>
                                        <td><?php echo $row['tech_sub']; ?></td>
                                        <td><?php echo get_date_time($row['intime']); ?></td>
                                        <td><?php echo get_date_time($row['outtime']); ?></td>
                                    </tr>
                                    <?php
                                }
                                echo '</tbody>';
                                echo '</table>';
                                echo '</div>';
                                ?>
                                <?php
                                exit();
                                ?>
                                </td>
                            </tbody>
                        </table>
                    </div>
                <?php
                } else {
                    $query = mysql_query("SELECT rc.`std_name`,rc.`std_cls`,rc.`std_roll`,rc.`std_sft`,rc.`std_sec`,rc.`std_grp`,rc.`std_gen`,ap.`log_time`, MIN(ap.`log_time`) AS intime, MAX(ap.`log_time`) AS outtime FROM `std_class" . $class . "_tbl` rc
                    LEFT OUTER JOIN `attendance_api` ap ON rc.`student_device_id` = ap.`user_did` 
                    WHERE DATE(ap.log_time) BETWEEN '$start_date' AND '$end_date' 
                    GROUP BY ap.`user_did`, DATE_FORMAT(ap.`log_time`, '%Y-%m-%d') 
                    ORDER BY rc.`s_id` ASC, ap.`log_time` ASC ") or die('could not search');
                    $output = 'No result found. <a href="_attendance_search.php">Please Again search</a>';
                    ?>               
                    <div id="divToPrint" class="resulttbl">
                        <table id="attendance" class="display" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Roll</th>
                                    <th>Shift</th>
                                    <th>Section</th>
                                    <th>Group</th>
                                    <th>Gender</th>
                                    <th>In Time</th>
                                    <th>Out Time</th>
                                </tr>
                            </thead>
                            <tbody>                                                                                            
                                <?php
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['std_name']; ?></td>
                                        <td><?php echo $row['std_cls']; ?></td>
                                        <td><?php echo $row['std_roll']; ?></td>
                                        <td><?php echo $row['std_sft']; ?></td>
                                        <td><?php echo $row['std_sec']; ?></td>
                                        <td><?php echo $row['std_grp']; ?></td>
                                        <td><?php echo $row['std_gen']; ?></td>
                                        <td><?php echo get_date_time($row['intime']); ?></td>
                                        <td><?php echo get_date_time($row['outtime']); ?></td>
                                    </tr>
                                    <?php
                                }
                                echo '</tbody>';
                                echo '</table>';
                                echo '</div>';
                                ?>
                                <?php
                                exit();
                                ?>
                                </td>
                            </tbody>
                        </table>
                    </div>
<?php } ?>

            </div>
    </body>
</html>
