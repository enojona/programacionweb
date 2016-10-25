<?php
include ('Humano.php');
$humano= new Humano();
$humano->fijarEdad(1);
$humano->fijarNombre('Jose');
$humano->crecer();
$humano->crecer();
echo $humano->ObtenerEdad();
$humano->crecer();
echo $humano->ObtenerEdad();