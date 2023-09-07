<?php include "cabecera.php"; ?>
<?php include "conexion.php"; ?>
<?php

  $objConexion = new conexion();
  $proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");

?>

<div class="p-5 mb-4">
  <div class="container">
  	 <h1 class="display-3">Bienvenido</h1>
  	 <p class="lead">Este es un portafolio privado</p>
  	 <hr class="my-2" />
  	 <p class="">Más información</p>
  </div>
</div>

<div class="container">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($proyectos as $proyecto) {?>
      <div class="col">
        <div class="card">
          <img src="assets/images/<?php echo $proyecto['imagen']; ?>" class="card-img-top pointer-events-none" alt="<?php echo $proyecto['imagen']; ?>">
          <div class="card-body text-center">
            <h5 class="card-title text-primary"><?php echo $proyecto['nombre']; ?></h5>
            <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
          </div>
        </div>
      </div>
    <?php }?>
  </div>
</div>


<?php include "pie.php"; ?>