<html>
<head>
</head>
<body>
<?php 
        $esEstudiante=false;
        $edad=18;
        $valor_pi=3.1416;
        $nombre="jose Carlos";
        $semestre=null;
           
           echo'<p> El tipo de$esEstudiante es:'.gettype($esEstudiante).'</p>';
           echo"<p style='color:green'>El tipo de $esEtudiante es:".gettype($esEstudiante)."</p>";

           unset ($edad);
           echo'<p>El tipo de$edad es:'.gettype($edad).'</p>';
    

           echo'<p>El tipo de$valor_pi es:'.gettype($valor_pi).'</p>';
           echo"<p style='color:green'>El tipo de $valor_pi es:".gettype($valor_pi)."</p>";

           echo'<p>El tipo de$nombre es:'.gettype($nombre).'</p>';
           echo"<p style='color:green'>El tipo de $nombre es:".gettype($nombre)."</p>";

           echo'<p>El tipo de$semestre es:'.gettype($semestre).'</p>';
           echo"<p style='color:green'>El tipo de $semestre es:".gettype($semestre)."</p>";
                   /***operador ternario**/
                    echo ($esEstudiante?"hola Estudiante":"quien eres");
                    echo"<br>";
                    echo(3>4?"incorrecto":"correcto");

                    /*constantes*/
                    //una contante en php se define usando la 
                    //funcion define()
                    define("MI_NUMERO_TELEFONICO",999646215);
                    echo "<p> Mi numero telefonico es:",MI_NUMERO_TELEFONICO,"</P>";
                    echo "<p> Mi numero telefonico es:".MI_NUMERO_TELEFONICO."</P>";

                    define("MI_NUMERO_TELEFONICO",951421548);
                    echo"<p>Mi numero telefonico es:",MI_NUMERO_TELEFONICO,"</P>";
                    /*constantes predefinidas*/
                    echo __FILE__,"<br>";
                    echo __DIR__ ,"<br>";
 
?>
</body>
</html>

