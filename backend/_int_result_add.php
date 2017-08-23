<?php
ob_start();
include('dbconnect.php');
include('_admin_session.php');

if (isset($_POST['form1'])) {

    $res_class = $_POST['res_class'];
    $res_year = $_POST['res_year'];
    $res_roll = $_POST['res_roll'];
    $res_num = $_POST['res_num'];
    $res_dob = $_POST['res_dob'];
    $res_fnum = $_POST['res_fnum'];
    $res_group = $_POST['res_group'];
    $res_mnum = $_POST['res_mnum'];
    $res_type = $_POST['res_type'];
    $res_gpa = $_POST['res_gpa'];
    $res_addrs = $_POST['res_addrs'];
    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];
    $c4 = $_POST['c4'];
    $c5 = $_POST['c5'];
    $c6 = $_POST['c6'];
    $c7 = $_POST['c7'];
    $c8 = $_POST['c8'];
    $c9 = $_POST['c9'];
    $c10 = $_POST['c10'];
    $c11 = $_POST['c11'];
    $c12 = $_POST['c12'];
    $c13 = $_POST['c13'];
    $c14 = $_POST['c14'];
    $c15 = $_POST['c15'];
    $c16 = $_POST['c16'];
    $c17 = $_POST['c17'];
    $c18 = $_POST['c18'];
    $c19 = $_POST['c19'];
    $c20 = $_POST['c20'];
    $c21 = $_POST['c21'];
    $c22 = $_POST['c22'];
    $c23 = $_POST['c23'];
    $c24 = $_POST['c24'];

    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s3 = $_POST['s3'];
    $s4 = $_POST['s4'];
    $s5 = $_POST['s5'];
    $s6 = $_POST['s6'];
    $s7 = $_POST['s7'];
    $s8 = $_POST['s8'];
    $s9 = $_POST['s9'];
    $s10 = $_POST['s10'];
    $s11 = $_POST['s11'];
    $s12 = $_POST['s12'];
    $s13 = $_POST['s13'];
    $s14 = $_POST['s14'];
    $s15 = $_POST['s15'];
    $s16 = $_POST['s16'];
    $s17 = $_POST['s17'];
    $s18 = $_POST['s18'];
    $s19 = $_POST['s19'];
    $s20 = $_POST['s20'];
    $s21 = $_POST['s21'];
    $s22 = $_POST['s22'];
    $s23 = $_POST['s23'];
    $s24 = $_POST['s24'];

    $mt1 = $_POST['mt1'];
    $mt2 = $_POST['mt2'];
    $mt3 = $_POST['mt3'];
    $mt4 = $_POST['mt4'];
    $mt5 = $_POST['mt5'];
    $mt6 = $_POST['mt6'];
    $mt7 = $_POST['mt7'];
    $mt8 = $_POST['mt8'];
    $mt9 = $_POST['mt9'];
    $mt10 = $_POST['mt10'];
    $mt11 = $_POST['mt11'];
    $mt12 = $_POST['mt12'];
    $mt13 = $_POST['mt13'];
    $mt14 = $_POST['mt14'];
    $mt15 = $_POST['mt15'];
    $mt16 = $_POST['mt16'];
    $mt17 = $_POST['mt17'];
    $mt18 = $_POST['mt18'];
    $mt19 = $_POST['mt19'];
    $mt20 = $_POST['mt20'];
    $mt21 = $_POST['mt21'];
    $mt22 = $_POST['mt22'];
    $mt23 = $_POST['mt23'];
    $mt24 = $_POST['mt24'];

    $mp1 = $_POST['mp1'];
    $mp2 = $_POST['mp2'];
    $mp3 = $_POST['mp3'];
    $mp4 = $_POST['mp4'];
    $mp5 = $_POST['mp5'];
    $mp6 = $_POST['mp6'];
    $mp7 = $_POST['mp7'];
    $mp8 = $_POST['mp8'];
    $mp9 = $_POST['mp9'];
    $mp10 = $_POST['mp10'];
    $mp11 = $_POST['mp11'];
    $mp12 = $_POST['mp12'];
    $mp13 = $_POST['mp13'];
    $mp14 = $_POST['mp14'];
    $mp15 = $_POST['mp15'];
    $mp16 = $_POST['mp16'];
    $mp17 = $_POST['mp17'];
    $mp18 = $_POST['mp18'];
    $mp19 = $_POST['mp19'];
    $mp20 = $_POST['mp20'];
    $mp21 = $_POST['mp21'];
    $mp22 = $_POST['mp22'];
    $mp23 = $_POST['mp23'];
    $mp24 = $_POST['mp24'];
    $mm1 = $_POST['mm1'];
    $mm2 = $_POST['mm2'];
    $mm3 = $_POST['mm3'];
    $mm4 = $_POST['mm4'];
    $mm5 = $_POST['mm5'];
    $mm6 = $_POST['mm6'];
    $mm7 = $_POST['mm7'];
    $mm8 = $_POST['mm8'];
    $mm9 = $_POST['mm9'];
    $mm10 = $_POST['mm10'];
    $mm11 = $_POST['mm11'];
    $mm12 = $_POST['mm12'];
    $mm13 = $_POST['mm13'];
    $mm14 = $_POST['mm14'];
    $mm15 = $_POST['mm15'];
    $mm16 = $_POST['mm16'];
    $mm17 = $_POST['mm17'];
    $mm18 = $_POST['mm18'];
    $mm19 = $_POST['mm19'];
    $mm20 = $_POST['mm20'];
    $mm21 = $_POST['mm21'];
    $mm22 = $_POST['mm22'];
    $mm23 = $_POST['mm23'];
    $mm24 = $_POST['mm24'];
    $mh1 = $_POST['mh1'];
    $mh2 = $_POST['mh2'];
    $mh3 = $_POST['mh3'];
    $mh4 = $_POST['mh4'];
    $mh5 = $_POST['mh5'];
    $mh6 = $_POST['mh6'];
    $mh7 = $_POST['mh7'];
    $mh8 = $_POST['mh8'];
    $mh9 = $_POST['mh9'];
    $mh10 = $_POST['mh10'];
    $mh11 = $_POST['mh11'];
    $mh12 = $_POST['mh12'];
    $mh13 = $_POST['mh13'];
    $mh14 = $_POST['mh14'];
    $mh15 = $_POST['mh15'];
    $mh16 = $_POST['mh16'];
    $mh17 = $_POST['mh17'];
    $mh18 = $_POST['mh18'];
    $mh19 = $_POST['mh19'];
    $mh20 = $_POST['mh20'];
    $mh21 = $_POST['mh21'];
    $mh22 = $_POST['mh22'];
    $mh23 = $_POST['mh23'];
    $mh24 = $_POST['mh24'];
    $mtl1 = $_POST['mtl1'];
    $mtl2 = $_POST['mtl2'];
    $mtl3 = $_POST['mtl3'];
    $mtl4 = $_POST['mtl4'];
    $mtl5 = $_POST['mtl5'];
    $mtl6 = $_POST['mtl6'];
    $mtl7 = $_POST['mtl7'];
    $mtl8 = $_POST['mtl8'];
    $mtl9 = $_POST['mtl9'];
    $mtl10 = $_POST['mtl10'];
    $mtl11 = $_POST['mtl11'];
    $mtl12 = $_POST['mtl12'];
    $mtl13 = $_POST['mtl13'];
    $mtl14 = $_POST['mtl14'];
    $mtl15 = $_POST['mtl15'];
    $mtl16 = $_POST['mtl16'];
    $mtl17 = $_POST['mtl17'];
    $mtl18 = $_POST['mtl18'];
    $mtl19 = $_POST['mtl19'];
    $mtl20 = $_POST['mtl20'];
    $mtl21 = $_POST['mtl21'];
    $mtl22 = $_POST['mtl22'];
    $mtl23 = $_POST['mtl23'];
    $mtl24 = $_POST['mtl24'];
    $r1 = $_POST['r1'];
    $r2 = $_POST['r2'];
    $r3 = $_POST['r3'];
    $r4 = $_POST['r4'];
    $r5 = $_POST['r5'];
    $r6 = $_POST['r6'];
    $r7 = $_POST['r7'];
    $r8 = $_POST['r8'];
    $r9 = $_POST['r9'];
    $r10 = $_POST['r10'];
    $r11 = $_POST['r11'];
    $r12 = $_POST['r12'];
    $r13 = $_POST['r13'];
    $r14 = $_POST['r14'];
    $r15 = $_POST['r15'];
    $r16 = $_POST['r16'];
    $r17 = $_POST['r17'];
    $r18 = $_POST['r18'];
    $r19 = $_POST['r19'];
    $r20 = $_POST['r20'];
    $r21 = $_POST['r21'];
    $r22 = $_POST['r22'];
    $r23 = $_POST['r23'];
    $r24 = $_POST['r24'];
    $res_ins = $_POST['res_ins'];
    $status = $_POST['status'];
    $result = mysql_query("insert into result_tbl (res_class, res_year, res_roll, res_num, res_dob, res_fnum, res_group, res_mnum, res_type, res_gpa, res_addrs, c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12, c13, c14, c15, c16, c17, c18, c19, c20, c21, c22, c23, c24, s1, s2, s3, s4, s5, s6, s7, s8, s9, s10, s11, s12, s13, s14, s15, s16, s17, s18, s19, s20, s21, s22, s23, s24,  mt1, mt2, mt3, mt4, mt5, mt6, mt7, mt8, mt9, mt10, mt11, mt12, mt13, mt14, mt15, mt16, mt17, mt18, mt19, mt20, mt21, mt22, mt23, mt24,mp1, mp2, mp3, mp4, mp5, mp6, mp7, mp8, mp9, mp10, mp11, mp12, mp13, mp14, mp15, mp16, mp17, mp18, mp19, mp20, mp21, mp22, mp23, mp24, mm1, mm2, mm3, mm4, mm5, mm6, mm7, mm8, mm9, mm10, mm11, mm12, mm13, mm14, mm15, mm16, mm17, mm18, mm19, mm20, mm21, mm22, mm23, mm24, mh1, mh2, mh3, mh4, mh5, mh6, mh7, mh8, mh9, mh10, mh11, mh12, mh13, mh14, mh15, mh16, mh17, mh18, mh19, mh20, mh21, mh22, mh23, mh24, mtl1, mtl2, mtl3, mtl4, mtl5, mtl6, mtl7, mtl8, mtl9, mtl10, mtl11, mtl12, mtl13, mtl14, mtl15, mtl16, mtl17, mtl18, mtl19, mtl20, mtl21, mtl22, mtl23, mtl24, r1, r2, r3, r4, r5, r6, r7, r8, r9, r10, r11, r12, r13, r14, r15, r16, r17, r18, r19, r20, r21, r22, r23, r24, res_ins, status) values('$res_class','$res_year','$res_roll','$res_num','$res_dob','$res_fnum','$res_group','$res_mnum','$res_type','$res_gpa','$res_addrs','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$c13','$c14','$c15','$c16','$c17','$c18','$c19','$c20','$c21','$c22','$c23','$c24','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12','$s13','$s14','$s15','$s16','$s17','$s18','$s19','$s20','$s21','$s22','$s23','$s24','$mt1','$mt2','$mt3','$mt4','$mt5','$mt6','$mt7','$mt8','$mt9','$mt10','$mt11','$mt12','$mt13','$mt14','$mt15','$mt16','$mt17','$mt18','$mt19','$mt20','$mt21','$mt22','$mt23','$mt24','$mp1','$mp2','$mp3','$mp4','$mp5','$mp6','$mp7','$mp8','$mp9','$mp10','$mp11','$mp12','$mp13','$mp14','$mp15','$mp16','$mp17','$mp18','$mp19','$mp20','$mp21','$mp22','$mp23','$mp24','$mm1','$mm2','$mm3','$mm4','$mm5','$mm6','$mm7','$mm8','$mm9','$mm10','$mm11','$mm12','$mm13','$mm14','$mm15','$mm16','$mm17','$mm18','$mm19','$mm20','$mm21','$mm22','$mm23','$mm24','$mh1','$mh2','$mh3','$mm4','$mm5','$mm6','$mm7','$mm8','$mm9','$mm10','$mm11','$mm12','$mm13','$mm14','$mm15','$mm16','$mm17','$mm18','$mm19','$mm20','$mm21','$mm22','$mm23','$mm24','$mtl1','$mtl2','$mtl3','$mtl4','$mtl5','$mtl6','$mtl7','$mtl8','$mtl9','$mtl10','$mtl11','$mtl12','$mtl13','$mtl14','$mtl15','$mtl16','$mtl17','$mtl18','$mtl19','$mtl20','$mtl21','$mtl22','$mtl23','$mtl24','$mtl1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$r9','$r10','$r11','$r12','$r13','$r14','$r15','$r16','$r17','$r18','$r19','$r20','$r21','$r22','$r23','$r24','$res_ins','$status')")or die(mysql_error());

    if ($result) {
        echo ("<p style='font-size:20px;'>Result input successfully</p>");
    } else {
        echo ("<p style='font-size:20px;'>Result input Failed</p>");
    }
}
//header("location: index.php?action=_stu_hsc1_view");
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Add New Result</title>
    </head>
    <body>
        <div class="resultview">
            <h2>Add Internal Result...</h2>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <table cellspacing="0" cellpadding="0" width="100%" border="1">
                <tbody>
                    <tr>
                        <td valign="middle" height="30" align="center" class="black16bold"><input style="width: 100px;" type="text" name="res_class" placeholder="ex: Hsc 1st year" /> Result <input style="width: 100px;" type="text" name="res_year" placeholder="ex: 2015" /><hr></td>
                    </tr>
                    <tr>
                        <td valign="middle" align="center">
                            <table cellspacing="0" cellpadding="0" width="100%" border="0">
                                <tbody>
                                    <tr>
                                        <td valign="middle" align="center">
                                            <table cellspacing="1" cellpadding="3" width="100%" border="1" class="black12">
                                                <tbody>
                                                    <tr>
                                                        <td width="12%" valign="middle" bgcolor="" align="left">Roll No</td>
                                                        <td width="27%" valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_roll" placeholder="ex: 403545" /></td>
                                                        <td width="13%" valign="middle" bgcolor="" align="left">Name</td>
                                                        <td width="39%" valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_num" placeholder="ex: RAKIB KHAN" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="middle" bgcolor="" align="left">Date of Birth</td>
                                                        <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_dob" placeholder="ex: 12-08-1996" /></td>
                                                        <td valign="middle" bgcolor="" align="left">Father's Name</td>
                                                        <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_fnum" placeholder="ex: SHAHAJAHAN KHAN" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="middle" bgcolor="" align="left">Group</td>
                                                        <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_group" placeholder="ex: BUSINESS STUDIES" /></td>
                                                        <td valign="middle" bgcolor="" align="left">Mother's Name</td>
                                                        <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_mnum" placeholder="ex: ROKEYA BEGUM" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="middle" bgcolor="" align="left">Type</td>
                                                        <td valign="middle" bgcolor="" align="left"><input style="width: 170px;" type="text" name="res_type" placeholder="ex: REGULAR" /></td>
                                                        <td valign="middle" bgcolor="" align="left">Result</td>
                                                        <td valign="middle" bgcolor="" align="left" class="black12bold"><input style="width: 170px;" type="text" name="res_gpa" placeholder="ex: GPA 4.00" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="middle" bgcolor="" align="left">Address</td>
                                                        <td valign="middle" bgcolor="" align="left" colspan="5"><input style="width: 470px;" type="text" name="res_addrs" placeholder="ex: Vill: Jaforpur, PO: Rajghat, PS: Avoynagar, Dist: Jessore" /></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" height="30" align="center"><span class="black16bold">Subject-Wise Grade / Mark Sheet Input Field</span></td>
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
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c1" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s1" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt1" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp1" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm1" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh1" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl1" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r1" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c2" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s2" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt2" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp2" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm2" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh2" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl2" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r2" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c3" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s3" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt3" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp3" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm3" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh3" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl3" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r3" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c4" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s4" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt4" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp4" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm4" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh4" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl4" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r4" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c5" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s5" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt5" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp5" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm5" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh5" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl5" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r5" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c6" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s6" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt6" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp6" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm6" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh6" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl6" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r6" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c7" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s7" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt7" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp7" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm7" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh7" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl7" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r7" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c8" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s8" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt8" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp8" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm8" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh8" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl8" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r8" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c9" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s9" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt9" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp9" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm9" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh9" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl9" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r9" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c10" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s10" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt10" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp10" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm10" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh10" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl10" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r10" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c11" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s11" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt11" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp11" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm11" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh11" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl11" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r11" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c12" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s12" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt12" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp12" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm12" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh12" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl12" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r12" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c13" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s13" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt13" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp13" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm13" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh13" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl13" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r13" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c14" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s14" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt14" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp14" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm14" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh14" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl14" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r14" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c15" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s15" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt15" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp15" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm15" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh15" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl15" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r15" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c16" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s16" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt16" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp16" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm16" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh16" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl16" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r16" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c17" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s17" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt17" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp17" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm17" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh17" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl17" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r17" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c18" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s18" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt18" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp18" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm18" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh18" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl18" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r18" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c19" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s19" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt19" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp19" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm19" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh19" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl19" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r19" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c20" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s20" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt20" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp20" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm20" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh20" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl20" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r20" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c21" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s21" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt21" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp21" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm21" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh21" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl21" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r21" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c22" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s22" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt22" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp22" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm22" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh22" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl22" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r22" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c23" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s23" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt23" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp23" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm23" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh23" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl23" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r23" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="c24" placeholder="ex: 101" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 270px;" type="text" name="s24" placeholder="ex: BANGLA" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mt24" placeholder="ex: Theory" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mp24" placeholder="ex: practical" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mm24" placeholder="ex: MCQ" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mh24" placeholder="ex: internal" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="mtl24" placeholder="ex: total" /></td>
                                        <td valign="middle" bgcolor="" align="left"><input style="width: 70px;" type="text" name="r24" placeholder="ex: grade" /></td>
                                    </tr>
                                    <tr>
                                        <td width="12%" valign="middle" bgcolor="" align="left">Institute Name</td>
                                        <td width="27%" valign="middle" bgcolor="" align="left"><input style="width: 470px;" type="text" name="res_ins" placeholder="ex: Noapara Model...." /></td>
                                    </tr>
                                    <tr>
                                        <td width="12%" valign="middle" bgcolor="" align="left">Status</td>
                                        <td width="27%" valign="middle" bgcolor="" align="left">
                                            <select name="" id="">
                                                <option value="0">Inactive</option>
                                                <option value="1">Active</option>
                                            </select>
                                        </td>
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
<input style="font-size: 15px; padding: 0px 20px; margin-top: 10px; float: right;color: red;" type="submit" value="Save" name="form1"/>
</form>
</body>
</html>