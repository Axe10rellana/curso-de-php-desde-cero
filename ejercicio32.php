<?php

 if($_POST){
 	print_r($_FILES['archivo']['name']);

 	move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
 }

?>

<!DOCTYPE html>
<html lang="es">
  <head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Curso de PHP desde cero | Valores input file, Guardar archivos con PHP (función)" />
    <link rel="icon" href="assets/icons/favicon.png" />
    <link rel="favicon" href="assets/icons/favicon.png" />
    <link rel="apple-touch-icon" href="assets/icons/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/index.css">
    <title>Curso de PHP desde cero | Valores input file, Guardar archivos con PHP (función)</title>
  </head>
  <body>  	
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">
      <input type="file" name="archivo" id="" />
      <br /><br />
      <input type="submit" name="enviar" value="Enviar información" />
    </form>
  </body>
</html>