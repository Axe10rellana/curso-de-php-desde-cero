<?php

 session_start();

 $_SESSION['usuario'] = "Develoteca";
 $_SESSION['estatus'] = "logueado";

 echo "Sesión iniciada <br />";
 echo "Usuario: ".$_SESSION['usuario']." estatus: ".$_SESSION['estatus']."<br />";

?>