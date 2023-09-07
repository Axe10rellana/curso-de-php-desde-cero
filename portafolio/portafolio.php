<?php include "cabecera.php"; ?>
<?php include "conexion.php"; ?>
<?php

if($_POST){
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$fecha = new DateTime();
	$imagen = $fecha->getTimestamp()."_".$_FILES['archivo']['name'];
	$imagen_temporal = $_FILES['archivo']['tmp_name'];
	move_uploaded_file($imagen_temporal, "assets/images/".$imagen);

	$objConexion = new conexion();
	$sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion'); ";
	$objConexion->ejecutar($sql);
	header("location:portafolio.php");
}

if($_GET){
	$id = $_GET['borrar'];
	$objConexion = new conexion();

	//borra la imagen de la carpeta donde se almacenan las imagenes
	$imagen = $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
	unlink("assets/images/".$imagen[0]['imagen']);

	//borrar el registro de la base de datos
	$sql = "DELETE FROM proyectos WHERE `proyectos`.`id` =".$id;
	$objConexion->ejecutar($sql);
	header("location:portafolio.php");
}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");
?>

<div class="container">
	<div class="row">
		<div class="col-md-6 mt-4">
			<div class="card">
  			<div class="card-header">
  				Datos del proyecto
  			</div>

  			<div class="card-body">
    			<form action="portafolio.php" method="post" enctype="multipart/form-data">
	  				<input class="form-control mb-4" type="text" name="nombre" placeholder="Nombre del proyecto" autocomplete="off" required />
	  				<input class="form-control mb-4" type="file" name="archivo" required />
	  				<textarea class="form-control mb-4 no-resize" name="descripcion" placeholder="Descripción del proyecto" rows="3" required></textarea>
	  				<input class="btn btn-success" type="submit" value="Enviar proyecto" />
    			</form>
  			</div>
			</div>
		</div>

		<div class="col-md-6 mt-4">
			<table class="table">
				<thead class="small">
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Imagen</th>
						<th>Descripción</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($proyectos as $proyecto) { ?>
						<tr>
							<td><?php echo $proyecto['id']; ?></td>
							<td><?php echo $proyecto['nombre']; ?></td>
							<td><img width="100" class="pointer-events-none" src="assets/images/<?php echo $proyecto['imagen']; ?>" alt="<?php echo $proyecto['imagen']; ?>" /></td>
							<td><?php echo $proyecto['descripcion']; ?></td>
							<td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>"><svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 2)"><path d="m2.5 2.5h10v12c0 1.1045695-.8954305 2-2 2h-6c-1.1045695 0-2-.8954305-2-2zm5-2c1.0543618 0 1.91816512.81587779 1.99451426 1.85073766l.00548574.14926234h-4c0-1.1045695.8954305-2 2-2z"/><path d="m.5 2.5h14"/><path d="m5.5 5.5v8"/><path d="m9.5 5.5v8"/></g></svg></a></td>
						</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php include "pie.php"; ?>