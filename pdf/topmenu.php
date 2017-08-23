<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Drop-Down Menu</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="css/default.css">

<!-- dd menu -->
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>

</head>
<body>


<ul id="sddm">
		<li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">Banbeis</a>
		<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="http://www.banbeis.gov.bd/db_bb.htm" target="_blank">DATABASE AT BANBEIS</a>
		<a href="http://www.banbeis.gov.bd/es_bd.htm" target="_blank">EDUCATIONAL STRUCTURE</a>
		<a href="http://www.banbeis.gov.bd/db_gis.htm" target="_blank">LINKAGE TO GIS</a>
		<a href="http://www.banbeis.gov.bd/forms.html" target="_blank">List:Institutes with EIIN</a>
		  </div>
	</li>
	<li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Govt. Imp. Notice</a>
		<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="http://www.dshe.gov.bd" target="_blank">Notice-1</a>
		<a href="http://www.dshe.gov.bd" target="_blank">Notice-1</a>
		<a href="http://www.dshe.gov.bd" target="_blank">Notice-3</a>
		<a href="http://www.dshe.gov.bd/standardForm.php" target="_blank">Form</a>
		<a href="http://www.dshe.gov.bd/academic.php?active=1&act=1" target="_blank">Academic Units</a>
		<a href="http://www.dshe.gov.bd/collegeinspection.php?active=1&act=6" target="_blank">Inspection</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()"> Education Board </a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="http://mail.educationboard.gov.bd/src/login.php" target="_blank">Email</a>
		<a href="http://esif.teletalk.com.bd/" target="_blank">eSIF</a>
		<a href="http://www.educationboard.gov.bd/computer/index.php" target="_blank">Education Board Computer Center</a>
		<a href="http://www.educationboard.gov.bd/edb_news_details.php?nid=27" target="_blank">Pre.Public Exam Results info.</a>
		 
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">D.G</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="http://www.dshe.gov.bd/search.php" target="_blank">Monthly Pay Order(MPO)</a>
		<a href="http://www.dshe.gov.bd/form_download.html" target="_blank">Form Download</a>
		<a href="http://www.dshe.gov.bd/Result/dshe_Results.html" target="_blank">Results</a>
		<a href="http://www.dshe.gov.bd/dg_mail.php" target="_blank">Mail Address: D.G</a>
		<a href="http://www.dshe.gov.bd/invitation_tenders1.php" target="_blank">Invitation For Tenders</a>
		<a href="http://www.dshe.gov.bd/contact.html" target="_blank">Contact Us</a>
		<a href="http://www.dshe.gov.bd/physical_education/physical_education.php" target="_blank">Physical Education</a>
		<a href="http://www.dshe.gov.bd/govt_inst/Govt_Institution_category.php" target="_blank">Govt.Education Institutions</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m8')" onmouseout="mclosetime()">Govt. Link Edu</a>
		<div id="m8" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="http://www.moedu.gov.bd" target="_blank">Ministry of Education </a>
		<a href="http://www.dshe.gov.bd/" target="_blank">Directorate of Secondary & Higher Education</a>
		<a href="http://www.nu.edu.bd" target="_blank">National University </a>
		<a href="http://www.educationboard.gov.bd/" target="_blank">Education Board Bangladesh </a>
		<a href="http://www.bangladesh.gov.bd/index.php?Itemid=27&id=33&option=com_content&task=category" target="_blank">Education - National Web Portal Of Bangladesh </a>
		<a href="http://wwww.nctb.gov.bd/" target="_blank">National Curriculum and Text Book Board (NCTB) </a>
		<a href="http://wwww.ugc.gov.bd/" target="_blank"> University Grant Commission (UGC)</a>

		</div>
	</li>
	<li><a href="_contact-form.php" onmouseover="mopen('m9')" onmouseout="mclosetime()">Contact</a>
		<div id="m9" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="_contact-form.php">E-mail</a>
		<a href="_contact-form.php">Submit Request Form</a>
		<a href="#">Call Center</a>
		</div>
	</li>
	<li><a href="" onmouseover="mopen('m10')" onmouseout="mclosetime()">Other</a>
		<div id="m10" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="">items1</a>
		<a href="">items2</a>
		<a href="">items3</a>
		<a href="">items4</a>
		</div>
	</li>
	
</ul>

</body>
</html>