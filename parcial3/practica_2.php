<?php
$nombre = $_GET{"nombre"};
echo "Nombre: " .$nombre ."<br><br>";


$edad = $_GET{"edad"};
echo "Edad: " .$edad."<br><br>";

$escuela = $_GET{"escuela"};
echo "Escuela: " .$escuela."<br><br>";

$fecha_ingreso= $_GET{"fecha_ingreso"};
echo "Fecha de ingreso: " .$fecha_ingreso."<br><br>";

$direccion = $_GET{"direccion"};
echo "Direccion: " .$direccion."<br><br>";

if($edad>= 18 ){
    echo "Es mayor de edad". "<br><br>";
    }else{
        echo "Es menor de edad";
    }

    if($escuela =="Cetis107"){
        echo "<div style='background-color:blue;'>CETIS107</div>";
    }else if($escuela == "CBTIS224"){
        "<div style='background-color:red;'>CBTIS224</div>";
    }else if($escuela == "COBAES22"){
        "<div style='background-color:green;'>COBAES22</div>";
    }          
    
?>