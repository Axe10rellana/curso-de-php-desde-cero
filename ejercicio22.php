<?php

 $frutas = array("f" => "fresa", "m" => "manzana", "p" => "pera");
 print_r($frutas);
 echo $frutas["m"]."<br />";

 foreach ($frutas as $indice => $valor) {
 	echo "El valor ".$valor." tiene el indice: ".$indice."<br />";
 }

?>