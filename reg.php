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
<p align="right">
<input type="button" value="Close Window" onClick="javascript:window.close()"
style="font-size: 14pt; font-family: Verdana; color: #000000">
</p>
    <div align="center"> 
        <?PHP include("pdf/head.php"); ?>
		<?php include("pdf/motionmenu.php"); ?>
		<div class="maincontent" id="">
			<h2>Search  Internal Result...</h2>
			<table cellspacing="0" cellpadding="0" width="100%" border="0" style="-moz-border-bottom-colors: none;
            -moz-border-left-colors: none;-moz-border-right-colors: none;	-moz-border-top-colors: none;border-color:-moz-use-text-color;border-image: none;border-left: medium none;border-right: medium none;
            border-style: solid none;border-width: 5px medium;">
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
                                                $result = mysql_query("select DISTINCT(res_year) AS res_year from oreg_tbl" ) or die (mysql_error());
                                                while ($row = mysql_fetch_array ($result)){
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
                                                $sub_sikb = $row['sub_sikb'];
                                                $result = mysql_query("select DISTINCT(sub_sikb) AS sub_sikb from oreg_tbl" ) or die (mysql_error());
                                                while ($row = mysql_fetch_array ($result)){
                                                ?>
                                                <option value="<?php echo $row['sub_sikb']; ?>"><?php echo $row['sub_sikb']; ?></option>
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
                            if(isset($_POST['roll_search'])) {

                            if(empty($_POST['roll_search'])){
                            echo'<p style="margin: 0px; text-align: center; padding-bottom: 10px; background:#fff; color: red; font-size: 15px;">Please enter your Roll number</p>';
                            } else {
                            $searchyear = $_POST['year_search'];
                            $searchclass = $_POST['class_search'];
                            $searchroll = $_POST['roll_search'];
                            $searchroll = preg_replace("#[^0-9a-z]#i", "", $searchroll);
                            $query = mysql_query("SELECT * from oreg_tbl WHERE res_roll = ".$searchroll."  AND sub_sikb = '".$searchclass."' AND res_year = '".$searchyear."' LIMIT 1") or die('could not search');
                            $output = 'Year / Examination / Roll number did\'t match that you have entered. <a href="_int_result_search.php">Please Again search</a>';
                            ?>
									<p style="float: right; margin: 7px;"><a href="#" onClick="PrintDiv();"><img src="images/Print-Icon1.png" alt="" style="float: right;" />Print this mark-sheet by click in here...</a></p>
									<?php
										while($row = mysql_fetch_array($query)){
									
										$res_roll = $row['res_roll'];
										$res_year = $row['res_year'];
										$sub_sikb = $row['sub_sikb'];
									?>
                                        
                              
<div id="divToPrint" class="resulttbl">

<table cellspacing="0" cellpadding="0" width="100%" border="1" style="margin-bottom: 15px; border: 3px solid blue;border-collapse: collapse;background:#fff;">
    <tbody>					
        <tr>
			 <td>
                                                                 
												 <table width="960">
    									         <tr>
										         <td width="115" valign="top">	<img src="/sw/backend/upload/l.jpg" width="115" height="115"/></td>											 								   
										             <td width="680" align="center"> <font size="+3" color="8042f4" style="text-shadow:#66FF00"> <?php echo $row['col'];?></font>  
                                                         <br> <strong><font size="3">যোগাযেগের ঠিকানা :  </font></strong> <br>
										                              <font size="+2" color="#1792ef" style="text-shadow:#CCFF66"><?php echo $row['a_add'];?></font> 
                                                         <br> <br> 
											      <strong> <font size="+2" color="#FF0000" style="text-shadow:#66FF66">ছাত্র/ছাত্রির ভর্তি আবেদন পত্র</font></strong>
									        	      </td>
										         <td width="150"><img src="backend/upload/<?php echo $row['tech_photo']; ?>" width="150px" height="184"> </td>		
						          	              </tr>             							                                                         
										          </table>										       
    																												       				
										  
									<div align="center">
										  <table cellspacing="0" cellpadding="0" width="100%" border="1" style="margin-bottom: 0px; border: 3px solid blue;border-collapse: collapse;background:#fff;">
										  <tr align="center">
										  <td> শ্রেনী <?php echo $row['sub_sikb'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  শাখা <?php echo $row['sub_sikb'];?> </td>
										  </tr>
										   <tr align="center">
										  <td> শ্রেনী <?php echo $row['sub_sikb'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; শাখা <?php echo $row['sub_sikb'];?> </td>
										  </tr>
										   <tr align="center">
										  <td> শ্রেনী <?php echo $row['sub_sikb'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; শাখা <?php echo $row['res_roll'];?> </td>
										  </tr>
										  </table>
								   </div>
                                     
                                    <div align="left">
									<table bgcolor="#FFFFCC" bordercolor="#3300FF" >
									<tr>
									<td> আবেদন কোড </td><td><?php echo $row['res_roll'];?> </td>
									</tr>
									</table>
									</div>
									
									  
						 <table align="center"  cellspacing="0" cellpadding="0" width="100%" border="0">
							<tbody>
								<tr>
								<td valign="middle" align="center">									  
										  </td>
								 </tr>
										<tr>
										  <td valign="middle" height="30" align="center">
                                          <span style="color: #000;font-style: italic;font-weight: bold;font-size: 18px; color:#CC0000">আবেদনকারী ছাত্র/ ছাত্রী মাধ্যমিক বা সমমান মার্কশীটের অনুযায়ী ই্ংরেজী ও বাংলায় প্রদানকৃত তথ্য</span></td>
										</tr>
										      <tr>
										       <td valign="middle" align="center">
										           <table cellspacing="0" cellpadding="0" width="100%" border="1" style="margin-bottom: 0px; border: 3px solid blue;border-collapse: collapse;background:#fff;">
										  <tr ‍align="left">
										  <td><font color="#000000" style="border-spacing:inherit" size="+1"> ছাত্র/ছাত্রী নাম বাংলায় :&nbsp;&nbsp; <?php echo $row['stu_nameb'];?>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; পিতার নাম বাংলায়:  &nbsp;&nbsp;<?php echo $row['stu_fnameb'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;মায়ের নাম বাংলায়:   &nbsp;&nbsp;<?php echo $row['stu_mnameb'];?></font><br>
										
										  <font color="#000000" style="border-spacing:inherit" size="+1"> ছাত্র/ছাত্রী নাম ইংরেজী:&nbsp;&nbsp; <?php echo $row['stu_namee'];?> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; পিতার নাম ইংরেজী:  &nbsp;&nbsp;<?php echo $row['stu_fnamee'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; মায়ের নাম ইংরেজী:   &nbsp;&nbsp;<?php echo $row['stu_mnamee'];?></font>
										 <br> 							 
										  <font color="#000000" style="border-spacing:inherit" size="+1">  গ্রাম:&nbsp;&nbsp; <?php echo $row['stu_vill'];?> &nbsp;&nbsp; &nbsp;ডাক:  &nbsp;&nbsp;<?php echo $row['stu_po'];?>&nbsp;&nbsp;&nbsp; থানা:&nbsp;&nbsp;<?php echo $row['stu_ps'];?> &nbsp;&nbsp;জেলা:&nbsp;&nbsp;<?php echo $row['stu_dist'];?>&nbsp;&nbsp; মোবাইল:&nbsp;&nbsp;<?php echo $row['stu_mobile'];?>  </font>									  						   									  							  
										      </td>
										     </tr>										  
										           </table>									 
								 </td>
								 </tr>
								 
								 
								 
								 <tr>
										  <td valign="middle" height="30" align="center">
                                          <span style="color: #000;font-style: italic;font-weight: bold;font-size: 18px; color:#CC0000">আবেদনকারী অভিভাবকের তথ্য</span></td>
										</tr>
								 <tr>
										       <td valign="middle" align="center">
										           <table cellspacing="0" cellpadding="0" width="100%" border="1" style="margin-bottom: 0px; border: 3px solid blue;border-collapse: collapse;background:#fff;">
										  <tr ‍align="left">
										  <td><font color="#000000" style="border-spacing:inherit" size="+1">  অভিভাবকের নাম : &nbsp;&nbsp; <?php echo $row['ovi_oviv'];?> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  সম্পর্ক :  &nbsp;&nbsp;<?php echo $row['ovi_somp'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; পেশা :   &nbsp;&nbsp;<?php echo $row['ovi_prof'];?></font>
										  <br>
										  <font color="#000000" style="border-spacing:inherit" size="+1">  গ্রাম:&nbsp;&nbsp; <?php echo $row['ovi_vill'];?> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  ডাক:  &nbsp;&nbsp;<?php echo $row['ovi_po'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; থানা:   &nbsp;&nbsp;<?php echo $row['ovi_ps'];?></font>
										  							  <br>
										  <font color="#000000" style="border-spacing:inherit" size="+1">  জেলা:&nbsp;&nbsp; <?php echo $row['ovi_dist'];?> &nbsp;&nbsp; &nbsp; বাৎসরিক আয়:  &nbsp;&nbsp;<?php echo $row['ovi_yearin'];?>&nbsp;&nbsp;&nbsp;  জমির পরিমান:&nbsp;&nbsp;<?php echo $row['ovi_land'];?> &nbsp;&nbsp; মোবাইল:&nbsp;&nbsp;<?php echo $row['ovi_mobile'];?> </font>									  						   									  							  
										      </td>
										     </tr>										  
										           </table>									 
								 </td>
								 </tr>
								 
								 
									 <tr>
										  <td valign="middle" height="30" align="center">
                                          <span style="color: #000;font-style: italic;font-weight: bold;font-size: 18px; color:#CC0000">ছাত্র/ ছাত্রী বিষয়ক তথ্য</span></td>
										</tr>
								 <tr>
										       <td valign="middle" align="center">
										           <table cellspacing="0" cellpadding="0" width="100%" border="1" style="margin-bottom: 0px; border: 3px solid blue;border-collapse: collapse;background:#fff;">
										  <tr ‍align="left">
										  <td><font color="#000000" style="border-spacing:inherit" size="+1">   জন্ম তারিখ : &nbsp;&nbsp; <?php echo $row['stu_birth'];?> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  জাতীয়তা:  &nbsp;&nbsp;<?php echo $row['stu_nation'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ধর্ম  :   &nbsp;&nbsp;<?php echo $row['stu_relig'];?>&nbsp;&nbsp;&nbsp;&nbsp; বৈবাহিক :   &nbsp;&nbsp;<?php echo $row['stu_merita'];?></font>
											  						   									  							  
										      </td>
										     </tr>										  
										           </table>									 
								 </td>
								 </tr>
								 	 
								 
								 <tr>
										  <td valign="middle" height="30" align="center">
                                          <span style="color: #000;font-style: italic;font-weight: bold;font-size: 18px; color:#CC0000"> উত্তীর্ণ পরীক্ষা সমুহের বিবরণ</span></td>
										</tr>
								 <tr>
										       <td valign="middle" align="center">
										           <table cellspacing="0" cellpadding="0" width="100%" border="1" style="margin-bottom: 0px; border: 3px solid blue;border-collapse: collapse;background:#fff;">
										  <tr ‍align="left">
										  <td><font color="#000000" style="border-spacing:inherit" size="+1">  পরীক্ষার নাম : &nbsp;&nbsp; <?php echo $row['ex_exam'];?> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  শিক্ষা প্রতিষ্ঠানের নাম:  &nbsp;&nbsp;<?php echo $row['ex_ins'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; রোল নং :   &nbsp;&nbsp;<?php echo $row['ex_roll'];?></font>
										  <br>
										  <font color="#000000" style="border-spacing:inherit" size="+1">  শাখা:&nbsp;&nbsp; <?php echo $row['ex_dept'];?> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  নিবন্ধন সংখ্যা :  &nbsp;&nbsp;<?php echo $row['ex_regist'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  পাশের সাল:   &nbsp;&nbsp;<?php echo $row['ex_passy'];?></font>
										  							  <br>
										  <font color="#000000" style="border-spacing:inherit" size="+1">  শিক্ষা বোর্ডের নাম:&nbsp;&nbsp; <?php echo $row['ex_sikb'];?> &nbsp;&nbsp; &nbsp;  শিক্ষবর্ষ :  &nbsp;&nbsp;<?php echo $row['ex_siky'];?>&nbsp;&nbsp;&nbsp;   জি.পি.এ:&nbsp;&nbsp;<?php echo $row['ex_gpa'];?>  </font>									  						   									  							  
										      </td>
										     </tr>										  
										           </table>									 
								 </td>
								 </tr>
								 
								  <tr>
										  <td valign="middle" height="30" align="center">
                                          <span style="color: #000;font-style: italic;font-weight: bold;font-size: 18px; color:#CC0000"> ভর্তি ইচ্ছুক শ্রেণী ও পাঠ্য বিষয়</span></td>
										</tr>
								 <tr>
										       <td valign="middle" align="center">
										           <table cellspacing="0" cellpadding="0" width="100%" border="1" style="margin-bottom: 0px; border: 3px solid blue;border-collapse: collapse;background:#fff;">
										  <tr ‍align="left">
										  <td><font color="#000000" style="border-spacing:inherit" size="+1">  শিক্ষা বোর্ডের নাম : &nbsp;&nbsp; <?php echo $row['sub_sikb'];?> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   শাখা :  &nbsp;&nbsp;<?php echo $row['sub_dept'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 	 
										  <center>
						  <table cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
						  <tr>
						  <td>
						  
                              <font color="#33FF00"> আবশ্যিক বিষয় </font><br /><font color="#CCFF99">বাংলা ১০১-১০২ </font><br /><font color="#CCFF99">ইংরেজী ১০৭-১০৮ </font><br /><font color="#CCFF99">তথ্য ও যোগাযোগ প্রযুক্তি ২৭৫</font>						    </td>
						    </tr>
						    </table>
					      </center>   
			   
										  <font color="#000000" style="border-spacing:inherit" size="+1">   ঐচ্ছিব বিষয়:&nbsp;&nbsp; <?php echo $row['sub_osik'];?> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;   ঐচ্ছিব বিষয় - 1 :  &nbsp;&nbsp;<?php echo $row['sub_osik1'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   ঐচ্ছিব বিষয় - 2:   &nbsp;&nbsp;<?php echo $row['sub_osik2'];?></font>
										  							 
										  <font color="#000000" style="border-spacing:inherit" size="+1">  চতুর্থ বিষয়:&nbsp;&nbsp; <?php echo $row['sub_4th'];?> </font>									  						   									  							  
										      </td>
										     </tr>										  
										           </table>									 
								 </td>
								 </tr>
								 <tr>
										  <td valign="middle" height="30" align="center">
                                          <span style="color: #000;font-style: italic;font-weight: bold;font-size: 18px; color:#CC0000"> আমি দৃঢ়তার সাথে ঘোষনা করছি যে, উপরে প্রদত্ব সকল তথ্যাদি সম্পূর্ণ সত্য৤ আমি এই মর্মে প্রতিজ্ঞা করছি যে, আমি অধ্যাক্ষের আদেশ ও কলেজ কতৃপক্ষের সকল নিয়ম-নির্দেশনাবলী সর্বদা মেনে চলব এবং আমার দ্বারা কলেজের কোন ক্ষতি অথবা বিশৃঙ্খলা সুষ্টি হবে না৤ যদি কথনও আমার অঙ্গীকার ভঙ্গ হয় তাহলে আমি শ্রদ্বেয় অধ্যক্ষ ও শিক্ষক কর্তৃক প্রদত্ব যে কোন শাস্তি অবনত মস্তকে গ্রহন করবো এবং কোথাও তার প্রতিকারের জন্য দাবী জানাব না৤</span></td>
										</tr> 
										<tr>
										  <td valign="middle" height="30" align="center">
                                       </td>
										</tr> 
										 <tr>
										  <td valign="middle" height="30" align="center">
                                          <span style="color: #000;font-weight: bold;font-size: 18px; color:#CC0000"> তারিখ:-   <u> দিন/ মাস  / বছর </u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u> ছাত্র/ছাত্রীর পূর্ণনাম স্বাক্ষর</u></span></td>
										</tr> 
											 <tr>
										  <td valign="middle" height="30" align="center">
                                       </td>
										</tr> 
								 	 <tr>
										  <td valign="middle" height="30" align="center">
                                       </td>
										</tr> 
										 <tr>
										  <td valign="middle" height="30" align="center">
                                          <span style="color: #000;font-weight: bold;font-size: 14px; color:#CC00DD"> তারিখ:&nbsp; :&nbsp;:&nbsp;:&nbsp;  <u> প্রয়োজনীয় পত্রাদি ও ছবি গ্রহন করা হল</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u> স্বাক্ষর দায়িত্বপ্রাপ্ত শিক্ষকের স্বাক্ষর</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u> অধ্যক্ষর স্বাক্ষর</u></span></td>
										</tr>
										
										 <tr>
										  <td valign="middle" height="30" align="center">
                                          <span style="color: #000;font-style: italic;font-weight: bold;font-size: 11px; color:#CC0055"> (বিঃ দ্রঃ- এস.এস.সি সমোমান নম্বর পত্র ও প্রশাংসা পত্র মুল কপি এবং এর ফটোকপি ও রেজিঃ কার্ডের ফটোকপি সহ মোট ০৩ কপি, পি,পি সাইজ ছবি ০৫ অফিসে জমা দিতে হবে নিধারিতো তারিখের মধ্যে)</span></td>
										</tr>
						 </tbody>
				        </table>
	              
								
									
									                            
					
		</td>
	</tr>
	</tbody>
</table>
			

				
								
							
								<?php
									}
								}
								?>
								
		
								<?php exit();
									}
							
								?>
		</div>
			</form>
						</td>
						</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
								