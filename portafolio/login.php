<?php

session_start();
if($_POST){

  if(($_POST['usuario'] == "admin") && ($_POST['contrasenia'] == "12345")){
    $_SESSION['usuario'] = "admin";
    header('location:index.php');
  }else {
    echo "<script> alert('Usuario o contraseña incorrectos'); </script>";  
  }
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#b5dff0" />
    <meta name="description" content="Login" />
    <link rel="icon" href="assets/icons/favicon.png" />
    <link rel="favicon" href="assets/icons/favicon.png" />
    <link rel="apple-touch-icon" href="assets/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
	  <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <title>Login</title>
  </head>
  <body class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          
        </div>

        <div class="col-md-4">
          <div class="card mt-4">
            <div class="card-header">
              Iniciar sesión
            </div>

            <div class="card-body">
              <form action="login.php" method="post">
                <input class="form-control mb-4" type="text" name="usuario" id="" placeholder="Usuario" autocomplete="off" required />
                <input class="form-control mb-4" type="password" name="contrasenia" id="" placeholder="Contraseña" autocomplete="off" required />
                <button class="btn btn-success" type="submit">Entrar al portafolio</button>
              </form>
            </div>

          </div>

        </div>

        <div class="col-md-4">
          
        </div>
      </div>
    </div>
  </body>
</html>