<?php

 if($_POST){
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $division = $valorA / $valorB;
    $multiplicacion = $valorA * $valorB;

    echo $suma."<br />";
    echo $resta."<br />";
    echo $division."<br />";
    echo $multiplicacion."<br />";

    if($valorA === $valorB){
      echo "El valor de A es igual al valor de B. <br />";

      if($valorA == 4){
        echo "El valor de A es igual a 4. <br />";
      }

      if($valorA == 5){
        echo "El valor de A es igual a 5. <br />";
      }
    }

    if(($valorA === $valorB) && ($valorA == 4)){
      echo "El valor de A es igual al valor de B y es un numero 4. <br />";
    }
 }

?>

<!DOCTYPE html>
<html lang="es">
  <head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Curso de PHP desde cero | If anidado en PHP" />
    <link rel="icon" href="assets/icons/favicon.png" />
    <link rel="favicon" href="assets/icons/favicon.png" />
    <link rel="apple-touch-icon" href="assets/icons/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <title>Curso de PHP desde cero | If anidado en PHP</title>
  </head>
  <body>
    <form action="ejercicio11.php" method="post">
     <input type="text" name="valorA" id="" autocomplete="off" required />
     <br />
     <input type="text" name="valorB" id="" autocomplete="off" required />
     <br />
     <input type="submit" value="Calcular" />
    </form>
  </body>
</html>
