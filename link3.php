<?php include ('parte1.php'); ?>

<h1 id="title" align="center">NUESTR@S SOCI@S</h1>
<hr />
<br />
<div align="justify" class="texto1">

<blockquote>
   
    <?php
    include_once("libro/admin/inc/connect.php");
    $content="";
$query_photos=mysql_query("SELECT * FROM partners order by id Asc");
$i=0;
$content="<div><center><table><tbody>";
$conten2="";
while($photos=mysql_fetch_array($query_photos))
        {
        if($i==0){$content.="<tr>";$content2="";}
        $content.="<td width=\"170\" height=\"180\" align=\"center\"><img src=\"img/socios/".$photos['picture']."\" width=\"136\" height=\"176\" alt=\"socios\" title=\"socios\" /></td>";
        $content2.="<td><center>".utf8_encode($photos['job'])."<br/><b>".utf8_encode($photos['lastname']).", ".utf8_encode($photos['name'])."</b><br/><i>".utf8_encode($photos['office'])."</i></center></td>";
        $i++;
        if($i==4)
            {
            $content.="</tr>";
            $content.="<tr>".$content2."</tr>";
            $i=0;
            }
        }
        if($i>0){$content.="<tr>".$content2."</tr>";}
        //$content.="<tr>".$content2."</tr>";
        $content.="</tr></tbody></table></center></div>";

 print $content;
 ?>
  </blockquote> 
</div>
