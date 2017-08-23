<?php include('dbconnect.php'); ?>

<!DOCTYPE HTML>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="dshe0000.css" />
<link rel="stylesheet" href="mystyle.css" />
<title>School</title>
</head>
<body bgcolor="#FFFFFF">
  <div  id="one" style="position:absolute; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"> 
     </div>
<p align="right">
<input type="button" value="Close Window" onClick="javascript:window.close()"
style="font-size: 14pt; font-family: Verdana; color: #000000">
</p>
	<div align="center"> 
		<?PHP include("pdf/head.php"); ?>
		<?php include("pdf/motionmenu.php"); ?>
		<div class="maincontent">
			<h2>Application For Admission...</h2>
			<form action="" method="post">
				<table id="admission">
					<?php
						session_start();
						if(isset($_POST['form1'])){
							if(isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]){
								$adm_fullnam = $_POST['adm_fullnam'];
								$adm_fathnam = $_POST['adm_fathnam'];
								$adm_mothnam = $_POST['adm_mothnam'];
								$adm_gurdnam = $_POST['adm_gurdnam'];
								$adm_phone = $_POST['adm_phone'];
								$adm_pre_adds = $_POST['adm_pre_adds'];
								$adm_par_adds = $_POST['adm_par_adds'];
								$adm_nat = $_POST['adm_nat'];
								$adm_dbirth = $_POST['adm_dbirth'];
								$adm_reli = $_POST['adm_reli'];
								$adm_sub1 = $_POST['adm_sub1'];
								$adm_sub2 = $_POST['adm_sub2'];
								$adm_sub3 = $_POST['adm_sub3'];
								$adm_sub4 = $_POST['adm_sub4'];
								$adm_sub5 = $_POST['adm_sub5'];
								$adm_sub6 = $_POST['adm_sub6'];
								$adm_sub7 = $_POST['adm_sub7'];
								$adm_sub8 = $_POST['adm_sub8'];
								$adm_sub9 = $_POST['adm_sub9'];
								$adm_past_insnam = $_POST['adm_past_insnam'];
								$adm_money_resno = $_POST['adm_money_resno'];
								$adm_money_resdat = $_POST['adm_money_resdat'];
								
								$result = mysql_query("insert into admission_tbl (adm_fullnam, adm_fathnam, adm_mothnam, adm_gurdnam, adm_phone, adm_pre_adds, adm_par_adds, adm_nat, adm_dbirth, adm_reli, adm_sub1, adm_sub2, adm_sub3, adm_sub4, adm_sub5, adm_sub6, adm_sub7, adm_sub8, adm_sub9, adm_past_insnam, adm_money_resno, adm_money_resdat) 
								values('$adm_fullnam','$adm_fathnam','$adm_mothnam','$adm_gurdnam','$adm_phone','$adm_pre_adds','$adm_par_adds','$adm_nat','$adm_dbirth','$adm_reli','$adm_sub1','$adm_sub2','$adm_sub3','$adm_sub4','$adm_sub5','$adm_sub6','$adm_sub7','$adm_sub8','$adm_sub9','$adm_past_insnam','$adm_money_resno','$adm_money_resdat')")or die(mysql_error());
								
								echo("<p style='font-size:20px;color:green;'>Thank you $adm_fullnam. Your Admission information has been input successfully</p>");
							}
							else{
								//die("Wrong Code Entered");
								echo ("<p style='font-size:20px;color:red;'>Wrong Captcha Code Entered</p>");
							}
						}
					?>
					<tr>
						<td><span>* All field are required.</span></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td>1. Student Full Name: <span>*</span></td>
						<td><input style="width: 330px;" type="text" name="adm_fullnam" placeholder="ex: Md.Hafizur Rahman" required /></td>
					</tr>
					<tr>
						<td>2. Father's name: <span>*</span></td>
						<td><input style="width: 330px;" type="text" name="adm_fathnam" placeholder="ex: Md.Abul Hasan" required /></td>
					</tr>
					<tr>
						<td>3. Mother's Name: <span>*</span></td>
						<td><input style="width: 330px;" type="text" name="adm_mothnam" placeholder="ex: Mst.Jahanara Begum" required /></td>
					</tr>
					<tr>
						<td>4. Guardian Name(If father not present): </td>
						<td><input style="width: 330px;" type="text" name="adm_gurdnam" placeholder="ex: Md.Kobir Hossain" /></td>
					</tr>
					<tr>
						<td>5. Phone no: <span>*</span></td>
						<td><input style="width: 330px;" type="text" name="adm_phone" placeholder="ex: 01711090090" required /></td>
					</tr>
					<tr>
						<td>6. Present Address: <span>*</span></td>
						<td><textarea name="adm_pre_adds" id="" cols="58" rows="3" placeholder="ex: Vill: Jaforpur, P.O: Rajghat, P.S: Avoynagar, Dist: Jessore." required ></textarea></td>
					</tr>
					<tr>
						<td>7. Permanent Address: <span>*</span></td>
						<td><textarea name="adm_par_adds" id="" cols="58" rows="3" placeholder="ex: Vill: Jaforpur, P.O: Rajghat, P.S: Avoynagar, Dist: Jessore." required ></textarea></td>
					</tr>
					<tr>
						<td>8. Nationality: <span>*</span></td>
						<td><input style="width: 330px;" type="text" name="adm_nat" placeholder="ex: Bangladeshi"  required /></td>
					</tr>
					<tr>
						<td>9. Death of Birth: <span>*</span></td>
						<td><input style="width: 330px;" type="text" name="adm_dbirth" placeholder="ex: 09/09/1987"  required /></td>
					</tr>
					<tr>
						<td>10. Religious: <span>*</span></td>
						<td><input style="width: 330px;" type="text" name="adm_reli" placeholder="ex: Islam"  required /></td>
					</tr>
					<tr>
						<td>11. Subject Choice: </td>
						<td style="float: left; width: 110px;">
							A.<input style="margin-bottom: 5px;width: 85px;" type="text" name="adm_sub1" placeholder="ex: Bangla" /><br />
							B.<input style="margin-bottom: 5px;width: 85px;" type="text" name="adm_sub2" placeholder="ex: English" /><br />
							C.<input style="margin-bottom: 5px;width: 85px;" type="text" name="adm_sub3" placeholder="ex: Computer"/>
						</td>
						<td style="float: left; width: 110px;">
							D.<input style="margin-bottom: 5px;width: 85px;" type="text" name="adm_sub4" placeholder="ex: Physics" /><br />
							E.<input style="margin-bottom: 5px;width: 85px;" type="text" name="adm_sub5" placeholder="ex: Chemistry" /><br />
							F.<input style="margin-bottom: 5px;width: 85px;" type="text" name="adm_sub6" placeholder="ex: Biology" />
						</td>
						<td style="float: left; width: 110px;">
							G.<input style="margin-bottom: 5px;width: 85px;" type="text" name="adm_sub7" placeholder="ex: Math" /><br />
							H.<input style="margin-bottom: 5px;width: 85px;" type="text" name="adm_sub8" placeholder="ex: Bangla" /><br />
							I.<input style="margin-bottom: 5px;width: 85px;" type="text" name="adm_sub9" placeholder="ex: Bangla" />
						</td>
					</tr>
					<tr>
						<td>12. Past Institute Name(Where he/she was study): <span>*</span></td>
						<td><input style="width: 330px;" type="text" name="adm_past_insnam" placeholder="ex: Rajghat High School"  required /></td>
					</tr>
					<tr>
						<td>14. Money Receipt no: <span>*</span></td>
						<td>
							<input style="width: 150px;" type="text" name="adm_money_resno" placeholder="ex: 00900811"  required />
							Date : <input style="width: 150px;" type="text" name="adm_money_resdat" placeholder="ex: 13/08/2014" required />
						</td>
					</tr>
					<tr>
						<td>15. input Code: </td>
						<td><input name="captcha" type="text"></td>
						<td><img style="margin-left: -250px;" src="_captcha.php" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input style="width: 100px; font-size: 15px; padding: 2px 5px;" type="submit" value="Submit" name="form1"/></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>
