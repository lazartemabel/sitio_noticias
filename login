<?php include ('parte1.php'); ?>
 <h1 id="title" align="center">NOTICIAS</h1>
   <br />
	<hr />

        <?php
        include_once("libro/admin/inc/connect.php");
        $query=mysql_query("SELECT * FROM news order by id Desc Limit 0,5");
        echo "<div align=\"justify\" class=\"texto\" style=\"width:700px\">";
        while($row=mysql_fetch_array($query))
            {
            echo "<h1 align=\"center\" class=\"Estilo1\"><strong>".utf8_encode($row['title'])."</strong></h1>";
            echo "<img height=\"4\" width=\"700\" src=\"img/line.jpg\">";
            echo "<br/>Por: ".$row['author']."<br />";
            echo $row['content'];
            echo "<br/><br/>";
            }
         echo "</div>";
        ?>
<table>
<tr>
  <td bgcolor="#FFFFFF">&nbsp;</td>
  <td bgcolor="#FFFFFF"><div align="right"><a href="libro/admin/index.php" target="_parent"><img src="img/usuario.png" alt="usuario" width="33" height="30" border="0"></a></div></td>
</tr>
</table>
