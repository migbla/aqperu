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

	<?php	
	$idcabecera=$_GET['idcabecera'];
	?>
	<img src="aq_peru.png" style="width:400px;height:90px;">
	<p class="p-2 bg-dark text-white">.</p>
	<div class="container-fluid">
		<h2>SEGUIMIENTO DE ENVIOS <small class="text-muted"> </small></h2>
		<div class="container my-3">
			<h5>NUEVA RUTA</h5>
			<form action="sp_detalle.php" method="post">
				<table class="table table-striped">

					<div class="col-md-6">
						<input type="text" class="form-control" name="idcabecera" id="" value="<?=$idcabecera?>" style="visibility:hidden">
						<h6>ESTADO</h6>
						<select class="form-control" name="estado" id="">
							<option selected>REGISTRADO</option>
							<option >EN ALMACEN</option>
							<option >EN CAMINO</option>
							<option >ENTREGADO</option>
						</select>
					</div>

					<div class="col-md-6">
						
						<label for="inputAddress" class="form-label">UBICACION</label>
						<input type="text" class="form-control" name="ubicacion" id="" >
					</div>

					<div class="col-md-6">
						<label for="inputAddress" class="form-label">FECHA</label>
						<input type="date" class="form-control" name="fecha" id="" >
					</div>

					<div class="col-md-6">
						<label for="inputAddress" class="form-label"></label>
					</div>
				</table>
				<div>
					<td><input class="btn btn-primary" type="submit" value="Guardar"></td>
					<td><a class="btn btn-secondary" href="detalle.php? idcabecera=<?php echo $idcabecera?>">Cancelar</a></td>
				</div>
			</form>	
		</div>
	</div>
</body>
</html>
