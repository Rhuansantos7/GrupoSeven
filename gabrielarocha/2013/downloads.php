<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#container{
	width:1000px; /* Largura do Container */
	height:1300px;
	margin:auto; /* Centralizador */
} 
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gabriela Rocha</title>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<link rel="stylesheet" type="text/css" href='css/downloads.css'>
<body onload="MM_preloadImages('img/downloads/wallpaper1black.jpg','img/downloads/wallpaper2black.jpg')">
<?php include('includes/menu.php'); ?>
<div id="container">	
	<?php include('includes/logo.php'); ?>
    
    <div id="downloads"> 	</div>
	<div id="wallpapers">
    <div id="align">
    <a href="http://www.gabrielarocha.com.br/2012/downloads/wallpaper3.rar" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Wallpaper3','','img/downloads/wallpaper3black.jpg',1)"><img src="img/downloads/wallpaper3.jpg" name="Wallpaper3" width="353" height="200" border="0" id="Wallpaper3" /></a>
<br /><br />
<a href="http://www.gabrielarocha.com.br/2012/downloads/wallpaper4.rar" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Wallpaper4','','img/downloads/wallpaper4black.jpg',1)"><img src="img/downloads/wallpaper4.jpg" name="Wallpaper4" width="353" height="200" border="0" id="Wallpaper4" /></a>
<br /><br />
    <a href="http://www.gabrielarocha.com.br/2012/downloads/wallpaper1.zip" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Wallpaper1','','img/downloads/wallpaper1black.jpg',1)"><img src="img/downloads/wallpaper1.jpg" name="Wallpaper1" width="353" height="199" border="0" id="Wallpaper1" /></a><br /><br />
    <a href="http://www.gabrielarocha.com.br/2012/downloads/wallpaper2.zip" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Wallpaper2','','img/downloads/wallpaper2black.jpg',1)"><img src="img/downloads/wallpaper2.jpg" name="Wallpaper2" width="353" height="200" border="0" id="Wallpaper2" /></a>
    </div>
    </div>		
</div>
<?php include('includes/rodape.php'); ?>
</body>
</html>