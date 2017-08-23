<?php ob_start(); //error_reporting(0);    ?>
<?php include('dbconnect.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
        $result = mysql_query("select * from hdr_tbl") or die(mysql_error());
        while ($row = mysql_fetch_array($result)) {
            ?>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
            <title>Welcome to <?php echo $row['hdr_en']; ?></title>
            <meta name="keywords" content="" />
            <meta name="description" content="" />
            <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
            <LINK href="css/c.css" type=text/css rel=stylesheet>

                <script type="text/javascript" src="js/script.js"></script>
                <?php
                include"dbconnect.php";
                include"function.php";
                include('_admin_session.php');
                ?>
        </head>
        <body>
            <div id="wrapper">
                <div id="logo">
                    <h1><a style="margin-left: 10px; font-size: 35px;" href="index.php"><?php echo $row['hdr_bn']; ?></a></h1>
                </div>
                <hr />
                <!-- end #logo -->
                <div id="header">
                    <div id="menu">
                        <ul>
                            <li><a href="index.php" class="first">Home</a></li>
                            <?php if (!empty($_SESSION['UserType'])) { ?>
                                <li><a href="index.php?action=Logout">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- end #menu -->
                    <div id="search">
                        <form method="get" action="">
                            <fieldset>
                                <input type="text" name="s" id="search-text" size="15" />
                                <input type="submit" id="search-submit" value="GO" />
                            </fieldset>
                        </form>
                    </div>
                    <!-- end #search -->
                </div>
                <!-- end #header -->
                <!-- end #header-wrapper -->
                <div id="page">
                    <div id="page-bgtop">
                        <div id="content">
                            <div class="post">

                                <?php
                                if (isset($_REQUEST['id'])) {
                                    $id = $_REQUEST['id'];
                                } else {
                                    header('location: index.php');
                                }

                                $result = mysql_query("SELECT * FROM result_tbl WHERE res_id = '$id'");
                                $row = mysql_fetch_assoc($result);
                                if (!$result) {
                                    die("Error: Data not found..");
                                }

                                $res_class = $row['res_class'];
                                $res_year = $row['res_year'];
                                $res_roll = $row['res_roll'];
                                $res_num = $row['res_num'];
                                $res_dob = $row['res_dob'];
                                $res_fnum = $row['res_fnum'];
                                $res_group = $row['res_group'];
                                $res_mnum = $row['res_mnum'];
                                $res_type = $row['res_type'];
                                $res_gpa = $row['res_gpa'];
                                $res_addrs = $row['res_addrs'];
                                $c1 = $row['c1'];
                                $c2 = $row['c2'];
                                $c3 = $row['c3'];
                                $c4 = $row['c4'];
                                $c5 = $row['c5'];
                                $c6 = $row['c6'];
                                $c7 = $row['c7'];
                                $c8 = $row['c8'];
                                $c9 = $row['c9'];
                                $c10 = $row['c10'];
                                $c11 = $row['c11'];
                                $c12 = $row['c12'];
                                $c13 = $row['c13'];
                                $c14 = $row['c14'];
                                $c15 = $row['c15'];
                                $c16 = $row['c16'];
                                $c17 = $row['c17'];
                                $c18 = $row['c18'];
                                $c19 = $row['c19'];
                                $c20 = $row['c20'];
                                $c21 = $row['c21'];
                                $c22 = $row['c22'];
                                $c23 = $row['c23'];
                                $c24 = $row['c24'];

                                $s1 = $row['s1'];
                                $s2 = $row['s2'];
                                $s3 = $row['s3'];
                                $s4 = $row['s4'];
                                $s5 = $row['s5'];
                                $s6 = $row['s6'];
                                $s7 = $row['s7'];
                                $s8 = $row['s8'];
                                $s9 = $row['s9'];
                                $s10 = $row['s10'];
                                $s11 = $row['s11'];
                                $s12 = $row['s12'];
                                $s13 = $row['s13'];
                                $s14 = $row['s14'];
                                $s15 = $row['s15'];
                                $s16 = $row['s16'];
                                $s17 = $row['s17'];
                                $s18 = $row['s18'];
                                $s19 = $row['s19'];
                                $s20 = $row['s20'];
                                $s21 = $row['s21'];
                                $s22 = $row['s22'];
                                $s23 = $row['s23'];
                                $s24 = $row['s24'];

                                $mt1 = $row['mt1'];
                                $mt2 = $row['mt2'];
                                $mt3 = $row['mt3'];
                                $mt4 = $row['mt4'];
                                $mt5 = $row['mt5'];
                                $mt6 = $row['mt6'];
                                $mt7 = $row['mt7'];
                                $mt8 = $row['mt8'];
                                $mt9 = $row['mt9'];
                                $mt10 = $row['mt10'];
                                $mt11 = $row['mt11'];
                                $mt12 = $row['mt12'];
                                $mt13 = $row['mt13'];
                                $mt14 = $row['mt14'];
                                $mt15 = $row['mt15'];
                                $mt16 = $row['mt16'];
                                $mt17 = $row['mt17'];
                                $mt18 = $row['mt18'];
                                $mt19 = $row['mt19'];
                                $mt20 = $row['mt20'];
                                $mt21 = $row['mt21'];
                                $mt22 = $row['mt22'];
                                $mt23 = $row['mt23'];
                                $mt24 = $row['mt24'];

                                $mp1 = $row['mp1'];
                                $mp2 = $row['mp2'];
                                $mp3 = $row['mp3'];
                                $mp4 = $row['mp4'];
                                $mp5 = $row['mp5'];
                                $mp6 = $row['mp6'];
                                $mp7 = $row['mp7'];
                                $mp8 = $row['mp8'];
                                $mp9 = $row['mp9'];
                                $mp10 = $row['mp10'];
                                $mp11 = $row['mp11'];
                                $mp12 = $row['mp12'];
                                $mp13 = $row['mp13'];
                                $mp14 = $row['mp14'];
                                $mp15 = $row['mp15'];
                                $mp16 = $row['mp16'];
                                $mp17 = $row['mp17'];
                                $mp18 = $row['mp18'];
                                $mp19 = $row['mp19'];
                                $mp20 = $row['mp20'];
                                $mp21 = $row['mp21'];
                                $mp22 = $row['mp22'];
                                $mp23 = $row['mp23'];
                                $mp24 = $row['mp24'];
                                $mm1 = $row['mm1'];
                                $mm2 = $row['mm2'];
                                $mm3 = $row['mm3'];
                                $mm4 = $row['mm4'];
                                $mm5 = $row['mm5'];
                                $mm6 = $row['mm6'];
                                $mm7 = $row['mm7'];
                                $mm8 = $row['mm8'];
                                $mm9 = $row['mm9'];
                                $mm10 = $row['mm10'];
                                $mm11 = $row['mm11'];
                                $mm12 = $row['mm12'];
                                $mm13 = $row['mm13'];
                                $mm14 = $row['mm14'];
                                $mm15 = $row['mm15'];
                                $mm16 = $row['mm16'];
                                $mm17 = $row['mm17'];
                                $mm18 = $row['mm18'];
                                $mm19 = $row['mm19'];
                                $mm20 = $row['mm20'];
                                $mm21 = $row['mm21'];
                                $mm22 = $row['mm22'];
                                $mm23 = $row['mm23'];
                                $mm24 = $row['mm24'];
                                $mh1 = $row['mh1'];
                                $mh2 = $row['mh2'];
                                $mh3 = $row['mh3'];
                                $mh4 = $row['mh4'];
                                $mh5 = $row['mh5'];
                                $mh6 = $row['mh6'];
                                $mh7 = $row['mh7'];
                                $mh8 = $row['mh8'];
                                $mh9 = $row['mh9'];
                                $mh10 = $row['mh10'];
                                $mh11 = $row['mh11'];
                                $mh12 = $row['mh12'];
                                $mh13 = $row['mh13'];
                                $mh14 = $row['mh14'];
                                $mh15 = $row['mh15'];
                                $mh16 = $row['mh16'];
                                $mh17 = $row['mh17'];
                                $mh18 = $row['mh18'];
                                $mh19 = $row['mh19'];
                                $mh20 = $row['mh20'];
                                $mh21 = $row['mh21'];
                                $mh22 = $row['mh22'];
                                $mh23 = $row['mh23'];
                                $mh24 = $row['mh24'];
                                $mtl1 = $row['mtl1'];
                                $mtl2 = $row['mtl2'];
                                $mtl3 = $row['mtl3'];
                                $mtl4 = $row['mtl4'];
                                $mtl5 = $row['mtl5'];
                                $mtl6 = $row['mtl6'];
                                $mtl7 = $row['mtl7'];
                                $mtl8 = $row['mtl8'];
                                $mtl9 = $row['mtl9'];
                                $mtl10 = $row['mtl10'];
                                $mtl11 = $row['mtl11'];
                                $mtl12 = $row['mtl12'];
                                $mtl13 = $row['mtl13'];
                                $mtl14 = $row['mtl14'];
                                $mtl15 = $row['mtl15'];
                                $mtl16 = $row['mtl16'];
                                $mtl17 = $row['mtl17'];
                                $mtl18 = $row['mtl18'];
                                $mtl19 = $row['mtl19'];
                                $mtl20 = $row['mtl20'];
                                $mtl21 = $row['mtl21'];
                                $mtl22 = $row['mtl22'];
                                $mtl23 = $row['mtl23'];
                                $mtl24 = $row['mtl24'];
                                $r1 = $row['r1'];
                                $r2 = $row['r2'];
                                $r3 = $row['r3'];
                                $r4 = $row['r4'];
                                $r5 = $row['r5'];
                                $r6 = $row['r6'];
                                $r7 = $row['r7'];
                                $r8 = $row['r8'];
                                $r9 = $row['r9'];
                                $r10 = $row['r10'];
                                $r11 = $row['r11'];
                                $r12 = $row['r12'];
                                $r13 = $row['r13'];
                                $r14 = $row['r14'];
                                $r15 = $row['r15'];
                                $r16 = $row['r16'];
                                $r17 = $row['r17'];
                                $r18 = $row['r18'];
                                $r19 = $row['r19'];
                                $r20 = $row['r20'];
                                $r21 = $row['r21'];
                                $r22 = $row['r22'];
                                $r23 = $row['r23'];
                                $r24 = $row['r24'];
                                $res_ins = $row['res_ins'];
                                $status = $row['status'];

                                if (isset($_POST['form1'])) {
                                    $res_class_s = $_POST['res_class'];
                                    $res_year_s = $_POST['res_year'];
                                    $res_roll_s = $_POST['res_roll'];
                                    $res_num_s = $_POST['res_num'];
                                    $res_dob_s = $_POST['res_dob'];
                                    $res_fnum_s = $_POST['res_fnum'];
                                    $res_group_s = $_POST['res_group'];
                                    $res_mnum_s = $_POST['res_mnum'];
                                    $res_type_s = $_POST['res_type'];
                                    $res_gpa_s = $_POST['res_gpa'];
                                    $res_addrs_s = $_POST['res_addrs'];
                                    $c1_s = $_POST['c1'];
                                    $c2_s = $_POST['c2'];
                                    $c3_s = $_POST['c3'];
                                    $c4_s = $_POST['c4'];
                                    $c5_s = $_POST['c5'];
                                    $c6_s = $_POST['c6'];
                                    $c7_s = $_POST['c7'];
                                    $c8_s = $_POST['c8'];
                                    $c9_s = $_POST['c9'];
                                    $c10_s = $_POST['c10'];
                                    $c11_s = $_POST['c11'];
                                    $c12_s = $_POST['c12'];
                                    $c13_s = $_POST['c13'];
                                    $c14_s = $_POST['c14'];
                                    $c15_s = $_POST['c15'];
                                    $c16_s = $_POST['c16'];
                                    $c17_s = $_POST['c17'];
                                    $c18_s = $_POST['c18'];
                                    $c19_s = $_POST['c19'];
                                    $c20_s = $_POST['c20'];
                                    $c21_s = $_POST['c21'];
                                    $c22_s = $_POST['c22'];
                                    $c23_s = $_POST['c23'];
                                    $c24_s = $_POST['c24'];

                                    $s1_s = $_POST['s1'];
                                    $s2_s = $_POST['s2'];
                                    $s3_s = $_POST['s3'];
                                    $s4_s = $_POST['s4'];
                                    $s5_s = $_POST['s5'];
                                    $s6_s = $_POST['s6'];
                                    $s7_s = $_POST['s7'];
                                    $s8_s = $_POST['s8'];
                                    $s9_s = $_POST['s9'];
                                    $s10_s = $_POST['s10'];
                                    $s11_s = $_POST['s11'];
                                    $s12_s = $_POST['s12'];
                                    $s13_s = $_POST['s13'];
                                    $s14_s = $_POST['s14'];
                                    $s15_s = $_POST['s15'];
                                    $s16_s = $_POST['s16'];
                                    $s17_s = $_POST['s17'];
                                    $s18_s = $_POST['s18'];
                                    $s19_s = $_POST['s19'];
                                    $s20_s = $_POST['s20'];
                                    $s21_s = $_POST['s21'];
                                    $s22_s = $_POST['s22'];
                                    $s23_s = $_POST['s23'];
                                    $s24_s = $_POST['s24'];

                                    $mt1_s = $_POST['mt1'];
                                    $mt2_s = $_POST['mt2'];
                                    $mt3_s = $_POST['mt3'];
                                    $mt4_s = $_POST['mt4'];
                                    $mt5_s = $_POST['mt5'];
                                    $mt6_s = $_POST['mt6'];
                                    $mt7_s = $_POST['mt7'];
                                    $mt8_s = $_POST['mt8'];
                                    $mt9_s = $_POST['mt9'];
                                    $mt10_s = $_POST['mt10'];
                                    $mt11_s = $_POST['mt11'];
                                    $mt12_s = $_POST['mt12'];
                                    $mt13_s = $_POST['mt13'];
                                    $mt14_s = $_POST['mt14'];
                                    $mt15_s = $_POST['mt15'];
                                    $mt16_s = $_POST['mt16'];
                                    $mt17_s = $_POST['mt17'];
                                    $mt18_s = $_POST['mt18'];
                                    $mt19_s = $_POST['mt19'];
                                    $mt20_s = $_POST['mt20'];
                                    $mt21_s = $_POST['mt21'];
                                    $mt22_s = $_POST['mt22'];
                                    $mt23_s = $_POST['mt23'];
                                    $mt24_s = $_POST['mt24'];

                                    $mp1_s = $_POST['mp1'];
                                    $mp2_s = $_POST['mp2'];
                                    $mp3_s = $_POST['mp3'];
                                    $mp4_s = $_POST['mp4'];
                                    $mp5_s = $_POST['mp5'];
                                    $mp6_s = $_POST['mp6'];
                                    $mp7_s = $_POST['mp7'];
                                    $mp8_s = $_POST['mp8'];
                                    $mp9_s = $_POST['mp9'];
                                    $mp10_s = $_POST['mp10'];
                                    $mp11_s = $_POST['mp11'];
                                    $mp12_s = $_POST['mp12'];
                                    $mp13_s = $_POST['mp13'];
                                    $mp14_s = $_POST['mp14'];
                                    $mp15_s = $_POST['mp15'];
                                    $mp16_s = $_POST['mp16'];
                                    $mp17_s = $_POST['mp17'];
                                    $mp18_s = $_POST['mp18'];
                                    $mp19_s = $_POST['mp19'];
                                    $mp20_s = $_POST['mp20'];
                                    $mp21_s = $_POST['mp21'];
                                    $mp22_s = $_POST['mp22'];
                                    $mp23_s = $_POST['mp23'];
                                    $mp24_s = $_POST['mp24'];
                                    $mm1_s = $_POST['mm1'];
                                    $mm2_s = $_POST['mm2'];
                                    $mm3_s = $_POST['mm3'];
                                    $mm4_s = $_POST['mm4'];
                                    $mm5_s = $_POST['mm5'];
                                    $mm6_s = $_POST['mm6'];
                                    $mm7_s = $_POST['mm7'];
                                    $mm8_s = $_POST['mm8'];
                                    $mm9_s = $_POST['mm9'];
                                    $mm10_s = $_POST['mm10'];
                                    $mm11_s = $_POST['mm11'];
                                    $mm12_s = $_POST['mm12'];
                                    $mm13_s = $_POST['mm13'];
                                    $mm14_s = $_POST['mm14'];
                                    $mm15_s = $_POST['mm15'];
                                    $mm16_s = $_POST['mm16'];
                                    $mm17_s = $_POST['mm17'];
                                    $mm18_s = $_POST['mm18'];
                                    $mm19_s = $_POST['mm19'];
                                    $mm20_s = $_POST['mm20'];
                                    $mm21_s = $_POST['mm21'];
                                    $mm22_s = $_POST['mm22'];
                                    $mm23_s = $_POST['mm23'];
                                    $mm24_s = $_POST['mm24'];
                                    $mh1_s = $_POST['mh1'];
                                    $mh2_s = $_POST['mh2'];
                                    $mh3_s = $_POST['mh3'];
                                    $mh4_s = $_POST['mh4'];
                                    $mh5_s = $_POST['mh5'];
                                    $mh6_s = $_POST['mh6'];
                                    $mh7_s = $_POST['mh7'];
                                    $mh8_s = $_POST['mh8'];
                                    $mh9_s = $_POST['mh9'];
                                    $mh10_s = $_POST['mh10'];
                                    $mh11_s = $_POST['mh11'];
                                    $mh12_s = $_POST['mh12'];
                                    $mh13_s = $_POST['mh13'];
                                    $mh14_s = $_POST['mh14'];
                                    $mh15_s = $_POST['mh15'];
                                    $mh16_s = $_POST['mh16'];
                                    $mh17_s = $_POST['mh17'];
                                    $mh18_s = $_POST['mh18'];
                                    $mh19_s = $_POST['mh19'];
                                    $mh20_s = $_POST['mh20'];
                                    $mh21_s = $_POST['mh21'];
                                    $mh22_s = $_POST['mh22'];
                                    $mh23_s = $_POST['mh23'];
                                    $mh24_s = $_POST['mh24'];
                                    $mtl1_s = $_POST['mtl1'];
                                    $mtl2_s = $_POST['mtl2'];
                                    $mtl3_s = $_POST['mtl3'];
                                    $mtl4_s = $_POST['mtl4'];
                                    $mtl5_s = $_POST['mtl5'];
                                    $mtl6_s = $_POST['mtl6'];
                                    $mtl7_s = $_POST['mtl7'];
                                    $mtl8_s = $_POST['mtl8'];
                                    $mtl9_s = $_POST['mtl9'];
                                    $mtl10_s = $_POST['mtl10'];
                                    $mtl11_s = $_POST['mtl11'];
                                    $mtl12_s = $_POST['mtl12'];
                                    $mtl13_s = $_POST['mtl13'];
                                    $mtl14_s = $_POST['mtl14'];
                                    $mtl15_s = $_POST['mtl15'];
                                    $mtl16_s = $_POST['mtl16'];
                                    $mtl17_s = $_POST['mtl17'];
                                    $mtl18_s = $_POST['mtl18'];
                                    $mtl19_s = $_POST['mtl19'];
                                    $mtl20_s = $_POST['mtl20'];
                                    $mtl21_s = $_POST['mtl21'];
                                    $mtl22_s = $_POST['mtl22'];
                                    $mtl23_s = $_POST['mtl23'];
                                    $mtl24_s = $_POST['mtl24'];
                                    $r1_s = $_POST['r1'];
                                    $r2_s = $_POST['r2'];
                                    $r3_s = $_POST['r3'];
                                    $r4_s = $_POST['r4'];
                                    $r5_s = $_POST['r5'];
                                    $r6_s = $_POST['r6'];
                                    $r7_s = $_POST['r7'];
                                    $r8_s = $_POST['r8'];
                                    $r9_s = $_POST['r9'];
                                    $r10_s = $_POST['r10'];
                                    $r11_s = $_POST['r11'];
                                    $r12_s = $_POST['r12'];
                                    $r13_s = $_POST['r13'];
                                    $r14_s = $_POST['r14'];
                                    $r15_s = $_POST['r15'];
                                    $r16_s = $_POST['r16'];
                                    $r17_s = $_POST['r17'];
                                    $r18_s = $_POST['r18'];
                                    $r19_s = $_POST['r19'];
                                    $r20_s = $_POST['r20'];
                                    $r21_s = $_POST['r21'];
                                    $r22_s = $_POST['r22'];
                                    $r23_s = $_POST['r23'];
                                    $r24_s = $_POST['r24'];
                                    $res_ins = $_POST['res_ins'];
                                    $status = $_POST['status'];

                                    mysql_query("UPDATE result_tbl SET res_class ='$res_class_s', res_year ='$res_year_s', res_roll ='$res_roll_s', res_num ='$res_num_s', res_dob ='$res_dob_s', res_fnum ='$res_fnum_s', res_group ='$res_group_s', res_mnum ='$res_mnum_s', res_type ='$res_type_s', res_gpa ='$res_gpa_s', res_addrs ='$res_addrs_s', c1 ='$c1_s', c2 ='$c2_s', c3 ='$c3_s', c4 ='$c4_s', c5 ='$c5_s', c6 ='$c6_s', c7 ='$c7_s',c8 ='$c8_s', c9 ='$c9_s', c10 ='$c10_s', c11 ='$c11_s', c12 ='$c12_s', c13 ='$c13_s', c14 ='$c14_s',c15 ='$c15_s', c16 ='$c16_s', c17 ='$c17_s', c18 ='$c18_s', c19 ='$c19_s', c20 ='$c20_s', c21 ='$c21_s',c22 ='$c22_s', c23 ='$c23_s', c24 ='$c24_s',s1 ='$s1_s', s2 ='$s2_s', s3 ='$s3_s', s4 ='$s4_s', s5 ='$s5_s', s6 ='$s6_s', s7 ='$s7_s',s8 ='$s8_s', s9 ='$s9_s', s10 ='$s10_s', s11 ='$s11_s', s12 ='$s12_s', s13 ='$s13_s', s14 ='$s14_s',s15 ='$s15_s', s16 ='$s16_s', s17 ='$s17_s', s18 ='$s18_s', s19 ='$s19_s', s20 ='$s20_s', s21 ='$s21_s',s22 ='$s22_s', s23 ='$s23_s', s24 ='$s24_s',mt1 ='$mt1_s', mt2 ='$mt2_s', mt3 ='$mt3_s', mt4 ='$mt4_s', mt5 ='$mt5_s', mt6 ='$mt6_s', mt7 ='$mt7_s',mt8 ='$mt8_s', mt9 ='$mt9_s', mt10 ='$mt10_s', mt11 ='$mt11_s', mt12 ='$mt12_s', mt13 ='$mt13_s', mt14 ='$mt14_s',mt15 ='$mt15_s', mt16 ='$mt16_s', mt17 ='$mt17_s', mt18 ='$mt18_s', mt19 ='$mt19_s', mt20 ='$mt20_s', mt21 ='$mt21_s',mt22 ='$mt22_s', mt23 ='$mt23_s', mt24 ='$mt24_s',mp1 ='$mp1_s', mp2 ='$mp2_s', mp3 ='$mp3_s', mp4 ='$mp4_s', mp5 ='$mp5_s', mp6 ='$mp6_s', mp7 ='$mp7_s',mp8 ='$mp8_s', mp9 ='$mp9_s', mp10 ='$mp10_s', mp11 ='$mp11_s', mp12 ='$mp12_s', mp13 ='$mp13_s', mp14 ='$mp14_s',mp15 ='$mp15_s', mp16 ='$mp16_s', mp17 ='$mp17_s', mp18 ='$mp18_s', mp19 ='$mp19_s', mp20 ='$mp20_s', mp21 ='$mp21_s',mp22 ='$mp22_s', mp23 ='$mp23_s', mp24 ='$mp24_s',mm1 ='$mm1_s', mm2 ='$mm2_s', mm3 ='$mm3_s', mm4 ='$mm4_s', mm5 ='$mm5_s', mm6 ='$mm6_s', mm7 ='$mm7_s',mm8 ='$mm8_s', mm9 ='$mm9_s', mm10 ='$mm10_s', mm11 ='$mm11_s', mm12 ='$mm12_s', mm13 ='$mm13_s', mm14 ='$mm14_s',mm15 ='$mm15_s', mm16 ='$mm16_s', mm17 ='$mm17_s', mm18 ='$mm18_s', mm19 ='$mm19_s', mm20 ='$mm20_s', mm21 ='$mm21_s',mm22 ='$mm22_s', mm23 ='$mm23_s', mm24 ='$mm24_s',mh1 ='$mh1_s', mh2 ='$mh2_s', mh3 ='$mh3_s', mh4 ='$mh4_s', mh5 ='$mh5_s', mh6 ='$mh6_s', mh7 ='$mh7_s',mh8 ='$mh8_s', mh9 ='$mh9_s', mh10 ='$mh10_s', mh11 ='$mh11_s', mh12 ='$mh12_s', mh13 ='$mh13_s', mh14 ='$mh14_s',mh15 ='$mh15_s', mh16 ='$mh16_s', mh17 ='$mh17_s', mh18 ='$mh18_s', mh19 ='$mh19_s', mh20 ='$mh20_s', mh21 ='$mh21_s',mh22 ='$mh22_s', mh23 ='$mh23_s', mh24 ='$mh24_s',mtl1 ='$mtl1_s', mtl2 ='$mtl2_s', mtl3 ='$mtl3_s', mtl4 ='$mtl4_s', mtl5 ='$mtl5_s', mtl6 ='$mtl6_s', mtl7 ='$mtl7_s',mtl8 ='$mtl8_s', mtl9 ='$mtl9_s', mtl10 ='$mtl10_s', mtl11 ='$mtl11_s', mtl12 ='$mtl12_s', mtl13 ='$mtl13_s', mtl14 ='$mtl14_s',mtl15 ='$mtl15_s', mtl16 ='$mtl16_s', mtl17 ='$mtl17_s', mtl18 ='$mtl18_s', mtl19 ='$mtl19_s', mtl20 ='$mtl20_s', mtl21 ='$mtl21_s',mtl22 ='$mtl22_s', mtl23 ='$mtl23_s', mtl24 ='$mtl24_s',r1 ='$r1_s', r2 ='$r2_s', r3 ='$r3_s', r4 ='$r4_s', r5 ='$r5_s', r6 ='$r6_s', r7 ='$r7_s',r8 ='$r8_s', r9 ='$r9_s', r10 ='$r10_s', r11 ='$r11_s', r12 ='$r12_s', r13 ='$r13_s', r14 ='$r14_s',r15 ='$r15_s', r16 ='$r16_s', r17 ='$r17_s', r18 ='$r18_s', r19 ='$r19_s', r20 ='$r20_s', r21 ='$r21_s',r22 ='$r22_s', r23 ='$r23_s', r24 ='$r24_s', res_ins='$res_ins', status='$status' WHERE res_id = '$id'") or die(mysql_error());

                                    header("location: index.php?action=_int_result_view");
                                }
                                ?>

                                <div class="resultview">
                                    <h2>Add Internal Result...</h2>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table cellspacing="0" cellpadding="0" width="100%" border="1">
                                        <tbody>
                                            <tr>
                                                <td valign="middle" height="30" align="center" class="black16bold"><input style="width: 100px;" type="text" name="res_class" value="<?php echo $res_class; ?>" /> Result <input style="width: 100px;" type="text" name="res_year" value="<?php echo $res_year; ?>" /><hr></td>
                                            </tr>
                                            <tr>
                                                <td valign="middle" align="center">
                                                    <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td valign="middle" align="center"><table cellspacing="1" cellpadding="3" width="100%" border="1" class="black12">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width="12%" valign="middle" bgcolor="" align="left">Institute Name</td>
                                                                                <td width="27%" valign="middle" bgcolor="" align="left"><input style="width: 370px;" type="text" name="res_ins" value="<?php echo $res_ins; ?>" /></td>
                                                                            </tr>
                                                                            <tr>

                                                                                <td width="12%" valign="middle" bgcolor="" align="left">Roll No</td>
                                                                                <td width="27%" valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_roll" value="<?php echo $res_roll; ?>" /></td>
                                                                                <td width="13%" valign="middle" bgcolor="" align="left">Name</td>
                                                                                <td width="39%" valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_num" value="<?php echo $res_num; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left">Date of Birth</td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_dob" value="<?php echo $res_dob; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left">Father's Name</td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_fnum" value="<?php echo $res_fnum; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left">Group</td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_group" value="<?php echo $res_group; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left">Mother's Name</td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_mnum" value="<?php echo $res_mnum; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left">Type</td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_type" value="<?php echo $res_type; ?> " /></td>
                                                                                <td valign="middle" bgcolor="" align="left">Result</td>
                                                                                <td valign="middle" bgcolor="" align="left" class="black12bold"><input style="width: 170px;" type="text" name="res_gpa" value="<?php echo $res_gpa; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left">Address</td>
                                                                                <td valign="middle" bgcolor="" align="left" colspan="5"><input style="width: 470px;" type="text" name="res_addrs" value="<?php echo $res_addrs; ?>" /></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table></td>
                                                            </tr>
                                                            <tr>
                                                                <td valign="middle" height="30" align="center"><span class="black16bold">| Subject-Wise Grade / Mark Sheet Input Field ...|</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td valign="middle" align="center">
                                                                    <table cellspacing="1" cellpadding="3" width="100%" border="1" class="black12">
                                                                        <tbody><tr class="black12bold">
                                                                                <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Code</td>
                                                                                <td width="20%" valign="middle" bgcolor="#AFB7BE" align="left"><center>Subject</center></td>         
                                                                                <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Theory</td>
                                                                                <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Practical</td>
                                                                                <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">MCQ</td>
                                                                                <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">House</td>
                                                                                <td width="10%" valign="middle" bgcolor="#AFB7BE" align="left">Total</td>
                                                                                <td width="25%" valign="middle" bgcolor="#AFB7BE" align="left">Grade</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c1" value="<?php echo $c1; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s1" value="<?php echo $s1; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt1" value="<?php echo $mt1; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp1" value="<?php echo $mp1; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm1" value="<?php echo $mm1; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh1" value="<?php echo $mh1; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl1" value="<?php echo $mtl1; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r1" value="<?php echo $r1; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c2" value="<?php echo $c2; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s2" value="<?php echo $s2; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt2" value="<?php echo $mt2; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp2" value="<?php echo $mp2; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm2" value="<?php echo $mm2; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh2" value="<?php echo $mh2; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl2" value="<?php echo $mtl2; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r2" value="<?php echo $r2; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c3" value="<?php echo $c3; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s3" value="<?php echo $s3; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt3" value="<?php echo $mt3; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp3" value="<?php echo $mp3; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm3" value="<?php echo $mm3; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh3" value="<?php echo $mh3; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl3" value="<?php echo $mtl3; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r3" value="<?php echo $r3; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c4" value="<?php echo $c4; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s4" value="<?php echo $s4; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt4" value="<?php echo $mt4; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp4" value="<?php echo $mp4; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm4" value="<?php echo $mm4; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh4" value="<?php echo $mh4; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl4" value="<?php echo $mtl4; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r4" value="<?php echo $r4; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c5" value="<?php echo $c5; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s5" value="<?php echo $s5; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt5" value="<?php echo $mt5; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp5" value="<?php echo $mp5; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm5" value="<?php echo $mm5; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh5" value="<?php echo $mh5; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl5" value="<?php echo $mtl5; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r5" value="<?php echo $r5; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c6" value="<?php echo $c6; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s6" value="<?php echo $s6; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt6" value="<?php echo $mt6; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp6" value="<?php echo $mp6; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm6" value="<?php echo $mm6; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh6" value="<?php echo $mh6; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl6" value="<?php echo $mtl6; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r6" value="<?php echo $r6; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c7" value="<?php echo $c7; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s7" value="<?php echo $s7; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt7" value="<?php echo $mt7; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp7" value="<?php echo $mp7; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm7" value="<?php echo $mm7; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh7" value="<?php echo $mh7; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl7" value="<?php echo $mtl7; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r7" value="<?php echo $r7; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c8" value="<?php echo $c8; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s8" value="<?php echo $s8; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt8" value="<?php echo $mt8; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp8" value="<?php echo $mp8; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm8" value="<?php echo $mm8; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh8" value="<?php echo $mh8; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl8" value="<?php echo $mtl8; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r8" value="<?php echo $r8; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c9" value="<?php echo $c9; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s9" value="<?php echo $s9; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt9" value="<?php echo $mt9; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp9" value="<?php echo $mp9; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm9" value="<?php echo $mm9; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh9" value="<?php echo $mh9; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl9" value="<?php echo $mtl9; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r9" value="<?php echo $r9; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c10" value="<?php echo $c10; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s10" value="<?php echo $s10; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt10" value="<?php echo $mt10; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp10" value="<?php echo $mp10; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm10" value="<?php echo $mm10; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh10" value="<?php echo $mh10; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl10" value="<?php echo $mtl10; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r10" value="<?php echo $r10; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c11" value="<?php echo $c11; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s11" value="<?php echo $s11; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt11" value="<?php echo $mt11; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp11" value="<?php echo $mp11; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm11" value="<?php echo $mm11; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh11" value="<?php echo $mh11; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl11" value="<?php echo $mtl11; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r11" value="<?php echo $r11; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c12" value="<?php echo $c12; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s12" value="<?php echo $s12; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt12" value="<?php echo $mt12; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp12" value="<?php echo $mp12; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm12" value="<?php echo $mm12; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh12" value="<?php echo $mh12; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl12" value="<?php echo $mtl12; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r12" value="<?php echo $r12; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c13" value="<?php echo $c13; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s13" value="<?php echo $s13; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt13" value="<?php echo $mt13; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp13" value="<?php echo $mp13; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm13" value="<?php echo $mm13; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh13" value="<?php echo $mh13; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl13" value="<?php echo $mtl13; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r13" value="<?php echo $r13; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c14" value="<?php echo $c14; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s14" value="<?php echo $s14; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt14" value="<?php echo $mt14; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp14" value="<?php echo $mp14; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm14" value="<?php echo $mm14; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh14" value="<?php echo $mh14; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl14" value="<?php echo $mtl14; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r14" value="<?php echo $r14; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c15" value="<?php echo $c15; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s15" value="<?php echo $s15; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt15" value="<?php echo $mt15; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp15" value="<?php echo $mp15; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm15" value="<?php echo $mm15; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh15" value="<?php echo $mh15; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl15" value="<?php echo $mtl15; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r15" value="<?php echo $r15; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c16" value="<?php echo $c16; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s16" value="<?php echo $s16; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt16" value="<?php echo $mt16; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp16" value="<?php echo $mp16; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm16" value="<?php echo $mm16; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh16" value="<?php echo $mh16; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl16" value="<?php echo $mtl16; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r16" value="<?php echo $r16; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c17" value="<?php echo $c17; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s17" value="<?php echo $s17; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt17" value="<?php echo $mt17; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp17" value="<?php echo $mp17; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm17" value="<?php echo $mm17; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh17" value="<?php echo $mh17; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl17" value="<?php echo $mtl17; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r17" value="<?php echo $r17; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c18" value="<?php echo $c18; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s18" value="<?php echo $s18; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt18" value="<?php echo $mt18; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp18" value="<?php echo $mp18; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm18" value="<?php echo $mm18; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh18" value="<?php echo $mh18; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl18" value="<?php echo $mtl18; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r18" value="<?php echo $r18; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c19" value="<?php echo $c19; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s19" value="<?php echo $s19; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt19" value="<?php echo $mt19; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp19" value="<?php echo $mp19; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm19" value="<?php echo $mm19; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh19" value="<?php echo $mh19; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl19" value="<?php echo $mtl19; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r19" value="<?php echo $r19; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c20" value="<?php echo $c20; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s20" value="<?php echo $s20; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt20" value="<?php echo $mt20; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp20" value="<?php echo $mp20; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm20" value="<?php echo $mm20; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh20" value="<?php echo $mh20; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl20" value="<?php echo $mtl20; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r20" value="<?php echo $r20; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c21" value="<?php echo $c21; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s21" value="<?php echo $s21; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt21" value="<?php echo $mt21; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp21" value="<?php echo $mp21; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm21" value="<?php echo $mm21; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh21" value="<?php echo $mh21; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl21" value="<?php echo $mtl21; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r21" value="<?php echo $r21; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c22" value="<?php echo $c22; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s22" value="<?php echo $s22; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt22" value="<?php echo $mt22; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp22" value="<?php echo $mp22; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm22" value="<?php echo $mm22; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh22" value="<?php echo $mh22; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl22" value="<?php echo $mtl22; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r22" value="<?php echo $r22; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c23" value="<?php echo $c23; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s23" value="<?php echo $s23; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt23" value="<?php echo $mt23; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp23" value="<?php echo $mp23; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm23" value="<?php echo $mm23; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh23" value="<?php echo $mh23; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl23" value="<?php echo $mtl23; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r23" value="<?php echo $r23; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c24" value="<?php echo $c24; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="s24" value="<?php echo $s24; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt24" value="<?php echo $mt24; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp24" value="<?php echo $mp24; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm24" value="<?php echo $mm24; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh24" value="<?php echo $mh24; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl24" value="<?php echo $mtl24; ?>" /></td>
                                                                                <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="r24" value="<?php echo $r24; ?>" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="middle" bgcolor="" align="left">Status</td>
                                                                                <td valign="middle" bgcolor="" align="left">
                                                                                    <select name="status" id="status">
                                                                                        <option value="0" <?php
                                                                                        if ($status == 0) {
                                                                                            echo 'selected';
                                                                                        }
                                                                                        ?>>Inactive</option>
                                                                                        <option value="1" <?php
                                                                                        if ($status == 1) {
                                                                                            echo 'selected';
                                                                                        }
                                                                                        ?>>Active</option>
                                                                                    </select>
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
                                    <input style="font-size: 15px; padding: 0px 20px; margin-top: 10px; float: right;color: red;" type="submit" value="Update" name="form1"/>
                                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                </form>		  
                            </div>
                        </div>
                        <!-- end #content -->
                        <?php include("user_sidebar.php"); ?>
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                </div>
                <!-- end #page -->
                <!-- end #footer -->
            </div>
        <?php } ?>
    </body>
</html>


