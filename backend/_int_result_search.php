<?php
include('dbconnect.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE HTML>
<html lang="bn-BD">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="dshe0000.css" />
        <link rel="stylesheet" href="mystyle.css" />
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
    </head>
    <body bgcolor="#FFFFFF">
        <div  id="one" style="position:absolute; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"> 
        </div>
        <div align="center"> 

            <div class="maincontent" id="">
                <h2>Search Madrasah Internal Result...</h2>
                <table cellspacing="0" cellpadding="0" width="100%" border="0" style="-moz-border-bottom-colors: none;-moz-border-left-colors: none;-moz-border-right-colors: none;    -moz-border-top-colors: none;border-color:-moz-use-text-color;border-image: none;border-left: medium none;border-right: medium none;    border-style: solid none;border-width: 5px medium;">
                    <tbody>
                    <td>
                        <form method="post" action="">
                            <table cellspacing="2" cellpadding="2" width="100%" border="0" bgcolor="#FFFFFF">
                                <tbody>
                                    <tr valign="top" align="left">
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr valign="top" align="left">
                                        <td align="right" class="t3">&nbsp;</td>
                                        <td valign="top">&nbsp;</td>
                                        <td valign="top">&nbsp;</td>
                                    </tr>
                                    <tr valign="top" align="left">
                                        <td width="45%" align="right" style="font-weight: bold;">Year : </td>
                                        <td width="1%" valign="top">&nbsp;</td>
                                        <td width="54%" valign="top">
                                            <select name="year_search" style="background-color: #f4f0f2;
                                                    border: 1px solid #999;
                                                    border-radius: 4px;
                                                    color: #000;
                                                    font-family: Verdana,Arial,Helvetica,sans-serif;
                                                    font-size: 12px;
                                                    font-weight: normal;
                                                    padding: 3px;
                                                    text-decoration: none;
                                                    width: 150px;">
                                                <option value="-">--select one--</option>
                                                <?php
                                                $res_year = $row['res_year'];
                                                $result = mysql_query("select DISTINCT(res_year) AS res_year from result_tbl") or die(mysql_error());
                                                while ($row = mysql_fetch_array($result)) {
                                                    ?>
                                                    <option value="<?php echo $row['res_year']; ?>"><?php echo $row['res_year']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr valign="top" align="left">
                                        <td width="45%" align="right" style="font-weight: bold;">Examination : </td>
                                        <td width="1%" valign="top">&nbsp;</td>
                                        <td width="54%" valign="top">
                                            <select name="class_search" style="background-color: #f4f0f2;
                                                    border: 1px solid #999;
                                                    border-radius: 4px;
                                                    color: #000;
                                                    font-family: Verdana,Arial,Helvetica,sans-serif;
                                                    font-size: 12px;
                                                    font-weight: normal;
                                                    padding: 3px;
                                                    text-decoration: none;
                                                    width: 150px;">
                                                <option value="-">--select one--</option>
                                                <?php
                                                $res_class = $row['res_class'];
                                                $result = mysql_query("select DISTINCT(res_class) AS res_class from result_tbl") or die(mysql_error());
                                                while ($row = mysql_fetch_array($result)) {
                                                    ?>
                                                    <option value="<?php echo $row['res_class']; ?>"><?php echo $row['res_class']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr valign="top" align="left">
                                        <td align="right" style="font-weight: bold;">Roll No.: </td>
                                        <td width="1%" valign="top">&nbsp;</td>
                                        <td valign="top">
                                            <input type="text" size="15" name="roll_search" style="background-color: #f4f0f2;
                                                   border: 1px solid #999;
                                                   border-radius: 4px;
                                                   color: #000;
                                                   font-family: Verdana,Arial,Helvetica,sans-serif;
                                                   font-size: 12px;
                                                   font-weight: normal;
                                                   padding: 3px;
                                                   text-decoration: none;
                                                   width: 140px;">
                                        </td>
                                    </tr>
                                    <tr valign="top" align="left">
                                        <td align="center" colspan="3">
                                            <input type="submit" value="Submit" name="Submit" style="margin-left: 160px; font-size: 13px;">
                                        </td>
                                    </tr>
                                    <tr valign="top" align="left">
                                        <td colspan="3"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php
                            if (isset($_POST['roll_search'])) {
                                if (empty($_POST['roll_search'])) {
                                    echo'<p style="margin: 0px; text-align: center; padding-bottom: 10px; background:#fff; color: red; font-size: 15px;">Please enter your Roll number</p>';
                                } else {
                                    $searchyear = $_POST['year_search'];
                                    $searchclass = $_POST['class_search'];
                                    $searchroll = $_POST['roll_search'];
                                    $searchroll = preg_replace("#[^0-9a-z]#i", "", $searchroll);
                                    $query = mysql_query("SELECT * from result_tbl WHERE res_roll = " . $searchroll . "  AND res_class = '" . $searchclass . "' AND res_year = '" . $searchyear . "' LIMIT 1") or die('could not search');
                                    $output = 'Year / Examination / Roll number did\'t match that you have entered. <a href="_int_result_search.php">Please Again search</a>';
                                    ?>
                                    <p style="float: right; margin: 7px;"><a href="#" onClick="PrintDiv();"><img src="images/Print-Icon1.png" alt="" style="float: right;" />Print this mark-sheet by click in here...</a></p>
                                    <?php
                                    while ($row = mysql_fetch_array($query)) {

                                        $res_roll = $row['res_roll'];
                                        $res_year = $row['res_year'];
                                        $res_class = $row['res_class'];
                                        ?>
                                        <div id="divToPrint" class="resulttbl">
                                            <table cellspacing="0" cellpadding="0" width="100%" border="1" style="margin-bottom: 15px; border: 3px solid blue;border-collapse: collapse;background:#fff;">
                                                <tbody>
                                                <table>
                                                    <tr>
                                                        <td valign="middle" height="30" align="center" style="font-weight: bold; font-size: 13px; color: aquamarine;"> <?php echo $row['res_num']; ?>'s <?php echo $row['res_class']; ?> Result <?php echo $row['res_year']; ?><hr>
                                                            <a href="_int_result_edit.php?id=<?php echo $row['res_id']; ?>">Edit</a> | 
                                                            <a onClick="return confirm_del();" href="_int_result_del.php?id=<?php echo $row['res_id']; ?>">Delete</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <tr>
                                                    <td valign="middle" height="30" align="center" style="font-weight: bold; font-size: 20px; color: #000;">"<?php echo $row['res_num']; ?>" 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" height="30" align="center" style="font-weight: bold; font-size: 20px; color: #000;">"<?php echo $row['res_class']; ?>" Result - <?php echo $res_year; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" align="center">
                                                        <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <table cellspacing="1" cellpadding="3" width="100%" border="1" style="border-collapse: collapse;">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td width="12%" valign="middle" bgcolor="#EEEEEE" align="left">Roll No</td>
                                                                                    <td width="27%" valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $res_roll; ?></td>
                                                                                    <td width="22%" valign="middle" bgcolor="#EEEEEE" align="left">Name</td>
                                                                                    <td width="39%" valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['res_num']; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left">Date of Birth</td>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['res_dob']; ?></td>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left">Father's Name</td>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['res_fnum']; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left">Group</td>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['res_group']; ?></td>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left">Mother's Name</td>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['res_mnum']; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left">Type</td>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['res_type']; ?></td>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left">Result</td>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left" class="black12bold"><?php echo $row['res_gpa']; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left">Address</td>
                                                                                    <td valign="middle" bgcolor="#EEEEEE" align="left" colspan="5"><?php echo $row['res_addrs']; ?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" height="30" align="center"><span class="black16bold">Subject-Wise Grade / Mark Sheet</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <table cellspacing="1" cellpadding="3" width="100%" border="1" class="black12">
                                                                            <tbody><tr class="black12bold">
                                                                                    <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Code</td>
                                                                                    <td width="30%" valign="middle" bgcolor="#AFB7BE" align="left"><center>Subject</center></td>                                      
                                                                    <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Theory</td>
                                                                    <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Practical</td>
                                                                    <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">MCQ</td>
                                                                    <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">House</td>
                                                                    <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Total</td>
                                                                    <td width="15%" valign="middle" bgcolor="#AFB7BE" align="left">Grade</td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c1']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s1']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt1']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp1']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm1']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh1']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl1']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r1']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c2']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s2']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt2']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp2']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm2']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh2']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl2']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r2']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c3']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s3']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt3']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp3']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm3']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh3']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl3']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r3']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c4']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s4']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt4']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp4']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm4']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh4']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl4']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r4']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c5']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s5']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['m5']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp5']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm5']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh5']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl5']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r5']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c6']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s6']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt6']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp6']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm6']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh6']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl6']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r6']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c7']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s7']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt7']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp7']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm7']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh7']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl7']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r7']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c8']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s8']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt8']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp8']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm8']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh8']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl8']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r8']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c9']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s9']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt9']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp9']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm9']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh9']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl9']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r9']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c10']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s10']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt10']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp10']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm10']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh10']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl10']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r10']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c11']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s11']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt11']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp11']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm11']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh11']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl11']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r11']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c12']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s12']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt12']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp12']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm12']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh12']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl12']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r12']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c13']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s13']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt13']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp13']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm13']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh13']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl13']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r13']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c14']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s14']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt14']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp14']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm14']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh14']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl14']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r14']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c15']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s15']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt15']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp15']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm15']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh15']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl15']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r15']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c16']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s16']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt16']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp16']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm16']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh16']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl16']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r16']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c17']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s17']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt17']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp17']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm17']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh17']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl17']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r17']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c18']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s18']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt18']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp18']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm18']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh18']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl18']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r18']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c19']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s19']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt19']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp19']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm19']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh19']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl19']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r19']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c20']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s20']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt20']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp20']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm20']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh20']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl20']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r20']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c21']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s21']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt21']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp21']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm21']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh21']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl21']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r21']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c22']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s22']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt22']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp22']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm22']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh22']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl22']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r22']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c23']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s23']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt23']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp23']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm23']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh23']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl23']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r23']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['c24']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['s24']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mt24']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mp24']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mm24']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mh24']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['mtl24']; ?></td>
                                                                    <td valign="middle" bgcolor="" align="left"><?php echo $row['r24']; ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="12%" valign="middle" bgcolor="" align="left">Institute Name</td>
                                                                    <td width="27%" valign="middle" bgcolor="" align="left"><input style="width: 370px;" type="text" name="res_ins" value="<?php echo $row['res_ins']; ?>" /></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </td>
                                            </tr>
                                            </tbody>
                                            </table>
                                        </div>	

                                        <?php
                                    }
                                }
                                ?>
                                <p style="background: #fff;color: red;font-size: 14px;margin: 0;padding-bottom: 10px;text-align: center;"><?php print($output); ?></p>
                                <?php
                                exit();
                            }
                            ?>
                        </form>
                    </td>
                    </tbody>
                </table>
            </div>
        </div>

    </body>
</html>
