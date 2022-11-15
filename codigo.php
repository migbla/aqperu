<?php
$idcabecera=$_GET['idcabecera'];

$cnx=mysqli_connect("localhost","root","","bd_envios");
$sql="DELETE FROM cabecera where idcabecera like $idcabecera";
$rta=mysqli_query($cnx,$sql);
if (!$rta){
	echo "no se elimino!";
}
else{
	header("Location:index.php");
}
?>