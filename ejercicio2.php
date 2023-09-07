<?php

 if($_POST){
  $nombre = $_POST['txtNombre'];
  echo "Hola ".$nombre;
 }
 
?>

<!DOCTYPE html>
<html lang="es">
  <head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Curso de PHP desde cero | Metodo POST" />
    <link rel="icon" href="assets/icons/favicon.png" />
    <link rel="favicon" href="assets/icons/favicon.png" />
    <link rel="apple-touch-icon" href="assets/icons/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/index.css">
    <title>Curso de PHP desde cero | Metodo POST</title>
  </head>
  <body>
    <form action="ejercicio2.php" method="post">
     <input type="text" name="txtNombre" id="" autocomplete="off" required />
     <br />
     <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
