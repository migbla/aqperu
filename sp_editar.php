<?php
$idcabecera=$_POST['idcabecera'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$origen=$_POST['origen'];
$destino=$_POST['destino'];
$paquete=$_POST['paquete'];
$estado=$_POST['estado'];

$cnx=mysqli_connect("localhost","root","","bd_envios");
$sql="UPDATE cabecera set nombre='$nombre', direccion='$direccion', telefono='$telefono', origen='$origen', destino='$destino', paquete='$paquete' where idcabecera like $idcabecera"; 

$rta=mysqli_query($cnx,$sql);
if (!$rta){
	echo "no se actualizo!";
}
else{
	header("Location:index.php");
}
?>