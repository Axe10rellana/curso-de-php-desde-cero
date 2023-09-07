<?php

 $servidor = "localhost";
 $usuario = "root";
 $contrasenia = "";

 try{

  $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM `fotos`";
  $sentencia = $conexion->prepare($sql);
  $sentencia->execute();
  $resultado = $sentencia->fetchAll();

  foreach($resultado as $foto){
    echo $foto['nombre']."<br />";
  }

 }catch(PDOException $error){
 	echo "Conexión erronea".$error;
 }

?>