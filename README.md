# Curso de PHP desde cero

## Repositorio del curso de PHP desde cero.

### Formas de imprimir por pantalla

```php
echo "Hola mundo";

print_r("Hola mundo");

print("Hola mundo");
```

### Comentarios

```php
//Comentario de una sola línea

/* Comentario multilínea */
```

### Metodo POST

```php
if($_POST){
  $nombre = $_POST['txtNombre'];
  echo "Hola ".$nombre;
}
```

### Metodo GET

```php
if($_GET){
  $nombre = $_GET['nombre'];
  echo "Hola ".$nombre;
}
```

### String y concatenación

```php
if($_POST){
   $txtNombre = $_POST['txtNombre'];
   $txtApellido = $_POST['txtApellido'];
   echo "Hola ".$txtNombre." ".$txtApellido;
}
```

### Tipos de dato PHP

```php
$Edad = 26; //número entero

$Nombre = "Oscar"; //String

$Altura = 1.4; //número flotante

$Programador = null; //null
```

### Constantes en PHP

```php
 //variable: Puede cambiar su valor
 $edad = 32;
 echo $edad."<br />";

 $edad = 40;
 echo $edad."<br />";

 //constante: No puede cambiar su valor
 define("NOMBRE", "Oscar");
 echo NOMBRE;
```

### Operadores aritméticos PHP

```php
$suma = $valorA + $valorB;
$resta = $valorA - $valorB;
$division = $valorA / $valorB;
$multiplicacion = $valorA * $valorB;
```

### Operadores relacionales PHP

```php
if($valorA > $valorB){
    echo "El valor de A es mayor que el valor de B. <br />";
}else if($valorA < $valorB){
    echo "El valor de A es menor que el valor de B. <br />";
}else{
    echo "El valor de A es igual al valor de B. <br />";
}

if($valorA !== $valorB){
    echo "El valor de A es diferente al valor de B. <br />";
}
```

### Operadores lógicos PHP

```php
//operador AND -> &&
if($valorA !== $valorB && $valorA > $valorB){
    echo "El valor de A es diferente al valor de B y tambien es mayor. <br />";
}

//operador OR -> ||
if($valorA !== $valorB || $valorA > $valorB){
    echo "El valor de A es diferente al valor de B y tambien es mayor. <br />";
}
```

### If anidado en PHP

```php
if($valorA === $valorB){
  echo "El valor de A es igual al valor de B. <br />";

  if($valorA == 4){
    echo "El valor de A es igual a 4. <br />";
  }

  if($valorA == 5){
    echo "El valor de A es igual a 5. <br />";
  }
}
```

### If else en PHP

```php
if($valorA !== $valorB){
  echo "El valor de A es diferente al valor de B. <br />";
}else{
  echo "El valor de A es igual al valor de B. <br />";
}
```

### Cómo usar Switch en PHP

```php
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
```

### Ciclo For en PHP

```php
for($numeroInicial=0; $numeroInicial < 10; $numeroInicial++){
  echo "Numero: ".$numeroInicial."<br />";
}
```

### Ciclo Do-While en PHP

```php
$numeroInicial = 0;

do{
  echo "Numero ".$numeroInicial."<br />";
  $numeroInicial++;
}while($numeroInicial < 10);
```

### Ciclo While en PHP

```php
$numeroInicial = 0;

while($numeroInicial < 10){
  echo "Numero ".$numeroInicial."<br />";
  $numeroInicial++;
}
```

### Funciones en PHP

```php
function imprimirNombre($nombre, $apellido=""){
  echo "Hola ".$nombre." ".$apellido."<br />";
}

//Llamar a la función
imprimirNombre("Oscar", "Uh");
imprimirNombre("Pedro", "Perez");
imprimirNombre("María", "Martinez");
```

### Funciones Matemáticas

```php
$numeroAleatorio = rand(1, 10); //Función que genera números aleatorios
echo $numeroAleatorio;
```

### Funciones para String en PHP

```php
$nombre = "Oscar Uh";
$nombreEnMayusculas = strtoupper($nombre); //Función para convertir un texto en mayúsculas
echo $nombreEnMayusculas;
```

### Funciones de Fechas en PHP

```php
$hoy = date(" Y / m / d "); //Función para obtener una fecha en el formato de año / mes / día
echo $hoy;
```

### Arreglos de Indice Numérico

```php
$frutas = array("fresa", "pera", "manzana");
print_r($frutas);
```

### Arreglos asociativos en PHP

```php
$frutas = array("f" => "fresa", "m" => "manzana", "p" => "pera");
print_r($frutas);
```

### Leer arreglos en PHP

```php
//Recorrer un arreglo utilizando el ciclo for
for($indice = 0; $indice < 3; $indice++){
  echo $frutas[$indice]."<br />";
}

//Recorrer un arreglo utilizando el ciclo foreach
foreach ($frutas as $indice => $valor) {
  echo "El valor ".$valor." tiene el indice: ".$indice."<br />";
}
```

### Funciones para arreglos en PHP

```php
$frutas = array("fresa", "pera", "manzana");
array_push($frutas, "uva"); //agregar elementos en un arreglo
print_r($frutas);
```

### Clases en PHP

```php
class persona{
  //propiedades
  public $nombre;

  //acciones o metodos
  public function asignarNombre($nuevoNombre){
    $this->nombre = $nuevoNombre;
  }

  public function imprimirNombre(){
    echo "Hola soy ".$this->nombre."<br />";
  }
}

//instancia o creación de un objeto
$objAlumno = new persona();
$objAlumno2 = new persona();

//se llama a un metodo
$objAlumno->asignarNombre("Oscar");
$objAlumno2->asignarNombre("Pedro");

$objAlumno->imprimirNombre();
$objAlumno2->imprimirNombre();

//se imprimen las propiedades
echo $objAlumno2->nombre."<br />";
```

### Visibilidad de Datos

```php
class persona{
  //propiedades
  public $nombre;
  private $edad;
  protected $altura;

  //acciones o metodos
  //code ...

  public function mostrarEdad(){
    $this->edad = 20;
    return $this->edad."<br />";
  }

  public function mostrarAltura(){
    $this->altura = 1.68;
    return $this->altura."<br />";
  }
}

//instancia o creación de un objeto
//code ...

//se llama a un metodo
//code ...

//se imprimen las propiedades
echo $objAlumno2->nombre."<br />";
echo $objAlumno2->mostrarEdad(); //private
echo $objAlumno2->mostrarAltura(); //protected
```

### Herencia en PHP

```php
class persona{
  public $nombre;
  private $edad;
  protected $altura;

  public function asignarNombre($nuevoNombre){
    $this->nombre = $nuevoNombre;
  }

  //code ...
}

class trabajador extends persona{
  public $puesto;

  public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
  }
}

$objTrabajador = new trabajador();
 
$objTrabajador->asignarNombre("Oscar Uh");
$objTrabajador->puesto = "Profesor";
$objTrabajador->presentarseComoTrabajador();
```

### Constructor en PHP

```php
class persona{
  public $nombre;
  private $edad;
  protected $altura;

  function __construct($nuevoNombre){
    $this->nombre = $nuevoNombre;
  }

  public function imprimirNombre(){
    echo "Hola soy ".$this->nombre."<br />";
  }

  //code ...
}

$objAlumno = new persona("Oscar Uh");
$objAlumno->imprimirNombre();
```

### Métodos Estáticos en PHP

```php
class UnaClase{
  public static function unMetodo(){
    echo "Hola soy un metodo estatico <br />";
  }
}

$obj = new UnaClase();
$obj->unMetodo();

//si un metodo es estatico se puede llamar por referencia
unaClase::unMetodo();
```

### Conexión PHP con MySQL

```php
$servidor = "localhost";
$usuario = "root";
$contrasenia = "";

try{

  $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexión establecida";

}catch(PDOException $error){
  echo "Conexión erronea".$error;
}
```

### Insertar datos en MySQL con PHP

```php
//code ...

$sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";
$conexion->exec($sql);

//code ...
```

### Leer datos de MySQL con PHP

```php
$sql = "SELECT * FROM `fotos`";
$sentencia = $conexion->prepare($sql);
$sentencia->execute();
$resultado = $sentencia->fetchAll();

foreach($resultado as $foto){
  echo $foto['nombre']."<br />";
}
```

### Variables de session PHP

```php
session_start();

$_SESSION['usuario'] = "Develoteca";
$_SESSION['estatus'] = "logueado";

echo "Sesión iniciada <br />";
echo "Usuario: ".$_SESSION['usuario']." estatus: ".$_SESSION['estatus']."<br />";
```

### Variable session durante la navegación

```php
//en otro archivo
session_start();

echo "Usuario: ".$_SESSION['usuario']." estatus: ".$_SESSION['estatus']."<br />";
```

### Destruir variable de session PHP

```php
session_start();
session_destroy();
echo "Se destruyó la sesión de usuario";
```

### Valores del input text

```php
$txtNombre = "";
if($_POST){
  $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
}
```

```
<?php if($_POST){ ?>
  <?php if($txtNombre !== ""){ ?>
    <p>Usuario: <strong><?php echo $txtNombre; ?></strong></p>
  <?php }?>
<?php }?>

<form action="ejercicio31.php" method="post">
  <input type="text" name="txtNombre" value="<?php echo $txtNombre; ?>" id="" autocomplete="off" required />
  <br />
  <input type="submit" value="Enviar información" />
</form>
```

### Valores del input radio

```php
$txtNombre = "";
$rdgLenguaje = "";

if($_POST){
  $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
  $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
}
```

```
<?php if($_POST){ ?>
  <?php if($txtNombre !== ""){ ?>
    <p>Usuario: <strong><?php echo $txtNombre; ?></strong></p>
  <?php }?>

  <?php if($rdgLenguaje !== ""){ ?>
    <p>Lenguaje seleccionado: <strong><?php echo $rdgLenguaje; ?></strong></p>
  <?php }?>
<?php }else{ ?>
  <p>Ingresa tu nombre</p>
<?php } ?>

// code ...
    
<h2>Elegi un lenguaje:</h2>
<p><strong>html:</strong> <input type="radio" name="lenguaje" value="html" <?php echo $rdgLenguaje === "html" ? "checked" : ""; ?> id="" /></p>
<p><strong>css:</strong> <input type="radio" name="lenguaje" value="css" <?php echo $rdgLenguaje === "css" ? "checked" : ""; ?> id="" /></p>
<p><strong>js:</strong> <input type="radio" name="lenguaje" value="js" <?php echo $rdgLenguaje === "js" ? "checked" : ""; ?> id="" /></p>
<p><strong>php:</strong> <input type="radio" name="lenguaje" value="php" <?php echo $rdgLenguaje === "php" ? "checked" : ""; ?> id="" /></p>

//code ...
```

### Valores del input checkbox

```php
$txtNombre = "";
$rdgLenguaje = "";
$chkhtml = "";
$chkcss = "";
$chkjs = "";
$chkphp = "";

if($_POST){
  $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
  $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
  $chkhtml = (isset($_POST['chkhtml']) == 'si') ? "checked" : "";
  $chkcss = (isset($_POST['chkcss']) == 'si') ? "checked" : "";
  $chkjs = (isset($_POST['chkjs']) == 'si') ? "checked" : "";
  $chkphp = (isset($_POST['chkphp']) == 'si') ? "checked" : "";
}
```

```
//code ...

<h2>Estás aprendiendo...</h2>
<p><strong>html:</strong> <input type="checkbox" name="chkhtml" value="si" id="" <?php echo $chkhtml; ?> /></p>
<p><strong>css:</strong> <input type="checkbox" name="chkcss" value="si" id="" <?php echo $chkcss; ?> /></p>
<p><strong>js:</strong> <input type="checkbox" name="chkjs" value="si" id="" <?php echo $chkjs; ?> /></p>
<p><strong>php:</strong> <input type="checkbox" name="chkphp" value="si" id="" <?php echo $chkphp; ?> /></p>

//code ...
```

###  Valores Select Option

```php
$txtNombre = "";
$rdgLenguaje = "";
$chkhtml = "";
$chkcss = "";
$chkjs = "";
$chkphp = "";
$lsMovie = "";

if($_POST){
  $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
  $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
  $chkhtml = (isset($_POST['chkhtml']) == 'si') ? "checked" : "";
  $chkcss = (isset($_POST['chkcss']) == 'si') ? "checked" : "";
  $chkjs = (isset($_POST['chkjs']) == 'si') ? "checked" : "";
  $chkphp = (isset($_POST['chkphp']) == 'si') ? "checked" : "";
  $lsMovie = (isset($_POST['lsMovie'])) ? $_POST['lsMovie'] : "";
}
```

```
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
<?php }else{ ?>
  <p>Ingresa tu nombre</p>
<?php } ?>

//code...

<h2>¿Que pelicula te gusta?</h2>
<select name="lsMovie" id="">
  <option value="">|Ninguna pelicula|</option>
  <option value="Fast and furious 3" <?php echo ($lsMovie=="Fast and furious 3") ? "selected" : ""; ?>>Fast and furious 3</option>
  <option value="Rush hour 2" <?php echo ($lsMovie=="Rush hour 2") ? "selected" : ""; ?>>Rush hour 2</option>
  <option value="Matrix" <?php echo ($lsMovie=="Matrix") ? "selected" : ""; ?>>Matrix</option>
</select>

//code...
```

### Valores textarea

```php
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
  //Instrucción de insertar
  //Rutina de algun cálculo
  //Aquí puedes alterar esos valores para mostrar diferentes valores modificados
}
```

```
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

//code ...

<h2>¿Tienes alguna duda?</h2>
  <textarea name="txtComentario" id="" cols="37" rows="10"><?php echo $txtComentario; ?></textarea><br /><br />

//code ...
```

### Valores input file

```php
if($_POST){
  print_r($_FILES['archivo']['name']);
}
```

```html
<form action="ejercicio32.php" enctype="multipart/form-data" method="post">
  <input type="file" name="archivo" id="" />
  <br /><br />
  <input type="submit" name="enviar" value="Enviar información" />
</form>
```

### Guardar archivos con PHP (función)

```php
if($_POST){
  print_r($_FILES['archivo']['name']);

  move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
}
```

### Función para JSON decode

```php
$jsonContenido = '[
 {"nombre": "Oscar", "apellido": "Uh"}, 
 {"nombre": "José", "apellido": "Pérez"}
 ]';
$resultado = json_decode($jsonContenido);

foreach ($resultado as $persona) {
  echo $persona->nombre." ".$persona->apellido."<br />";
}
```

### Función para JSON encode

```php
$personas = array("Oscar"=>40, "Jose"=>20, "Marisa"=>38);
echo json_encode($personas);
```

### Consumir una API con PHP

```php
$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";
$opciones = array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));
$respuesta = file_get_contents($url, false, stream_context_create($opciones));
$objRespuesta = json_decode($respuesta);
```

```
<ul>
<?php foreach ($objRespuesta->list as $video) { ?>
  <li><?php echo $video->title; ?> | <?php echo $video->channel; ?> </li>
<?php }?>
</ul>
```

### Función Include

```php
include 'ejercicio36_1.php';
```

### Función Require

```php
require("ejercicio37_1.php");
```

### Include vs Require

```php

//si se utiliza include y hay un error en el archivo o el archivo no existe el codigo php que se ejecute debajo del include se seguira ejecutando sin problemas
<?php include 'ejercicio36_.php'; ?>
<?php echo "Hola estoy en la página principal"; ?>

//si se utiliza require y hay un error en el archivo o el archivo no existe el codigo php que se ejecute debajo del require no se podra ejecutar
<?php require('ejercicio37_.php'); ?>
<?php echo "Hola estoy en la página principal"; ?>
```

### Include_once y require_once

```php
//Para evitar que un archivo se llame más de una ves se utiliza include_once en lugar de include y require_once en lugar de require.

//cambiar esto
<?php include 'ejercicio36_1.php'; ?>
<?php include 'ejercicio36_1.php'; ?>

<?php require('ejercicio37_.php'); ?>
<?php require('ejercicio37_.php'); ?>

//por esto
<?php include_once 'ejercicio36_1.php'; ?>
<?php require_once('ejercicio37_.php'); ?>
```

### Abrir un archivo en PHP

```php
//nombre del archivo
$archivo = "contenido.txt";

//se abre el archivo y se especifica el modo (lectura = r, escritura = w, todo = w+)
$archivoAbierto = fopen($archivo, "r");

//se lee el archivo pasando el archivo abierto y el nombre del archivo
$contenido = fread($archivoAbierto, filesize($archivo));

//se muestra el contenido
echo $contenido;
```

### Escritura de archivos en PHP

```php
//nombre del archivo
$nombreArchivo = "archivo.txt";

//contenido del archivo
$contenidoArchivo = "Hola, saludos";

//se abre el archivo y se especifica el modo (lectura = r, escritura = w, todo = w+)
$archivoCrear = fopen($nombreArchivo, "w");

//se crea el archivo y el contenido que tendra el mismo
fwrite($archivoCrear, $contenidoArchivo);

//se cierra el archivo
fclose($archivoCrear);
```