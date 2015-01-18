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
<script type="text/javascript" src="libro/jscripts/jquery-1.4.2.min.js"></script>
<!-- Load TinyMCE -->
<script type="text/javascript" src="libro/jscripts/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript">
	$().ready(function() {
		$('textarea.tinymce').tinymce({
			// Location of TinyMCE script
			script_url : 'libro/jscripts/tiny_mce/tiny_mce.js',

			// General options
			theme : "simple"
		});
	});
</script>


<script type="text/javascript" src="highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />



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
<script type="text/javascript">
     function Validar(user1,email1,mce_0)
  {
      var valid1 = /(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/;
     var valid2 = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;
   user=document.getElementById(user1);
   email=document.getElementById(email1);
   comentario = document.getElementById(mce_0);
   cadena = comentario.value;
   //alert(comentario.value);
   if(user.value=="")
    {
     alert("El campo Nombre esta vacio.");
     user.focus();
     return false;
    }
   else
    {
        //alert(validarEmail(email.value));
     if (valid1.test(email.value) | !valid2.test(email.value))
      {
       alert("El email no es valido.");       
       email.focus();
       return false;
      }
     else if (email.value=="")
         {
        alert("El email no es valido.");
        email.focus;
        return false;
         }
     else if (comentario.value=="")
         {
             alert("rellene el campo de texto denuncia.");
              return false;
         }
     else if (cadena.length <= 10)
         {
             alert("El comentario es muy corto.");
              return false;
         }
     else
      {
       return true;
      }
    }
  }

</script>
</head>
<body>
<div align="center">
<table width="766" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
<tr>
<td colspan="2">
<div id="flashcontent_cabecera">
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
<div align="justify" style="background-color:#FFFFFF; padding-left:50px;" >
<blockquote>

<?php include ('libro/index.php'); ?>

</blockquote>
</div>
