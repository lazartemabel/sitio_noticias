?php

$id = $_GET["id"];   
  
include_once("libro/admin/inc/connect.php");
$query=mysql_query("SELECT * FROM news WHERE id = '$id' ");
$row=mysql_fetch_array($query);
     
$id = $row['id'];
$titulo = utf8_encode($row['title']) ;
 
?> 

<script>
function valida_envia(){ 
	if (document.form1.xcorreo.value.length==0){
		alert("Tiene que considerar correo.")
		document.form1.xcorreo.focus()
		return 0;
	}
	  
	document.form1.submit();	
}
</script>

<!-- FORMULARIO PARA ENVIAR LA NOTICIA A UN AMIGO -->

<body>
<fieldset>
<legend>COMPARTIR </legend>
	<form name="form1" method='POST' action='mail02.php' enctype='multipart/form-data'>
	 	 
		Correo de tu amigo : <input type="text" name="xcorreo" size="60" maxlength="150"  >
		 
    	<hr size='1'>
    	<input name="enviar" type="button" value="Compartir" onClick="valida_envia()"  ></p>
	</form>
</fieldset>
</body> 
