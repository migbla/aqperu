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
	$nombre=$_GET['nombre'];
	$direccion=$_GET['direccion'];
	$telefono=$_GET['telefono'];
	$origen=$_GET['origen'];
	$destino=$_GET['destino'];
	$paquete=$_GET['paquete'];
	$estado=$_GET['estado'];
	?>
	<div class="container-fluid">

		<div class="container-fluid">
			<h2>SEGUIMIENTO DE ENVIOS <small class="text-muted"> </small></h2>
		</div>
		
		<div class="container my-3">
			<h5>EDITAR SEGUIMIENTO</h5>
			<form class="row" action="sp_editar.php" method="post">
				<table class="table table-striped">

					<div class="col-md-7">
						<input type="text" class="form-control" name="idcabecera" id="" value="<?=$idcabecera?>" style="visibility:hidden">
						<label for="inputAddress" class="form-label">NOMBRE</label>
						<input type="text" class="form-control" name="nombre" id="" value="<?=$nombre?>">
					</div>
					<div class="col-md-7">
						<label for="inputAddress" class="form-label">DIRECCION</label>
						<input type="text" class="form-control" name="direccion" id="" value="<?=$direccion?>">
					</div>
					<div class="col-md-7">
						<label for="inputAddress" class="form-label">TELEFONO</label>
						<input type="text" class="form-control" name="telefono" id="" value="<?=$telefono?>">
					</div>
					<div class="col-md-7">
						<label for="inputAddress" class="form-label">ORIGEN</label>
						<input type="text" class="form-control" name="origen" id="" value="<?=$origen?>">
					</div>
					<div class="col-md-7">
						<label for="inputAddress" class="form-label">DESTINO</label>
						<input type="text" class="form-control" name="destino" id="" value="<?=$destino?>">
					</div>
					<div class="col-md-7">
						<label for="inputAddress" class="form-label">PAQUETE</label>
						<input type="text" class="form-control" name="paquete" id="" value="<?=$paquete?>">
					</div>
					<!--<div class="col-md-7">
						<label for="inputAddress" class="form-label">ESTADO</label>
						<input type="text" class="form-control" name="estado" id="" value="<?=$estado?>" style="visibility:hidden">
					</div>-->
				</table>
				<div>
					<td><input class="btn btn-primary" type="submit" value="Actualizar"></td>
					<td><a class="btn btn-secondary" href="index.php">Cancelar</a></td>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>
