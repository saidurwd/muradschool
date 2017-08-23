<?php
include('dbconnect.php');
//include('_admin_session.php');
?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Result</title>
        <link rel="stylesheet" href="stylecss1.css" />
        <script type="text/javascript">
            function confirm_del() {
                return confirm('Do you want to delete this data ?');
            }
        </script>
    </head>
    <body>
        <?php
        $num_rec_per_page = 2;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        };
        $start_from = ($page - 1) * $num_rec_per_page;
        $sql = "SELECT * FROM result_tbl WHERE status = 1 LIMIT $start_from, $num_rec_per_page";
        $rs_result = mysql_query($sql);
        ?>
        <div class="resultview">
            <h2>View All Internal Result</h2>

        </div>
        <?php
        $result = mysql_query("select * from hdr_tbl") or die(mysql_error());
        while ($row = mysql_fetch_array($result)) {
            echo $row['hdr_en'];
        }
        ?>
        <?php
        $i = 0;
        //$result= mysql_query("select * from result_tbl") or die (mysql_error());
        while ($row = mysql_fetch_array($rs_result)) {
            $i++;
            ?>
            <table>
                <tr>
                    <td>
                        <?php
                        //include('_int_result_search.php');
                        ?>
                    </td>
                </tr>
            </table>
            <table cellspacing="0" cellpadding="0" width="100%" border="1" style="margin-bottom: 15px; border: 3px solid red;border-collapse: collapse;">
                <tbody>
                    <tr>
                        <td width="12%" valign="middle" bgcolor="" align="left">Institute Name</td>
                        <td width="27%" valign="middle" bgcolor="" align="left"><?php echo $row['res_ins']; ?></td>
                    </tr>
                    <tr>
                        <td width="12%" valign="middle" bgcolor="" align="left">Roll No</td>
                        <td width="27%" valign="middle" bgcolor="" align="left"><?php echo $row['res_roll']; ?></td>
                        <td width="22%" valign="middle" bgcolor="" align="left">Name</td>
                        <td width="39%" valign="middle" bgcolor="" align="left"><?php echo $row['res_num']; ?></td>
                    </tr>
                    <tr>
                        <td valign="middle" bgcolor="" align="left">Date of Birth</td>
                        <td valign="middle" bgcolor="" align="left"><?php echo $row['res_dob']; ?></td>
                        <td valign="middle" bgcolor="" align="left">Father's Name</td>
                        <td valign="middle" bgcolor="" align="left"><?php echo $row['res_fnum']; ?></td>
                    </tr>
                    <tr>
                        <td valign="middle" bgcolor="" align="left">Group</td>
                        <td valign="middle" bgcolor="" align="left"><?php echo $row['res_group']; ?></td>
                        <td valign="middle" bgcolor="" align="left">Mother's Name</td>
                        <td valign="middle" bgcolor="" align="left"><?php echo $row['res_mnum']; ?></td>
                    </tr>
                    <tr>
                        <td valign="middle" bgcolor="" align="left">Type</td>
                        <td valign="middle" bgcolor="" align="left"><?php echo $row['res_type']; ?></td>
                        <td valign="middle" bgcolor="" align="left">Result</td>
                        <td valign="middle" bgcolor="" align="left" class="black12bold"><?php echo $row['res_gpa']; ?></td>
                    </tr>
                    <tr>
                        <td valign="middle" bgcolor="" align="left">Address</td>
                        <td valign="middle" bgcolor="" align="left" colspan="5"><?php echo $row['res_addrs']; ?></td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td valign="middle" height="30" align="center"><span style="color: #000;font-style: italic;font-weight: bold;font-size: 18px;">Subject-Wise Grade / Mark Sheet</span></td>
    </tr>
    <tr>
        <td valign="middle" align="center">
            <table cellspacing="1" cellpadding="3" width="100%" border="1" style="border-collapse: collapse;">
                <tbody>
                    <tr class="black12bold">
                        <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Code</td>
                        <td width="25%" valign="middle" bgcolor="#AFB7BE" align="left"><center>Subject</center></td>
        <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Theory</td>
        <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Practical</td>
        <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">MCQ</td>
        <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">House</td>
        <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Total</td>
        <td width="20%" valign="middle" bgcolor="#AFB7BE" align="left">Grade</td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c1']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s1']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt1']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp1']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm1']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh1']; ?></td>							                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl1']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r1']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c2']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s2']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt2']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp2']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm2']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh2']; ?></td>							                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl2']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r2']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c3']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s3']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt3']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp3']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm3']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh3']; ?></td>							                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl3']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r3']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c4']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s4']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt4']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp4']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm4']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh4']; ?></td>							                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl4']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r4']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c5']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s5']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt5']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp5']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm5']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh5']; ?></td>							                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl5']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r5']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c6']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s6']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt6']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp6']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm6']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh6']; ?></td>							                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl6']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r6']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c7']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s7']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt7']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp7']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm7']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh7']; ?></td>							                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl7']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r7']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c8']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s8']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt8']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp8']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm8']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh8']; ?></td>							                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl8']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r8']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c9']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s9']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt9']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp9']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm9']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh9']; ?></td>							                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl9']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r9']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c10']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s10']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt10']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp10']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm10']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh10']; ?></td>							                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl10']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r10']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c11']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s11']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt11']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp11']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm11']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh11']; ?></td>							                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl11']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r11']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c12']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s12']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt12']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp12']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm12']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh12']; ?></td>							                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl12']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r12']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c13']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s13']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt13']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp13']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm13']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh13']; ?></td>							                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl13']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r13']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c14']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s14']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt14']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp14']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm14']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh14']; ?></td>							                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl14']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r14']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c15']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s15']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt15']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp15']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm15']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh15']; ?></td>							                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl15']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r15']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c16']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s16']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt16']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp16']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm16']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh16']; ?></td>							                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl16']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r16']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c17']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s17']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt17']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp17']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm17']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh17']; ?></td>							                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl17']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r17']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c18']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s18']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt18']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp18']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm18']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh18']; ?></td>							                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl18']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r18']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c19']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s19']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt19']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp19']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm19']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh19']; ?></td>							                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl19']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r19']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c20']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s20']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt20']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp20']; ?></td>								                                  <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm20']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh20']; ?></td>							                                   <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl20']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r20']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c21']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s21']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt21']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp21']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm21']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh21']; ?></td>							                                     <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl21']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r21']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c22']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s22']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt22']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp22']; ?></td>								                                     <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm22']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh22']; ?></td>							                                     <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl22']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r22']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c23']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s23']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt23']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp23']; ?></td>								                                 <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm23']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh23']; ?></td>							                               <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl23']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r23']; ?></td>
    </tr>
    <tr>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['c24']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['s24']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mt24']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mp24']; ?></td>								                                      <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mm24']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mh24']; ?></td>							                                    <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['mtl24']; ?></td>
        <td valign="middle" bgcolor="#EEEEEE" align="left"><?php echo $row['r24']; ?></td>
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
<?php } ?>
<div class="mypagination2">
    <?php
    $sql = "SELECT * FROM result_tbl WHERE status = 1";
    $rs_result = mysql_query($sql);
    $total_records = mysql_num_rows($rs_result);
    $total_pages = ceil($total_records / $num_rec_per_page);

    echo "<a href='_int_result_view.php?page=1'>" . '< First page' . "</a> ";

    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a href='_int_result_view.php?page=" . $i . "'>" . $i . "</a> ";
    };
    echo "<a href='_int_result_view.php?page=$total_pages'>" . 'Last page >' . "</a> ";
    ?>
</div>	
</body>
</html>