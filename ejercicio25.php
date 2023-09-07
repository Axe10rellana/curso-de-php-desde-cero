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

?>