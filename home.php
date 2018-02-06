<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
body {
  background-image: url("knitting%20top%20image.png"); //The image is 842 x 508
  background-attachment:fixed;
  background-position: top centre;
  background-repeat: no-repeat;
}

.auto-style3 {
	font-size: x-large;
	text-align: center;
}

  .paragraph {
    width: 90.2%;
    margin-left: 10%;
    border-top: 0;
  }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    display: inline-block;

}

li a {
	display: inline-block;   
	color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color: #555;
    color: white;
}
#nav {
	width: 100%;
	float: left;
	margin: 0 0 1em 0;
	padding: 0;
	background-color: #f2f2f2;
	border-bottom: 1px solid #ccc;  }
#nav ul {
	list-style: none;
	width: 800px;
	margin: 0 auto;
	padding: 0; }
#nav li {
	float: left; }
#nav li a {
	display: block;
	padding: 8px 15px;
	text-decoration: none;
	font-weight: bold;
	color: #069;
	border-right: 1px solid #ccc; }
#nav li:first-child a {
	border-left: 1px solid #ccc; }
#nav li a:hover {
	color: #c00;
	background-color: #fff; }
.auto-style6 {
	text-align: center;
	font-family: "Times New Roman", Times, serif;
	font-size: xx-large;
}
.auto-style7 {
	text-align: center;
}
</style>
<script type="text/javascript">
<!--
function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>
</head>

<body onload="FP_preloadImgs(/*url*/'button50.jpg',/*url*/'button51.jpg')">
<p>
&nbsp;</p>
<p>
&nbsp;</p>
<p>
&nbsp;</p>
<p>
&nbsp;</p>
<p>
&nbsp;</p>
<p>
&nbsp;</p>
<p >
<div id="nav" style="height: 30px; width: 104%;">
	<ul style="width: 950px">
		<li class="auto-style7" style="width: 150px"><a href="eventRegistrationForm.php">My Events</a></li>
		<li class="auto-style7">
		<a href="eventRegistrationForm.php" style="width: 150px">Event Sign-Up</a></li>
		<li style="width: 200px" class="auto-style7"><a href="createEvent.php">Create a New Event</a></li>
		<li class="auto-style7" style="width: 150px"><a href="queries.php">Queries</a></li>
		<li class="auto-style7" style="width: 150px"><a href="reports.php">Reports</a></li>
	</ul>
</div>
</p><p class="auto-style6">
<?php
session_start();
echo "Hi ".$_SESSION['FirstName']."! Welcome to the Knitting Society's member page";

?>
</p>
<p class="auto-style6">
Here you can browse and sign up for upcomming events and even create events of your own. </p>
<p>
&nbsp;</p>
<p>&nbsp;</p>
<p class="auto-style7" style="height: 33px">
<a href="logOut.php">
<img id="img1" alt="Log Out" height="30" width ="130" onmousedown="FP_swapImg(1,0,/*id*/'img1',/*url*/'button51.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img1',/*url*/'button4F.jpg')" onmouseover="FP_swapImg(1,0,/*id*/'img1',/*url*/'button50.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img1',/*url*/'button50.jpg')" src="button4F.jpg" style="border: 0" width="100" /><!-- MSComment="ibutton" fp-style="fp-btn: Braided Row 1" fp-title="Log Out" --></a></p>
<p>
</p>
</body>

</html>
