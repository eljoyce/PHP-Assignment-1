<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
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

<body onload="FP_preloadImgs(/*url*/'button47.jpg',/*url*/'button48.jpg')">
<?php
  
  include ("detail.php"); 
  
  $username=$_POST['username'];

$sql = "select * from members where studentID like '%".$username."%'";
$result = $db->query($sql);
$row = mysqli_fetch_assoc($result);
$num_results = mysqli_num_rows ($result);

   if ($num_results == 1) {
   session_start();
   $_SESSION['FirstName'] = $row['firstName'];
   $_SESSION['StudentNumber'] = $row['studentID'];
   header("Location: events.php");
  }
   else {
   echo 'Login Unsuccessful'; 
   }

mysqli_close ($db);
   ?>

<p><a href="index.html">
<img id="img1" alt="Try Again" height="20" onmousedown="FP_swapImg(1,0,/*id*/'img1',/*url*/'button48.jpg')" onmouseout="FP_swapImg(0,0,/*id*/'img1',/*url*/'button46.jpg')" onmouseover="FP_swapImg(1,0,/*id*/'img1',/*url*/'button47.jpg')" onmouseup="FP_swapImg(0,0,/*id*/'img1',/*url*/'button47.jpg')" src="button46.jpg" style="border: 0" width="100" /><!-- MSComment="ibutton" fp-style="fp-btn: Chain Column 1" fp-title="Try Again" --></a></p>

</body>

</html>
