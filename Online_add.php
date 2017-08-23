<?php 
ob_start();
include('dbconnect.php');
//include('_admin_session.php');



	if (!isset($_FILES['tech_photo']['tmp_name'])) {
		echo "";
	}else{
		$file=$_FILES['tech_photo']['tmp_name'];
		$tech_photo = $_FILES["tech_photo"] ["name"];
		$tec_photo_name= addslashes($_FILES['tech_photo']['name']);
		$size = $_FILES["tech_photo"] ["size"];
		$error = $_FILES["tech_photo"] ["error"];

		if ($error > 0){
			echo"You need to select a photo.";
		}else{
			if($size > 10000000)
			{
			die("Format is not allowed or file size is too big!");
			}
			else{
						
				$tech_photo =$_FILES["tech_photo"]["name"];
				$tech_id = $_POST['tech_id'];
				$res_roll = $_POST['res_roll'];
                $res_year = $_POST['res_year'];
                $sub_eduyear = $_POST['sub_eduyear'];
                $sub_adddate = $_POST['sub_adddate'];
                $sub_regist = $_POST['sub_regist'];
				$stu_nameb = $_POST['stu_nameb'];
				$stu_fnameb = $_POST['stu_fnameb'];
				$stu_mnameb = $_POST['stu_mnameb'];
				$stu_namee = $_POST['stu_namee'];
				$stu_fnamee = $_POST['stu_fnamee'];
				$stu_mnamee = $_POST['stu_mnamee'];
				$stu_vill = $_POST['stu_vill'];
				$stu_po = $_POST['stu_po'];
				$stu_ps = $_POST['stu_ps'];
				$stu_dist = $_POST['stu_dist'];
				$stu_mobile = $_POST['stu_mobile'];
				$ovi_oviv = $_POST['ovi_oviv'];
				$ovi_somp = $_POST['ovi_somp'];
				$ovi_prof = $_POST['ovi_prof'];
				$ovi_vill = $_POST['ovi_vill'];
				$ovi_po = $_POST['ovi_po'];
				$ovi_ps = $_POST['ovi_ps'];
				$ovi_dist = $_POST['ovi_dist'];
				$ovi_yearin = $_POST['ovi_yearin'];
				$ovi_land = $_POST['ovi_land'];
				$ovi_mobile = $_POST['ovi_mobile'];
				$stu_birth = $_POST['stu_birth'];
				$stu_nation = $_POST['stu_nation'];
				$stu_relig = $_POST['stu_relig'];
				$stu_merita = $_POST['stu_merita'];
				$ex_exam = $_POST['ex_exam'];
				$ex_ins = $_POST['ex_ins'];
				$ex_roll = $_POST['ex_roll'];
				$ex_dept = $_POST['ex_dept'];
				$ex_regist = $_POST['ex_regist'];
				$ex_passy = $_POST['ex_passy'];
				$ex_sikb = $_POST['ex_sikb'];
				$ex_siky = $_POST['ex_siky'];
				$ex_gpa = $_POST['ex_gpa'];
				$sub_sikb = $_POST['sub_sikb'];
				$sub_dept = $_POST['sub_dept'];
				$sub_osik = $_POST['sub_osik'];
				$sub_osik1 = $_POST['sub_osik1'];
				$sub_osik2 = $_POST['sub_osik2'];
				$sub_4th = $_POST['sub_4th'];
				$col = $_POST['col'];
				$a_add = $_POST['a_add'];
				
				
				$file_ext = substr($tech_photo, strripos($tech_photo, '.')); 
				$f1 = strtotime(date('Y-m-d H:i:s')). $file_ext;

				if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!='.gif')){
					echo "Only jpg, jpeg, png and gif format images are allowed to upload.";
				}else{
					move_uploaded_file($_FILES["tech_photo"]["tmp_name"],"backend/upload/" . $f1);	
					@unlink($_FILES["tech_photo"]["tmp_name"]);
					
					mysql_query("insert into oreg_tbl (tech_id, res_roll, res_year, sub_eduyear, sub_adddate, sub_regist,  stu_nameb, stu_fnameb, stu_mnameb, stu_namee, stu_fnamee, stu_mnamee, stu_vill, stu_po, stu_ps, stu_dist, stu_mobile, ovi_oviv, ovi_somp, ovi_prof, ovi_vill, ovi_po, ovi_ps, ovi_dist, ovi_yearin, ovi_land,ovi_mobile, stu_birth, stu_nation, stu_relig, stu_merita, ex_exam, ex_ins, ex_roll, ex_dept, ex_regist, ex_passy, ex_sikb, ex_siky, ex_gpa, sub_sikb, sub_dept, sub_osik, sub_osik1, sub_osik2, sub_4th, col, a_add, tech_photo) 
					values('$tech_id','$res_roll','$res_year','$sub_eduyear','$sub_adddate','$sub_regist', '$stu_nameb','$stu_fnameb','$stu_mnameb','$stu_namee','$stu_fnamee','$stu_mnamee','$stu_vill','$stu_po','$stu_ps','$stu_dist','$stu_mobile','$ovi_oviv','$ovi_somp','$ovi_prof',	'$ovi_vill','$ovi_po','$ovi_ps','$ovi_dist','$ovi_yearin','$ovi_land','$ovi_mobile','$stu_birth','$stu_nation','$stu_relig','$stu_merita','$ex_exam','$ex_ins','$ex_roll','$ex_dept','$ex_regist','$ex_passy','$ex_sikb','$ex_siky','$ex_gpa','$sub_sikb','$sub_dept','$sub_osik','$sub_osik1','$sub_osik2','$sub_4th','$col','$a_add','$f1')")or die(mysql_error());
					
					echo"<p style='font-size:20px;'>Present  Data has been input successfully</p>";
				}
			}
			header("location: index.php");
		}
	}
	

?>
<html lang="bn-BD">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>অনলাইন ভর্তি আবেদন</title>
</head>

<body>

 <div  id="one" style="position:absolute; top:318px; z-index:1; left: 0px; width: 100%; visibility: hidden"> 
     </div>
<p align="right">
<input type="button" value="Close Window" onClick="javascript:window.close()"
style="font-size: 14pt; font-family: Verdana; color: #000000">
</p>
	<div align="center"> 
		<?PHP include("pdf/head.php"); ?>
		<?php include("pdf/motionmenu.php"); ?>
<div class="row-fluid main_content" style="margin-top:20px;margin-bottom:20px;">
    
        <div class="page_title2">
    <div class="container">
        <div class="addmission-title"><h1>অনলাইন ভর্তি আবেদন</h1></div>
       <center> <div ><font color="#00FF00" size="+2"><u>প্রচ্ছদ-১ - অনলাইন ভর্তি আবেদন: আবেদনকারী ছাত্র/ছাত্রী মাধ্যমিক বা সমমান মার্কশীটের অনুযায়ী লিকতে হবে, ইংরেজীতে বড় অক্ষরে লিখুন</u></font></div></center>
    </div>

    <!-- st content left side -->
    <div class="content_left">
        <!---st application-->
        <div class="reg_form">
                        <form action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <section>
                        বি:দ্র: তারকা (<span class="red">*</span>) চিহ্নিত ফিল্ড অবশ্যই এন্ট্রি করতে হবে।                                            </section>             

                    <fieldset>
                        <div class="row">
						<table>
						    <tr>
							 <td>                       
                              আইডি নং(রোল):<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="2017মাস 01একাদশ 11 সিরিয়াল9" value="" name="res_roll">
                                </label>                              </td>
							   <td>                       
                            ভর্তির সন: <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="2017" value="" name="res_year">
                                </label>                              </td>
							  <td>                       
                            শিক্ষাবর্ষ: <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="2017" value="" name="sub_eduyear">
                                </label>                              </td>
							     <td>                       
                            ভর্তির তারিখ:<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="০১/০১/২০১৭" value="" name="sub_adddate">
                                </label>                              </td>
							     <td>                       
                            নিবন্ধন নং: <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="2017" value="" name="sub_regist">
                                </label>                              </td>
							  </tr>
							  <tr>
						      <td>                       
                               ছাত্র/ছাত্রী নাম বাংলায়<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="মোঃ ফখর উদ্দিন" value="" name="stu_nameb">
                                </label>                              </td>
						   <td>                       
                                পিতার নাম বাংলায়: <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="পিতার নাম" value="" name="stu_fnameb">
                                </label>                           </td>
                                                     <td> 
                                মায়ের নাম বাংলায়: <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="মায়ের নাম" value="" name="stu_mnameb">
                                </label>                           </td>
                   		  </tr>
							  <tr>
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
							    <td>&nbsp;</td>
					      </tr>
						  </table>
						  <table>
						    <tr>
						      <td>                       
                               ছাত্র/ছাত্রী নাম ইংরেজী<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="পিতার নাম" value="" name="stu_namee">
                                </label>
                              </td>
						   <td>                       
                                পিতার নাম ইংরেজী: <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="পিতার নাম" value="" name="stu_fnamee">
                                </label>
                           </td>
                                                     <td> 
                                মায়ের নাম ইংরেজী: <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="মায়ের নাম" value="" name="stu_mnamee">
                                </label>
                           </td>
                   		    </tr>
						  </table>
						  <table>
						    <tr>
						      <td>                       
                      গ্রাম<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="বালিয়াডাঙ্গা" value="" name="stu_vill">
                                </label>
                              </td>
						   <td>                       
                           ডাক <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="খানপুর" value="" name="stu_po">
                                </label>
                           </td>
                                                     <td> 
                  থানা<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="মনিরামপুর" value="" name="stu_ps">
                                </label>
                           </td>
						        <td> 
                       জেলা<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="যশোর" value="" name="stu_dist">
                                </label>
                           </td>
                   		    </tr>
							  <tr>
							     </td>
                                             	  
				
											         <td> 
                       &nbsp;&nbsp; মোবাইল<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="০১৯১২৫৮৩৮১০" value="" name="stu_mobile">
                                </label>
                           </td>
					<td>Photo: 
				<input type="file" name="tech_photo" /></td>
			
							  </tr>
							  
						  </table>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="row">
                          <table>
						  <center>
						  <div ><font color="#00FF00" size="+2"><u>প্রচ্ছদ-২ <i>/</i>আবেদনকারী   অভিভাবকের তথ্য </u></font></div>
    	  </center>
						<tr>
						<td> 
                                অভিভাবকের নাম : <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="পিতার নাম" value="" name="ovi_oviv">
                                </label>
                          </td>

                           <td> 
                               সম্পর্ক <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="বাবা" value="" name="ovi_somp">
                                </label>
                          </td>
						  <td> 
                               পেশা <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="ব্যাবসা" value="" name="ovi_prof">
                                </label>
                          </td>
						  </tr>
						  <tr>
						      <td>                       
                       গ্রাম<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="বালিয়াডাঙ্গা" value="" name="ovi_vill">
                                </label>
                              </td>
						   <td>                       
                            ডাক <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="খানপুর" value="" name="ovi_po">
                                </label>
                           </td>
                                                     <td> 
                     থানা<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="মনিরামপুর" value="" name="ovi_ps">
                                </label>
                           </td>
						                             <td> 
                     জেলা<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="মনিরামপুর" value="" name="ovi_dist">
                                </label>
                           </td>
                   		    </tr>
							<tr>
						<td> 
                                বাৎসরিক আয় <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="৩৬,০০০/=" value="" name="ovi_yearin">
                                </label>
                          </td>

                           <td> 
                              জমির পরিমান<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="৪২" value="" name="ovi_land">
                                </label>
                          </td>
						  <td> 
                              মোবাইল<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="01842583810" value="" name="ovi_mobile">
                                </label>
                          </td>
						  </tr>
						  </table>
                        </div>
                    </fieldset>
					
					 <fieldset>
                        <div class="row">
                          <table>
						  <center>
						  <div ><font color="#00FF00" size="+2"><u>প্রচ্ছদ-৩<i>/</i> ছাত্র/ ছাত্রী বিষয়ক তথ্য</u></font></div>
    	  </center>
						<tr>
						<td> 
                                জন্ম তারিখ<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="০১/০২/১৯৭৯" value="" name="stu_birth">
                                </label>
                          </td>

                           <td> 
                               জাতীয়তা <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="বাংলাদেশি" value="" name="stu_nation">
                                </label>
                          </td>
						  <td> 
                               ধর্ম <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="ইসলাম" value="" name="stu_relig">
                                </label>
                          </td>
						   
						      <td>                       
                        বৈবাহিক<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder=" অবস্থা অবিবাহিত" value="" name="stu_merita">
                                </label>
                              </td>
						      </tr>
						  </table>
                        </div>
                    </fieldset>
					
					
<fieldset>
                        <div class="row">
                          <table>
						  <center>
						  <div ><font color="#00FF00" size="+2"><u>প্রচ্ছদ-৪<i>/</i> উত্তীর্ণ পরীক্ষা সমুহের বিবরণ</u></font></div>
    	  </center>
						<tr>
						<td> 
                                 পরীক্ষার নাম <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="এইচ.এস.সি" value="" name="ex_exam">
                                </label>
                          </td>

                           <td> 
                              শিক্ষা প্রতিষ্ঠানের নাম   <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="বালিয়াডাঙ্গা খানপুর মাধ্যমিক বিদ্যালয়" value="" name="ex_ins">
                                </label>
                          </td>
						  <td> 
                                 রোল নং  <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="১২৩১৪৫" value="" name="ex_roll">
                                </label>
                          </td>
						    </tr>
							<tr>
						<td> 
                                 শাখা <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="বিজ্ঞাণ" value="" name="ex_dept">
                                </label>
                          </td>

                           <td> 
                               নিবন্ধন সংখ্যা <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="১১১২৫৬০০৭৩" value="" name="ex_regist">
                                </label>
                          </td>
						  <td> 
                                  পাশের সাল <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="২০১৫" value="" name="ex_passy">
                                </label>
                          </td>
						    </tr>
							<tr>
						<td> 
                                  শিক্ষা বোর্ডের নাম <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder=" যশোর" value="" name="ex_sikb">
                                </label>
                          </td>

                           <td> 
                               শিক্ষবর্ষ <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="২০১২-১৩" value="" name="ex_siky">
                                </label>
                          </td>
						  <td> 
                                   জি.পি.এ <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="৫.০০" value="" name="ex_gpa">
                                </label>
                          </td>
						    </tr>
						  </table>
                        </div>
                    </fieldset>
					
					
                   <fieldset>
                        <div class="row">
                          <table>
						  <center>
						  <div ><font color="#00FF00" size="+2"><u>প্রচ্ছদ-৫<i>/</i>ভর্তি ইচ্ছুক শ্রেণী ও পাঠ্য বিষয়</u></font></div>
    	  </center>
						<tr>
						<td width="155"> 
                                শ্রেনী <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="একাদশ" value="" name="sub_sikb">
                          </label>                          </td>

                           <td width="100"> 
                               <section class="span3">
                                 শাখা     : <span class="red">*</span>
                                <label class="select">
                                    <select name="sub_dept" value="">
                                        <option disabled="" selected="" value="0">নির্বাচন করুন</option>
                                        <option value="মানবিক">মানবিক</option>
                                        <option value="ব্যবসায় শিক্ষা">ব্যবসায় শিক্ষা</option>
                                        <option value="বিজ্ঞাণ">বিজ্ঞাণ</option>
                                </select>
                                    <i></i>                                </label>
                          </section>                          </td>
						  <td width="96"> 
						  <center>
						  <table cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
						  <tr>
						  <td>
						  
                              <font color="#33FF00"> আবশ্যিক বিষয় </font><br /><font color="#CCFF99">বাংলা ১০১-১০২ </font><br /><font color="#CCFF99">ইংরেজী ১০৭-১০৮ </font><br /><font color="#CCFF99">তথ্য ও যোগাযোগ প্রযুক্তি ২৭৫</font>						    </td>
						    </tr>
						    </table>
					      </center>                          </td>
						     <td width="233"> 
							 <table>
							   <tr>
							   <td>
                               <section class="span3">
                                ঐচ্ছিব বিষয় : <span class="red">*</span>
                                <label class="select">
<select name="sub_osik" value="">
 <option disabled="" selected="" value="0">নির্বাচন করুন</option>
  <option value="পদার্থ বিজ্ঞাণ ১৭৪-১৭৫">পদার্থ বিজ্ঞাণ ১৭৪-১৭৫</option>
  <option value="রসায়ন বিজ্ঞাণ  ১৭৬-১৭৭">রসায়ন বিজ্ঞাণ  ১৭৬-১৭৭</option>
  <option value="জীব বিজ্ঞাণ ১৭৮-১৭৯">জীব বিজ্ঞাণ ১৭৮-১৭৯</option>
  <option value="উচ্চতর গণিত ১৬৫-১৬৬">উচ্চতর গণিত ১৬৫-১৬৬</option>
  <option value="ইতিহাস ৩০৪-৩০৫">ইতিহাস ৩০৪-৩০৫</option>
  <option value="ইসলামের ইতিহাস ও সংস্বৃতি ২৬৭-২৬৮ ">ইসলামের ইতিহাস ও সংস্বৃতি ২৬৭-২৬৮ </option>
  <option value="পৌরনীতি ও সুশাসন ২৬৯-২৭০ "> পৌরনীতি ও সুশাসন ২৬৯-২৭০ </option>
  <option value="অর্থনীতি ১০৯-১১০"> অর্থনীতি ১০৯-১১০</option>
  <option value="সমাজ বিজ্ঞাণ ১১৭-১২২">সমাজ বিজ্ঞাণ ১১৭-১২২</option>
  <option value="ব্যবসায় সংগঠন ও ব্যবস্থাপনা ২৭৭-২৭৮">ব্যবসায় সংগঠন ও ব্যবস্থাপনা ২৭৭-২৭৮</option>
  <option value="হিসাব বিজ্ঞাণ ২৫৩-২৫৪">হিসাব বিজ্ঞাণ ২৫৩-২৫৪</option>
  <option value="উৎপাদন ব্যবস্থাপনা ও বিপন্ন ২৮৬-২৮৭">উৎপাদন ব্যবস্থাপনা ও বিপন্ন ২৮৬-২৮৭</option>
  <option value="সাচিবিক বিদ্যা ও অফিস ব্যবস্থাপনা ২৩৫-২৩৬">সাচিবিক বিদ্যা ও অফিস ব্যবস্থাপনা ২৩৫-২৩৬</option>
</select>
<i></i>                                </label>
                          </section>                  
						  </td>
						     </tr>
							 <tr>
							   <td>
                               <section class="span3">
                                ঐচ্ছিব বিষয় : 1<span class="red">*</span>
                                <label class="select">
<select name="sub_osik1" value="">
 <option disabled="" selected="" value="0">নির্বাচন করুন</option>
  <option value="পদার্থ বিজ্ঞাণ ১৭৪-১৭৫">পদার্থ বিজ্ঞাণ ১৭৪-১৭৫</option>
  <option value="রসায়ন বিজ্ঞাণ  ১৭৬-১৭৭">রসায়ন বিজ্ঞাণ  ১৭৬-১৭৭</option>
  <option value="জীব বিজ্ঞাণ ১৭৮-১৭৯">জীব বিজ্ঞাণ ১৭৮-১৭৯</option>
  <option value="উচ্চতর গণিত ১৬৫-১৬৬">উচ্চতর গণিত ১৬৫-১৬৬</option>
  <option value="ইতিহাস ৩০৪-৩০৫">ইতিহাস ৩০৪-৩০৫</option>
  <option value="ইসলামের ইতিহাস ও সংস্বৃতি ২৬৭-২৬৮ ">ইসলামের ইতিহাস ও সংস্বৃতি ২৬৭-২৬৮ </option>
  <option value=" পৌরনীতি ও সুশাসন ২৬৯-২৭০ "> পৌরনীতি ও সুশাসন ২৬৯-২৭০ </option>
  <option value="অর্থনীতি ১০৯-১১০"> অর্থনীতি ১০৯-১১০</option>
  <option value="সমাজ বিজ্ঞাণ ১১৭-১২২">সমাজ বিজ্ঞাণ ১১৭-১২২</option>
  <option value="ব্যবসায় সংগঠন ও ব্যবস্থাপনা ২৭৭-২৭৮">ব্যবসায় সংগঠন ও ব্যবস্থাপনা ২৭৭-২৭৮</option>
  <option value="হিসাব বিজ্ঞাণ ২৫৩-২৫৪">হিসাব বিজ্ঞাণ ২৫৩-২৫৪</option>
  <option value="উৎপাদন ব্যবস্থাপনা ও বিপন্ন ২৮৬-২৮৭">উৎপাদন ব্যবস্থাপনা ও বিপন্ন ২৮৬-২৮৭</option>
  <option value="সাচিবিক বিদ্যা ও অফিস ব্যবস্থাপনা ২৩৫-২৩৬">সাচিবিক বিদ্যা ও অফিস ব্যবস্থাপনা ২৩৫-২৩৬</option>
</select>
<i></i>                                </label>
                          </section>                  
						  </td>
						     </tr>
							 <tr>
							   <td>
                               <section class="span3">
                                ঐচ্ছিব বিষয় : 2<span class="red">*</span>
                                <label class="select">
<select name="sub_osik2" value="">
 <option disabled="" selected="" value="0">নির্বাচন করুন</option>
  <option value="পদার্থ বিজ্ঞাণ ১৭৪-১৭৫">পদার্থ বিজ্ঞাণ ১৭৪-১৭৫</option>
  <option value="রসায়ন বিজ্ঞাণ  ১৭৬-১৭৭">রসায়ন বিজ্ঞাণ  ১৭৬-১৭৭</option>
  <option value="জীব বিজ্ঞাণ ১৭৮-১৭৯">জীব বিজ্ঞাণ ১৭৮-১৭৯</option>
  <option value="উচ্চতর গণিত ১৬৫-১৬৬">উচ্চতর গণিত ১৬৫-১৬৬</option>
  <option value="ইতিহাস ৩০৪-৩০৫">ইতিহাস ৩০৪-৩০৫</option>
  <option value="ইসলামের ইতিহাস ও সংস্বৃতি ২৬৭-২৬৮ ">ইসলামের ইতিহাস ও সংস্বৃতি ২৬৭-২৬৮ </option>
  <option value="পৌরনীতি ও সুশাসন ২৬৯-২৭০"> পৌরনীতি ও সুশাসন ২৬৯-২৭০ </option>
  <option value="অর্থনীতি ১০৯-১১০"> অর্থনীতি ১০৯-১১০</option>
  <option value="সমাজ বিজ্ঞাণ ১১৭-১২২">সমাজ বিজ্ঞাণ ১১৭-১২২</option>
  <option value="ব্যবসায় সংগঠন ও ব্যবস্থাপনা ২৭৭-২৭৮">ব্যবসায় সংগঠন ও ব্যবস্থাপনা ২৭৭-২৭৮</option>
  <option value="হিসাব বিজ্ঞাণ ২৫৩-২৫৪">হিসাব বিজ্ঞাণ ২৫৩-২৫৪</option>
  <option value="উৎপাদন ব্যবস্থাপনা ও বিপন্ন ২৮৬-২৮৭">উৎপাদন ব্যবস্থাপনা ও বিপন্ন ২৮৬-২৮৭</option>
  <option value="সাচিবিক বিদ্যা ও অফিস ব্যবস্থাপনা ২৩৫-২৩৬">সাচিবিক বিদ্যা ও অফিস ব্যবস্থাপনা ২৩৫-২৩৬</option>
</select>
<i></i>                                </label>
                          </section>                  
						  </td>
						     </tr>
						      </table>
						          </td>
						    <td width="248"> 
                               <section class="span3">
                                 চতুর্থ বিষয় : <span class="red">*</span>
                                <label class="select">
                                    <select name="sub_4th" value="">
									 <option disabled="" selected="" value="0">নির্বাচন করুন</option>
                                         <option value="জীব বিজ্ঞাণ ১৭৮-১৭৯">জীব বিজ্ঞাণ ১৭৮-১৭৯</option>
                                        <option value="উচ্চতর গণিত ১৬৫-১৬৬"> উচ্চতর গণিত ১৬৫-১৬৬</option>
                                        <option value="ইসলাম শিক্ষা ১৪৯-১৫০">ইসলাম শিক্ষা ১৪৯-১৫০</option>
                                        <option value="ভূগোল ১২৫-১২৬">ভূগোল ১২৫-১২৬</option>
										 <option value="যুক্তিবিদ্যা ১২১-১২২">যুক্তিবিদ্যা ১২১-১২২</option>
                                        <option value="সমাজ বিজ্ঞাণ ১১৭-১১৭"> সমাজ বিজ্ঞাণ ১১৭-১১৭</option>
                                        <option value="পৌরনীতি ও সুশাসন ২৬৯-২৭০">পৌরনীতি ও সুশাসন ২৬৯-২৭০</option>
                                        <option value="সাচিবিক বিদ্যা ও অফিস ব্যবস্থাপনা ২৩৫-২৩৬">সাচিবিক বিদ্যা ও অফিস ব্যবস্থাপনা ২৩৫-২৩৬</option>
										<option value="কৃষি শিক্ষ ১৩৯-১৪০"> কৃষি শিক্ষ ১৩৯-১৪০</option>
                                </select>
                                    <i></i>                                </label>
                          </section>                          </td>
					        </tr>
						  </table>
                        </div>
                    </fieldset>
			
              <fieldset>
                        <div class="row">
                          <table>
    					  <center>
						  <div ><font color="#00FF00" size="+2"><u>প্রচ্ছদ-6<i>/</i> প্রতিষ্ঠানের নাম ও ঠিকানা</u></font></div>
    	  </center>
						<tr>
						<td> 
                               প্রতিষ্ঠানের নাম <span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="বালিয়াডাঙ্গা খানপুর কলেজ" value="" name="col">
                                </label>
                          </td>

                           <td> 
                              ঠিকানা<span class="red">*</span>
                                <label class="input">
                                    <input type="text" placeholder="বালিয়াডাঙ্গা,মনিরামপুর,যশোর" value="" name="a_add">                                </label>
                          </td>
					
						      </tr>
						  </table>
                        </div>
                    </fieldset>
                <footer>
				<input type="submit" value="সাবমিট করুন" name="form1"/>
					<input type="reset" value="Reset" style="color: red;" />
                 </footer>
            </form>
        </div>
        <!---end application-->
    </div>
    </div>
</div>

</body>
</html>
