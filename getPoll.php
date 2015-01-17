<?php 
 include('conexion1.php');

$vote = $_REQUEST['vote'];
$id = $_REQUEST['id'];

	 	$query2="SELECT * FROM news WHERE id ='$id'";
		$result2=mysql_query($query2,$link);
		$row2=mysql_fetch_array($result2);
			$bueno	=$row2["bueno"]; 
			$regular =$row2["regular"]; 
			$malo	=$row2["malo"]; 

if ($vote == 0) {
  $bueno = $bueno + 1;
}

if ($vote == 1) {
    $regular = $regular + 1;
}

if ($vote == 2) {
    $malo = $malo + 1;
}
 
$query="UPDATE news SET bueno='$bueno', regular='$regular', malo='$malo'  WHERE id = '$id'"; 
$result=mysql_query($query, $link);

 	 
 
?>
<h2>Resultado:</h2>
<table>
  <tr>
    <td>Bueno:</td>
    <td><img src="img/estrella.jpg" width='<?php echo(100*round($bueno/($bueno+$regular+$malo),2)); ?>' height='20'> <?php echo(100*round($bueno/($bueno+$regular+$malo),2)); ?>% </td>
  </tr>
  <tr>
    <td>Regular:</td>
    <td><img src="img/estrella.jpg" width='<?php echo(100*round($regular/($bueno+$regular+$malo),2)); ?>' height='20'> <?php echo(100*round($regular/($bueno+$regular+$malo),2)); ?>% </td>
  </tr>
  <tr>
    <td>Malo:</td>
    <td><img src="img/estrella.jpg" width='<?php echo(100*round($malo/($bueno+$regular+$malo),2)); ?>' height='20'> <?php echo(100*round($malo/($bueno+$regular+$malo),2)); ?>% </td>
  </tr>
</table>
<p>Total de votos: <?php echo ($bueno+$regular+$malo); ?></p>
<p><a href="index.php">Volver</a></p>
 
