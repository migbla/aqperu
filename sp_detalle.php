<?php
$idcabecera=$_POST['idcabecera'];
$estado=$_POST['estado'];
$ubicacion=$_POST['ubicacion'];
$fecha=$_POST['fecha'];

$cnx=mysqli_connect("localhost","root","","bd_envios");
$sql="INSERT INTO detalle(idcabecera,estado,ubicacion,fecha) VALUES('$idcabecera','$estado','$ubicacion','$fecha')";
$rta=mysqli_query($cnx,$sql);
if (!$rta){
	echo "no se inserto!";
}
else{
	header("Location: detalle.php? idcabecera=$idcabecera");
}
?>


