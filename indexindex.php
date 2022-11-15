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
	<script>
		$(document).ready(function () {
			$('#tableUser').DataTable({
				language: {
					processing: "Tratamiento en curso...",
					search: "Buscar&nbsp;:",
					lengthMenu: "Agrupar de _MENU_ ",
					info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
					infoEmpty: "No existen datos.",
					infoFiltered: "(filtrado de _MAX_ elementos en total)",
					infoPostFix: "",
					loadingRecords: "Cargando...",
					zeroRecords: "No se encontraron datos con tu busqueda",
					emptyTable: "No hay datos disponibles en la tabla.",
					paginate: {
						first: "Primero",
						previous: "Anterior",
						next: "Siguiente",
						last: "Ultimo"
					},
					aria: {
						sortAscending: ": active para ordenar la columna en orden ascendente",
						sortDescending: ": active para ordenar la columna en orden descendente"
					}
				},
				scrollY: 380,
				lengthMenu: [ [6, 25, -1], [6, 25, "All"] ],
			});
		});
	</script>
</head>

<body>
	<img src="aq_peru.png" style="width:400px;height:90px;">
	<p class="p-2 bg-dark text-white">.</p>
	
	<div class="container-fluid">
		<div class="container-fluid">
			<h2>SEGUIMIENTO DE ENVIOS <small class="text-muted"> </small></h2>
			<form  method="post">
				<a class="btn btn-success" href="nuevo.php">Nuevo Seguimiento</a>
			</form>
		</div>
		<br>
		<table id="tableUser" class="display" border="0" >
			<thead>
				<td>ID</td>
				<td>NOMBRE</td>
			    <td>DIRECCION</td>
				<td>TELEFONO</td>
				<td>ORIGEN</td>
				<td>DESTINO</td>
				<td>PAQUETE</td>
				<td>ESTADO</td>
				<td>FECHA</td>
				<td>FUNCION</td>
			</thead>
			<?php
			$cnx= mysqli_connect("localhost","root","","bd_envios");
			$sql="SELECT idcabecera,nombre,direccion,telefono,origen,destino,paquete,estado,fecha FROM cabecera order by idcabecera desc";
			$rta=mysqli_query($cnx,$sql);
			while ($mostrar=mysqli_fetch_row($rta)){
				?>
				<tr>
					<td><?php echo $mostrar['0']?></td>
								<td><?php echo $mostrar['1']?></td>
								<td><?php echo $mostrar['2']?></td>
							    <td><?php echo $mostrar['3']?></td>
								<td><?php echo $mostrar['4']?></td>
								<td><?php echo $mostrar['5']?></td>
								<td><?php echo $mostrar['6']?></td>
								<td><?php echo $mostrar['7']?></td>
								<td><?php echo $mostrar['8']?></td>
								<td><a class="btn btn-primary" href="editar.php?
									idcabecera=<?php echo $mostrar['0'] ?> &
									nombre=<?php echo $mostrar['1'] ?> &
									direccion=<?php echo $mostrar['2'] ?> &
									telefono=<?php echo $mostrar['3'] ?> &
									origen=<?php echo $mostrar['4'] ?> &
									destino=<?php echo $mostrar['5'] ?> &
									paquete=<?php echo $mostrar['6'] ?> &
									estado=<?php echo $mostrar['7'] ?> &
									fecha=<?php echo $mostrar['8'] ?> 
									">Editar</a>
									<a class="btn btn-info" href="detalle.php? idcabecera=<?php echo $mostrar['0'] ?>">Ruta</a>
									<a class="btn btn-danger" href="sp_eliminar.php? idcabecera=<?php echo $mostrar['0'] ?>">Eliminar</a>
								</td>
				</tr>
				<?php
				}
				?>
		</table>
	</div>
</body>
</html>