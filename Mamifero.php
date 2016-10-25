<?php
class Mamifero{
	public $edad;
	public function __construct(){
		echo "se creo un ".Get_class($this);
}
		public function fijarEdad ($e){
		$this->nombre=$e;
	}
	public function obtenerEdad(){
		return $this->edad;
 } 
 public function crecer (){
		$this->edad++;
	}
	}