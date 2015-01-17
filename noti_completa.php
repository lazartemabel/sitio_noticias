<?php 

// Aqui mostramos el contenido de la noticia completa, seleccionada previamente de la relación que muestras en tu pala anterior.

include ('parte1.php'); 

$id = $_GET["id"];  

?>

<!--//script para abrir ventana popup, para enviar noticia por correo (COMPARTIR))--------------------------------------
-->

<script language="JavaScript">
	function Abrir_ventana(pagina,h,w) {
	var LeftPosition;
	var TopPosition;
	var settings;
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings = "height="+h+",width="+w+",top="+TopPosition+",left="+LeftPosition+",resizable=yes,scrollbars=yes";
 
	window.open(pagina,"",settings);
	}
</script>
<!--//-------------------------------------------------------------------------------------------------------------------->

 <h1 id="title" align="center">NOTICIAS</h1>
   <br />
	<hr />

        <?php
        include_once("libro/admin/inc/connect.php");
        
        //aqui mostramos UN solo registro, el que tiene el ID.
        //aqui no deberíamos usar el WHILE ya que solo estamos mostrando un ID, y no varios. pero no hay problmea, puedes cambiar el codigo si gustas.
        
        $query=mysql_query("SELECT * FROM news WHERE id = '$id' ");
        echo "<div align=\"justify\" class=\"texto\" style=\"width:700px\">";
        while($row=mysql_fetch_array($query))
            {
            $id = $row['id'];
            echo "<h1 align=\"center\" class=\"Estilo1\"><strong>".utf8_encode($row['title'])."</strong></h1>";
            echo "<img height=\"4\" width=\"700\" src=\"img/line.jpg\">";
            echo "<br/>Por: ".$row['author']."<br />";
            echo $row['content'];
            echo "<br/><br/>";
           ?> 
           
           
           <!-- Tabla donde  colocaremos los 2 link, para Valorar y otro para Compartir. -->
           
            <hr>
            <table border'0' width='100%'>
            <tr>
            	<td width='50%'> 
		            Valorar :
		            <div id="poll">
					<form>
						
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
					    Buena:
					    <input type="radio" name="vote" value="0" onclick="getVote(this.value)" />
					     | 
					    Regular:
					    <input type="radio" name="vote" value="1" onclick="getVote(this.value)" />
					     | 
					    Mala:
					    <input type="radio" name="vote" value="2" onclick="getVote(this.value)" />
					    
					</form>
					</div>
				
				</td>
            
            	<td align='right' width='50%'>  
					<a href="javascript:Abrir_ventana('noti_compartir.php?id=<? echo $id ?>','400','900')" style=text-decoration:none >Compartir con un Amigo</a>
				</td>
            </tr>
            </table>
            <hr>
		 
            <?php  
            }
         echo "</div>";
        ?>
<table>
<tr>
  <td bgcolor="#FFFFFF">&nbsp;</td>
  <td bgcolor="#FFFFFF"><div align="right"><a href="libro/admin/index.php" target="_parent"><img src="img/usuario.png" alt="usuario" width="33" height="30" border="0"></a></div></td>
</tr>
</table>
