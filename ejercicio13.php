<?php

 if($_POST){
 	$Boton = $_POST['btnValor'];

 	switch ($Boton) {
 		case 1:
 			echo "Presionó el boton 1";
 			break;

 		case 2:
 			echo "Presionó el boton 2";
 			break;

 		case 3:
 			echo "Presionó el boton 3";
 			break;
 	}
 	
 }

?>

<!DOCTYPE html>
<html lang="es">
  <head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Curso de PHP desde cero | Cómo usar Switch en PHP" />
    <link rel="icon" href="assets/icons/favicon.png" />
    <link rel="favicon" href="assets/icons/favicon.png" />
    <link rel="apple-touch-icon" href="assets/icons/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/index.css">
    <title>Curso de PHP desde cero | Cómo usar Switch en PHP</title>
  </head>
  <body>
    <form action="ejercicio13.php" method="post">
     <input type="submit" name="btnValor" value="1" />
     <br />
     <input type="submit" name="btnValor" value="2" />
     <br />
     <input type="submit" name="btnValor" value="3" />
    </form>
  </body>
</html>