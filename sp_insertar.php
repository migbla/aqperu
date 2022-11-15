<?php
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$origen=$_POST['origen'];
$destino=$_POST['destino'];
$paquete=$_POST['paquete'];
$estado=$_POST['estado'];
$fecha=$_POST['fecha'];

$cnx=mysqli_connect("localhost","root","","bd_envios");
$sql="INSERT INTO cabecera(nombre,direccion,telefono,origen,destino,paquete,estado,fecha) VALUES('$nombre','$direccion','$telefono','$origen','$destino','$paquete','PENDIENTE','$fecha')";
$rta=mysqli_query($cnx,$sql);
if (!$rta){
	echo "no se inserto!";
}
else{
	header("Location:index.php");
}
?>