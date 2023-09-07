<?php

 class persona{
 	public $nombre;
 	private $edad;
 	protected $altura;

 	public function asignarNombre($nuevoNombre){
 		$this->nombre = $nuevoNombre;
 	}

 	public function imprimirNombre(){
 		echo "Hola soy ".$this->nombre."<br />";
 	}

 	public function mostrarEdad(){
 		$this->edad = 20;
 		return $this->edad."<br />";
 	}

 	public function mostrarAltura(){
 		$this->altura = 1.68;
 		return $this->altura."<br />";
 	}
 }

 $objAlumno = new persona();
 $objAlumno2 = new persona();

 $objAlumno->asignarNombre("Oscar");
 $objAlumno2->asignarNombre("Pedro");

 $objAlumno->imprimirNombre();
 $objAlumno2->imprimirNombre();

 echo $objAlumno2->nombre."<br />";
 echo $objAlumno2->mostrarEdad();
 echo $objAlumno2->mostrarAltura();

?>