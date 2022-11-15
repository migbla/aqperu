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

	<div class="container-fluid">

		<div class="container-fluid">
			<h2>SEGUIMIENTO DE ENVIOS <small class="text-muted"> </small></h2>
		</div>

		<div class="container my-3">

			<h5>NUEVO SEGUIMIENTO</h5>
 			<br>

			<form class="row" action="sp_insertar.php" method="post" autocomplete="off">
				<table class="table table-striped">

					<div class="col-md-6">
						<label for="inputAddress" class="form-label">NOMBRE</label>
						<input minlength="5" maxlength="45" type="text" class="form-control" name="nombre" id="" required="" pattern="[a-zA-Z ]+">
					</div>
					<div class="col-md-6">
						<label for="inputAddress" class="form-label"></label>
					</div>

					<div class="col-md-6">
						<label for="inputAddress" class="form-label">DIRECCION</label>
						<input type="text" class="form-control" name="direccion" id="" >
					</div>
					<div class="col-md-6">
						<label for="inputAddress" class="form-label"></label>
					</div>

					<div class="col-md-6">
						<label for="inputAddress" class="form-label">TELEFONO</label>
						<input type="text" class="form-control" name="telefono" id="" >
					</div>
					<div class="col-md-6">
						<label for="inputAddress" class="form-label"></label>
					</div>

					<div class="col-md-6">
						<label for="inputAddress" class="form-label">ORIGEN</label>
						<input type="text" class="form-control" name="origen" id="" required="">
					</div>
					<div class="col-md-6">
						<label for="inputAddress" class="form-label"></label>
					</div>

					<div class="col-md-6">
						<label for="inputAddress" class="form-label">DESTINO</label>
						<input type="text" class="form-control" name="destino" id="" required="">
					</div>
					<div class="col-md-6">
						<label for="inputAddress" class="form-label"></label>
					</div>

					<div class="col-md-6">
						<label for="inputAddress" class="form-label">PAQUETE</label>
						<input type="text" class="form-control" name="paquete" id="" required="">
					</div>
					<div class="col-md-6">
						<label for="inputAddress" class="form-label"></label>
					</div>

					<!--<div class="col-md-6">
						<label for="inputAddress" class="form-label">ESTADO</label>
						<input type="text" class="form-control" name="estado" id="" style="visibility:hidden">
					</div>
					<div class="col-md-6">
						<label for="inputAddress" class="form-label"></label>
					</div>-->

					<div class="col-md-6">
						<label for="inputAddress" class="form-label">FECHA</label>
						<input type="date" value="<?php echo date("Y-n-j"); ?>" class="form-control" name="fecha" id="" >
					</div>
					<div class="col-md-6">
						<label for="inputAddress" class="form-label"></label>
					</div>

				</table>

				<div>
					<td><input class="btn btn-primary" type="submit" value="Guardar"></td>
					<td><a class="btn btn-secondary" href="index.php">Cancelar</a></td>
				</div>

			</form>	
		</div>

	</div>
</body>
</html>
