<?php
$iddetalle=$_GET['iddetalle'];

$cnx=mysqli_connect("localhost","root","","bd_envios");
$sql="DELETE FROM detalle where iddetalle like $iddetalle";
$rta=mysqli_query($cnx,$sql);
if (!$rta){
	echo "no se elimino!";
}
else{
	header("Location:index.php");
}
?>