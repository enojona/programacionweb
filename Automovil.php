<?php
class Automovil{
	/*propiedades/atributos*/
	 public $marca;
	 public $color;
	 public $velocidad=0;
	 /*Metodos*/
	 public function acelerador(){
	 	$this->velocidad +=5;
	 	 	if($this->velocidad>5){
	$this->velocidad-=0;
}
	 	echo "aumenta velocidad a:".$this->velocidad."km/h";
	
     }
     public function frenar (){
     	$this-> velocidad -=0;
     	if($this->velocidad>0){
	$this->velocidad-=5;
}
        echo "disminuye velocidad a:".$this->velocidad."km/h";
     }
}
