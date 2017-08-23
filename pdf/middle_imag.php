<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<title>Untitled Document</title>
<script language="JavaScript1.2">
<!--

var alert_message="This image is copy protected and cannot be copied."

function no_right_click() {
if (document.all) {
if (event.button==2||event.button==3) {
if (event.srcElement.tagName=="IMG"){
alert(alert_message);
return false;
}
}
}
else if (document.layers) {
if (e.which == 3) {
alert(alert_message);
return false;
}
}
else if (document.getElementById){
if (e.which==3&&e.target.tagName=="IMG"){
alert(alert_message)
return false
}
}
}

function associateimages(){
for(i=0;i<document.images.length;i++)
document.images[i].onmousedown=no_right_click;
}

if (document.all)
document.onmousedown=no_right_click
else if (document.getElementById)
document.onmouseup=no_right_click
else if (document.layers)
associateimages()

//-->
</script></head>
<SCRIPT LANGUAGE="JavaScript">
<!--
if (document.referrer != ''){
theRef=document.referrer;
document.write("<SCRIPT LANGUAGE='JavaScript' SRC='http://www.intra-focus.com/JS_CFM/REFERRER.cfm?ACCOUNT=stokeslandgroup&FROM="+theRef+"'></SCRIPT>");
}
//-->
</SCRIPT>
</head>

<body bgcolor="#CCCCCC">
<table bgcolor="#CCCCCC" style="margin-left: 10px;margin-right: 10px;width: 555px;">

<tr>
<td width="599">
<?php include("topmenu.php"); ?>
</td>
</tr>
<tr>
 <td width="599"><img src="" alt="Welcome" name='SlideShow' width="550" height="300"></td>
</tr>
	<tr>
		<td style="text-align: justify;" width="720"><br />
		<font face="Verdana, Arial, Helvetica, sans-serif" size="-1">
			<?php			
				$result= mysql_query("select * from clg_hist_tbl" ) or die (mysql_error());
				while ($row = mysql_fetch_array ($result)){
			?>
			<b>	
				<?php echo $row['hist_text']; ?>		
			</b>
			<?php } ?>
		</font>
		</td>
	</tr>
  </table>
  
<SCRIPT LANGUAGE="JavaScript">
var slideShowSpeed = 5000;
var crossFadeDuration =3;
var Pic = new Array();

<?php	
	$i = 0;
	$result= mysql_query("select * from sli_tbl" ) or die (mysql_error());
	while ($row = mysql_fetch_array ($result)){
	$i++;
?>
Pic[<?php echo $i; ?>] = 'pdf/slider/<?php echo $row['sli_photo']; ?>'
<?php } ?>

var t;
var j = 1;
var p = Pic.length;
var preLoad = new Array();
for (i = 0; i < p; i++) {
preLoad[i] = new Image();
preLoad[i].src = Pic[i];
}
function runSlideShow() {
if (document.all) {
document.images.SlideShow.style.filter="blendTrans(duration=2)";
document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
document.images.SlideShow.filters.blendTrans.Apply();
}
document.images.SlideShow.src = preLoad[j].src;
if (document.all) {
document.images.SlideShow.filters.blendTrans.Play();
}
j = j + 1;
if (j > (p - 1)) j = 1;
t = setTimeout('runSlideShow()', slideShowSpeed);
}
//  End -->
</script>

<SCRIPT LANGUAGE="JavaScript">
runSlideShow();
</SCRIPT>
</body>
</html>
