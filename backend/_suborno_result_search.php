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
                          <td align="right" style="font-weight: bold;">Roll No.: </td>
                          <td width="1%" valign="top">&nbsp;</td>
                          <td valign="top"><input type="text" size="15" name="roll_search" style="background-color: #f4f0f2;
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
                          <td align="center" colspan="3"><input type="submit" value="Submit" name="Submit" style="margin-left: 160px; font-size: 13px;">
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
                            $searchid = $_POST['year_search'];
                            $searchclass = $_POST['class_search'];
                            $searchroll = $_POST['roll_search'];
                            $searchroll = preg_replace("#[^0-9a-z]#i", "", $searchroll);
                            $query = mysql_query("SELECT * from suborno_tbl WHERE res_roll = ".$searchroll."  AND res_class = '".$searchclass."' AND tech_id = '".$searchid."' LIMIT 1") or die('could not search');
                            $output = 'Year / Examination / Roll number did\'t match that you have entered. <a href="_suborno_result_search.php">Please Again search</a>';
                            ?>
                    <p style="float: right; margin: 7px;"><a href="#" onClick="PrintDiv();"><img src="images/Print-Icon1.png" alt="" style="float: right;" />Print this mark-sheet by click in here...</a></p>
                <?php
										while($row = mysql_fetch_array($query)){
									
										$tech_id = $row['tech_id'];
										$res_roll = $row['res_roll'];
										$res_class = $row['res_class'];
									?>
                    <div id="divToPrint" class="resulttbl">
                      <table cellspacing="0" cellpadding="0" width="100%" border="1" style="margin-bottom: 15px; border: 3px solid blue;border-collapse: collapse;background:#fff;">
                        <tbody>
						  <table>
                                        <tr>
										<td>
                                            <a href="_presuborno_edit.php?id=<?php echo $row['t_id'];?>">Edit</a> | 
				<a onClick="return confirm_del();" href="_presuborno_del.php?id=<?php echo $row['t_id'];?>">Delete </a>
				</td>
				</tr>
                                     
                                    </table>
                          <tr>
                            <td width="8%" valign="middle" bgcolor="" align="left">Passing Year:</td>
                            <td width="27%" valign="middle" bgcolor="" align="left"><?php echo $row['tech_id'];?></td>
                          </tr>
						   <tr>
                            <td width="8%%" valign="middle" bgcolor="" align="left">Last Examination:</td>
                            <td width="27%" valign="middle" bgcolor="" align="left"><?php echo $row['res_class'];?></td>
							</tr>
						   <tr>
                           <td width="8%%" valign="middle" bgcolor="" align="left">Examination Roll:</td>
                            <td width="27%" valign="middle" bgcolor="" align="left"><?php echo $row['res_roll'];?></td>
							</tr>
						   <tr>
                            <td width="8%%" valign="middle" bgcolor="" align="left">Name</td>
                            <td width="39%" valign="middle" bgcolor="" align="left"><?php echo $row['tech_name'];?></td>
                          </tr>
                               <tr>
                            <td width="8%" valign="middle" bgcolor="" align="left">Designation:</td>
                            <td width="27%" valign="middle" bgcolor="" align="left"><?php echo $row['tech_designation'];?></td>
                          </tr>
						   <tr>
                            <td width="8%%" valign="middle" bgcolor="" align="left">Company Name/Own Business:</td>
                            <td width="27%" valign="middle" bgcolor="" align="left"><?php echo $row['tech_indxno'];?></td>
							</tr>
						   <tr>
                           <td width="8%%" valign="middle" bgcolor="" align="left">Contact No:</td>
                            <td width="27%" valign="middle" bgcolor="" align="left"><?php echo $row['tech_contact'];?></td>
							</tr>
						   <tr>
                            <td width="8%%" valign="middle" bgcolor="" align="left">Address:</td>
                            <td width="39%" valign="middle" bgcolor="" align="left"><?php echo $row['tech_sub'];?></td>
                          </tr>
						  <tr>
                            <td width="8%%" valign="middle" bgcolor="" align="left">Photo:</td>
                            <td width="39%" valign="middle" bgcolor="" align="left"><?php echo $row['tech_photo'];?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
              </form></td>
              </tr>
             
            </table>
	</td>
            </tr>
            </tbody>
            </table>
        </div>
		<div>
                               
								<div align="center">
                                 
								<?php
									}
							
							
								?>
									<p style="background: #fff;color: red;font-size: 14px;margin: 0;padding-bottom: 10px;text-align: center;"><?php print($output); ?></p>
		
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
  
    </body>
</html>
