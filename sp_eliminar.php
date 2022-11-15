<?php
$idcabecera=$_GET['idcabecera'];

$cnx=mysqli_connect("localhost","root","","bd_envios");
$sql="SELECT *FROM detalle where idcabecera = $idcabecera";
$rta=mysqli_query($cnx,$sql);

if (mysqli_num_rows($rta) > 0) {
	echo '<script language="javascript">alert("No se puede eliminar, hay RUTA...");window.location.href="index.php"</script>';
}else{
	$cnx=mysqli_connect("localhost","root","","bd_envios");
	$sql="DELETE FROM cabecera where idcabecera like $idcabecera";	
	$rta=mysqli_query($cnx,$sql);
	if (!$rta){
		echo "no se elimino!";
	}
	else{
		header("Location:index.php");
	}
}
?>





