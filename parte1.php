<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOTICIAS | TACNA</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<!--<link href="css/reset.css" media="all" rel="Stylesheet" type="text/css" />
<link href="css/gallery.css" media="all" rel="Stylesheet" type="text/css" />
<link href="css/small.css" media="all" rel="Stylesheet" type="text/css" />
<link href="css/slideflow.css" media="all" rel="Stylesheet" type="text/css" />-->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<!--<script type="text/javascript" src="js/scriptaculous/lib/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous/src/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="js/slideflow/slideflow.js"></script>
<script type="text/javascript" src="js/slideflow/slider.js"></script>
<script type="text/javascript" src="js/slideflow/scrolling.js"></script>
<script type="text/javascript" src="js/xmlparser/xmlparser.js"></script>
<script type="text/javascript" src="js/fotos.js"></script>-->
<script src="Scripts/swfobject.js" type="text/javascript" language="javascript"></script>
<!--
	1 ) Reference to the files containing the JavaScript and CSS.
	These files must be located on your server.
-->

<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<!--
	2) Optionally override the settings defined at the top
	of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
hs.graphicsDir = 'highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: .75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>
<!-- inicio codigo AJAX-->
<script type="text/javascript">
function getVote(value) {
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }
    else {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState==4 && xmlhttp.status==200) {
        document.getElementById("poll").innerHTML=xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","getpoll.php?vote="+value,true);
    xmlhttp.send();
}
</script>
<!-- fin codigo AJAX-->


</head>
<body>
<div align="center">
<table width="766" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr>
<td colspan="2">
<div id="flashcontent_cabecera" align="center">
       <center>
        <a target="_blank" href="http://www.macromedia.com/go/getflash/"></a>
      </center>
    </div>   
       <script type="text/javascript">   
      var so = new SWFObject("flash/cabecera.swf", "cabecera", "766", "370", "8.0.0.0", "#ffffff"); 
      so.addParam("quality", "high"); 
      so.addParam("scale", "scale"); 
      so.addParam("cabecera", "false"); 
      so.addParam("salign", "lt"); 
      so.addParam("wmode", "transparent");
      so.addParam("flashvars", "configfile=3dcarousel.xml");
      so.write("flashcontent_cabecera");	  
    <!-- END embed 3D Carousel --> 
        </script>
</td>
</tr>
<tr>
  <td width="266">&nbsp;</td>
  <td width="500">&nbsp;</td>
</tr>
<tr>
  <td colspan="2">
