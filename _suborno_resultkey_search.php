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
<title>Registration</title>
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
	

			<h2>Search Information Result...</h2>
			<table cellspacing="0" cellpadding="0" width="100%" border="0" style="-moz-border-bottom-colors: none;			-moz-border-left-colors: none;-moz-border-right-colors: none;	-moz-border-top-colors: none;border-color:-moz-use-text-color;border-image: none;border-left: medium none;border-right: medium none;	border-style: solid none;border-width: 5px medium;">
              <tbody>
               
				<tr>
              <td><form method="post" action="">
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
                          <td width="54%" valign="top"><select name="year_search" style="background-color: #f4f0f2;
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
                                                $tech_id = $row['tech_id'];
                                                $result = mysql_query("select DISTINCT(tech_id) AS tech_id from suborno_tbl" ) or die (mysql_error());
                                                while ($row = mysql_fetch_array ($result)){
                                                ?>
                              <option value="<?php echo $row['tech_id']; ?>"><?php echo $row['tech_id']; ?></option>
                              <?php } ?>
                            </select>
                          </td>
                        </tr>
                        <tr valign="top" align="left">
                          <td width="45%" align="right" style="font-weight: bold;">Examination : </td>
                          <td width="1%" valign="top">&nbsp;</td>
                          <td width="54%" valign="top"><select name="class_search" style="background-color: #f4f0f2;
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
                                                $result = mysql_query("select DISTINCT(res_class) AS res_class from suborno_tbl" ) or die (mysql_error());
                                                while ($row = mysql_fetch_array ($result)){
                                                ?>
                              <option value="<?php echo $row['res_class']; ?>"><?php echo $row['res_class']; ?></option>
                              <?php } ?>
                            </select>
                          </td>
                        </tr>
                       
                        <tr valign="top" align="left">
                          <td align="center" colspan="3"><input type="submit" value="Submit" name="Submit" style="margin-left: 160px; font-size: 13px;">
                          </td>
                        </tr>
                        <tr valign="top" align="left">
                          <td colspan="3"></td>
                        </tr>
                      </tbody>
                    </table>
                <?php
                            if(isset($_POST['year_search'])) {

                            if(empty($_POST['class_search'])){
                            echo'<p style="margin: 0px; text-align: center; padding-bottom: 10px; background:#fff; color: red; font-size: 15px;">Please enter your Roll number</p>';
                            } else {
                            $searchid = $_POST['year_search'];
                            $searchclass = $_POST['class_search'];
                           
                            $query = mysql_query("SELECT * from suborno_tbl WHERE res_class like '%$searchclass%' OR tech_id like '%$searchid%'  LIMIT 0, 20") or die('could not search');
                           $count = mysql_num_rows($query);
								if($count==0){
									$output = 'Year / Examination / Roll number did\'t match that you have entered. <a href="_int_result_search.php">Please Again search</a>';
								}
								else
								{
									?>
									<p style="float: right; margin: 7px;"><a href="#" onClick="PrintDiv();"><img src="images/Print-Icon1.png" alt="" style="float: right;" />Print this registration copy by click in here...</a></p>
                                  <?php
										while($row = mysql_fetch_array($query))
										{
										     $tech_id = $row['tech_id'];
										     $res_class = $row['res_class'];
									?>
                   <div id="divToPrint" class="resulttbl">
								<table width="100%" height="100%" border="1" cellpadding="0" cellspacing="0" style="margin-bottom: 15px; border: 3px solid blue;border-collapse: collapse;background:#fff;">
									<tbody>
									       <tr>
									            <td width="100%" align="center" valign="middle">
									                   <table cellspacing="0" cellpadding="0" width="100%" border="0">
										                     <tbody>
										                          <tr>
										                           <td valign="middle" align="center">
										                                  <table cellspacing="1" cellpadding="3" width="86%" border="1" style="border-collapse: collapse;">
											                                      <tbody>
																				 
																				 
											                                         <tr>
                                                                                     <td  valign="middle" bgcolor="">SL No.:</td>
                                                                                      <td  valign="middle" bgcolor="">Passing Year:</td>
                                                                                       <td  valign="middle" bgcolor="">Last Examination:</td>
                                                                                     <td   valign="middle" bgcolor="">Examination Roll:</td>
                           															  <td valign="middle" bgcolor="">Name</td>
																					 <td  valign="middle" bgcolor="">Designation:</td>
																																				 
																				  <td  valign="middle" bgcolor="">Company Name/Own Business:</td>
																					  <td  valign="middle" bgcolor="">Contact No:</td>
																					   <td valign="middle" bgcolor="">Address:</td>
																					    <td valign="middle" bgcolor="" align="left">Photo:</td>
																					   </tr>
																					    <?php
										while($row = mysql_fetch_array($query))
										{
																	?>				
																	
																	   <tr>
																	   <td><?php echo $row['t_id'];?></td>
                           		                                  	<td><?php echo $row['tech_id'];?></td>
                                                                    <td  bgcolor="" align="left"><?php echo $row['res_class'];?></td>
                          															<td  bgcolor="" align="left"><?php echo $row['res_roll'];?></td>			 																             												          
                          												           <td bgcolor="" align="left"><?php echo $row['tech_name'];?></td>                       														                          															
                          													    <td bgcolor="" align="left"><?php echo $row['tech_designation'];?></td>                       											                                  														
                            										           <td   bgcolor="" align="left"><?php echo $row['tech_indxno'];?></td>		            										                                  														  
                           														 <td bgcolor="" align="left"><?php echo $row['tech_contact'];?></td>
				        														               													   
                           													    <td  bgcolor="" align="left"><?php echo $row['tech_sub'];?></td>
																								                           
                                                                               <td width="57%">
						                                                      <?php if($row['tech_photo'] != ""): ?>
							                             <img src="backend/upload/<?php echo $row['tech_photo']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
					                                      	<?php else: ?>
						                                 	<img src="images/default.png" width="50px" height="50px" style="border:1px solid #333333;">
						                                       <?php endif; } ?>					</td>							
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
							
								<?php exit();
									}
							}
								?>
						</form>
					</td>
				</tbody>
			</table>
		</div>
	</div>
	<div align="center">
		<?php include("pdf/copyright.php"); ?>
	</div>
    </body>
</html>
