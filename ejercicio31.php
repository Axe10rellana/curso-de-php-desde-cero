<?php

 $txtNombre = "";
 $rdgLenguaje = "";
 $chkhtml = "";
 $chkcss = "";
 $chkjs = "";
 $chkphp = "";
 $lsMovie = "";
 $txtComentario = "";

 if($_POST){
 	$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
 	$rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
  $chkhtml = (isset($_POST['chkhtml']) == 'si') ? "checked" : "";
  $chkcss = (isset($_POST['chkcss']) == 'si') ? "checked" : "";
  $chkjs = (isset($_POST['chkjs']) == 'si') ? "checked" : "";
  $chkphp = (isset($_POST['chkphp']) == 'si') ? "checked" : "";
  $lsMovie = (isset($_POST['lsMovie'])) ? $_POST['lsMovie'] : "";
  $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";
 }

?>

<!DOCTYPE html>
<html lang="es">
  <head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Curso de PHP desde cero | Valores del input text, radio, checkbox, select option y textarea" />
    <link rel="icon" href="assets/icons/favicon.png" />
    <link rel="favicon" href="assets/icons/favicon.png" />
    <link rel="apple-touch-icon" href="assets/icons/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/index.css">
    <title>Curso de PHP desde cero | Valores del input text, radio, checkbox, select option y textarea</title>
  </head>
  <body>

  	<?php if($_POST){ ?>
     <?php if($txtNombre !== ""){ ?>
  	  <p>Usuario: <strong><?php echo $txtNombre; ?></strong></p>
     <?php }?>

     <?php if($rdgLenguaje !== ""){ ?>
      <p>Lenguaje seleccionado: <strong><?php echo $rdgLenguaje; ?></strong></p>
     <?php }?>

     <?php if($chkhtml !== "" || $chkcss !== "" || $chkjs !== "" || $chkphp !== ""){ ?>
    	<p>Estas aprendiendo: 
        <strong>
          <?php echo ($chkhtml == 'checked') ? "html," : "" ?>
          <?php echo ($chkcss == 'checked') ? "css," : "" ?>
          <?php echo ($chkjs == 'checked') ? "js," : "" ?>
          <?php echo ($chkphp == 'checked') ? "php" : "" ?>
        </strong>
      </p>
    <?php }?>

    <?php if($lsMovie !== ""){ ?>
     <p>Pelicula seleccionada: <strong><?php echo $lsMovie; ?></strong></p>
    <?php }?>

    <?php if($txtComentario !== ""){ ?>
     <p>Tu mensaje es: <strong><?php echo $txtComentario; ?></strong></p>
    <?php }?>

  	<?php }else{ ?>
  	 <p>Ingresa tu nombre</p>
  	<?php } ?>
  	
    <form action="ejercicio31.php" method="post">
     <input type="text" name="txtNombre" value="<?php echo $txtNombre; ?>" id="" autocomplete="off" required /><br />

     <h2>Elegi un lenguaje:</h2>
     <p><strong>html:</strong> <input type="radio" name="lenguaje" value="html" <?php echo $rdgLenguaje === "html" ? "checked" : ""; ?> id="" /></p>
     <p><strong>css:</strong> <input type="radio" name="lenguaje" value="css" <?php echo $rdgLenguaje === "css" ? "checked" : ""; ?> id="" /></p>
     <p><strong>js:</strong> <input type="radio" name="lenguaje" value="js" <?php echo $rdgLenguaje === "js" ? "checked" : ""; ?> id="" /></p>
     <p><strong>php:</strong> <input type="radio" name="lenguaje" value="php" <?php echo $rdgLenguaje === "php" ? "checked" : ""; ?> id="" /></p>

     <h2>Estás aprendiendo...</h2>
     <p><strong>html:</strong> <input type="checkbox" name="chkhtml" value="si" id="" <?php echo $chkhtml; ?> /></p>
     <p><strong>css:</strong> <input type="checkbox" name="chkcss" value="si" id="" <?php echo $chkcss; ?> /></p>
     <p><strong>js:</strong> <input type="checkbox" name="chkjs" value="si" id="" <?php echo $chkjs; ?> /></p>
     <p><strong>php:</strong> <input type="checkbox" name="chkphp" value="si" id="" <?php echo $chkphp; ?> /></p>

     <h2>¿Que pelicula te gusta?</h2>
     <select name="lsMovie" id="">
       <option value="">|Ninguna pelicula|</option>
       <option value="Fast and furious 3" <?php echo ($lsMovie=="Fast and furious 3") ? "selected" : ""; ?>>Fast and furious 3</option>
       <option value="Rush hour 2" <?php echo ($lsMovie=="Rush hour 2") ? "selected" : ""; ?>>Rush hour 2</option>
       <option value="Matrix" <?php echo ($lsMovie=="Matrix") ? "selected" : ""; ?>>Matrix</option>
     </select>

     <h2>¿Tienes alguna duda?</h2>
     <textarea name="txtComentario" id="" cols="37" rows="10"><?php echo $txtComentario; ?></textarea><br /><br />

     <input type="submit" value="Enviar información" />
    </form>
  </body>
</html>