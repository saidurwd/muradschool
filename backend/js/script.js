// JavaScript Document
function disp_confirm()
  {
  var r=confirm("Are you sure want to delete?")
  if (r==true)
    {
	return true;
    }
  else
    {
    return false;
    }
  }


function newReport(){
var cont;
var allid = new Array("title","photo","cdate");
//allid=ids.split("|");
var msg;
for (var i=0;i<=allid.length-1;i++){
cont=document.getElementById(allid[i]).value;
if(cont.length==0){
 alert("You should fill the required fields properly");
 document.getElementById(allid[i]).focus();
 return false;
 }
}
return true;
}


function newUser(){
var cont;
var allid = new Array("Name","Email","userName","Password");
//allid=ids.split("|");
var msg;
for (var i=0;i<=allid.length-1;i++){
cont=document.getElementById(allid[i]).value;
if(cont.length==0){
 alert("You should fill the required fields properly");
 document.getElementById(allid[i]).focus();
 return false;
 }
}
return true;
}


function checkLogin(){
var cont;
var allid = new Array("userName","Password");
//allid=ids.split("|");
var msg;
for (var i=0;i<=allid.length-1;i++){
cont=document.getElementById(allid[i]).value;
if(cont.length==0){
 alert("You should fill the required fields properly");
 document.getElementById(allid[i]).focus();
 return false;
 }
}
return true;
}