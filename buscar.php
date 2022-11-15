<!DOCTYPE html>
<html lan="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div>
		<form action="buscar.php" method="post">
			<input type="text" name="buscar" id="">
			<input type="submit" value="Buscar">
			<a href="nuevo.php">Nuevo</a>
		</form>
	</div>
	<div>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>NOMBRE</td>
				<td>DIRECCION</td>
				<td>TELEFONO</td>
				<td>ORIGEN</td>
				<td>DESTINO</td>
				<td>PAQUETE</td>
				<td>ESTADO</td>
			</tr>
			<?php
				$buscar=$_POST['buscar'];
				$cnx= mysqli_connect("localhost","root","","bd_envios");
				$sql="SELECT idcabecera,nombre,direccion,telefono,origen,destino,paquete,estado FROM cabecera where nombre like '$buscar' '%' order by idcabecera desc";
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
					<td>
						<a href="editar.php?
						idcabecera=<?php echo $mostrar['0'] ?> &
						nombre=<?php echo $mostrar['1'] ?> &
						direccion=<?php echo $mostrar['2'] ?> &
						telefono=<?php echo $mostrar['3'] ?> &
						origen=<?php echo $mostrar['4'] ?> &
						destino=<?php echo $mostrar['5'] ?> &
						paquete=<?php echo $mostrar['6'] ?> &
						estado=<?php echo $mostrar['7'] ?> 
						">Editar</a>
						<a href="sp_eliminar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>
					</td>
				</tr>
				<?php
				}
				?>
		</table>
	</div>
</body>
</html>