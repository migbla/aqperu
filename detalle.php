<!DOCTYPE html>
<html lan="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>AQPERU Servicios de Mensajería</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<script src="js/jquery-3.6.1.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
</head>

<body>
	<img src="aq_peru.png" style="width:400px;height:90px;">
	<p class="p-2 bg-dark text-white">.</p>
	<?php	
	$idcabecera=$_GET['idcabecera'];
	?>

	<div class="container-fluid">
		<h2>SEGUIMIENTO DE ENVIOS <small class="text-muted"> </small></h2>
	</div>

	<div class="container my-3">

		<h5>RUTA DEL PAQUETE</h5>
		<form action="buscar.php" method="post">
			<a class="btn btn-primary" href="in_detalle.php? idcabecera=<?php echo $idcabecera ?>">Ingresar Ruta</a>
		</form>
	</div>
	<div class="container my-3">
		<table class="table table-striped" border="0">
			<tr> 
				<td>IDDETALLE</td>
				<td>IDCABECERA</td>
				<td>ESTADO</td>
				<td>UBICACION</td>
				<td>FECHA</td>
			</tr>
			<?php
			$idcabecera=$_GET['idcabecera'];
			$cnx= mysqli_connect("localhost","root","","bd_envios");
			$sql="SELECT iddetalle,idcabecera,estado,ubicacion,fecha FROM detalle where idcabecera=$idcabecera order by iddetalle desc";
			$rta=mysqli_query($cnx,$sql);
			while ($mostrar=mysqli_fetch_row($rta)){
				?>
				<tr>
					<td><?php echo $mostrar['0']?></td>
					<td><?php echo $mostrar['1']?></td>
					<td><?php echo $mostrar['2']?></td>
					<td><?php echo $mostrar['3']?></td>
					<td><?php echo $mostrar['4']?></td>
					<td>
						<a class="btn btn-danger" href="sp_eliminar_d.php? iddetalle=<?php echo $mostrar['0'] ?>">Eliminar</a>
					</td>
				</tr>
				<?php
			}
			?>
		</table>
		<td><a class="btn btn-secondary" href="index.php">Cancelar</a></td>
	</div>
</body>
</html>