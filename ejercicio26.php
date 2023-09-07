<?php

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

 	public function mostrarEdad(){
 		$this->edad = 20;
 		return $this->edad."<br />";
 	}
 }

 $objAlumno = new persona("Oscar Uh");
 $objAlumno->imprimirNombre();

?>